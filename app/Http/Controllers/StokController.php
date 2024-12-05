<?php

namespace App\Http\Controllers;

use App\Models\Stok;
use App\Models\Barang; // Include Barang model
use Illuminate\Http\Request;

class StokController extends Controller
{
    public function index()
    {
        $stok = Stok::paginate(10);
        return view('stok.index', compact('stok'));
    }

    public function create()
    {
        return view('stok.create');
    }

    public function store(Request $request)
    {
        // Validate the input data
        $validated = $request->validate([
            'nama_barang' => 'required|string|max:255',
            'jml_masuk' => 'required|integer|min:0',
            'jml_keluar' => 'required|integer|min:0',
            'total_barang' => 'required|integer|min:0',
        ]);
    
        // Create a new stock record
        $stok = Stok::create($validated);
    
        // Create corresponding barang record
        \DB::table('barang')->insert([
            'id_barang' => $stok->id_barang, // Assuming 'id_barang' is auto-incremented in stok
            'nama_barang' => $validated['nama_barang'],
            'spesifikasi' => 'Default Spesifikasi', // Set a default value or accept input from the form
            'lokasi' => 'Default Lokasi',          // Set a default value or accept input from the form
            'kondisi' => 'Baik',                  // Default condition
            'jumlah_barang' => $validated['total_barang'],
            'sumber_dana' => 'Default Sumber Dana', // Set a default value or accept input from the form
        ]);
    
        return redirect()->route('stok.index')->with('success', 'Stock and Barang data added successfully.');
    }
    

    public function edit($id)
    {
        $stok = Stok::findOrFail($id);
        return view('stok.edit', compact('stok'));
    }

    public function update(Request $request, Stok $stok)
    {
        $validated = $request->validate([
            'nama_barang' => 'required|string|max:255',
            'jml_masuk' => 'required|integer|min:0',
            'jml_keluar' => 'required|integer|min:0',
            'total_barang' => 'required|integer|min:0',
        ]);

        // Update stock record
        $stok->update($validated);

        // Update corresponding barang record
        $barang = Barang::where('id_barang', $stok->id_barang)->first();
        if ($barang) {
            $barang->update([
                'nama_barang' => $validated['nama_barang'],
                'jumlah_barang' => $validated['total_barang'],
                // Update other fields as necessary
            ]);
        }

        return redirect()->route('stok.index')->with('success', 'Stock and Barang data updated successfully.');
    }

    public function destroy(Stok $stok)
    {
        // Delete the corresponding barang record
        Barang::where( 'id_barang', $stok->id_barang)->delete();

        // Delete stock record
        $stok->delete();

        return redirect()->route('stok.index')->with('success', 'Stock and Barang data deleted successfully.');
    }
}
