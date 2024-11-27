<?php
namespace App\Http\Controllers;

use App\Models\BarangKeluar;
use App\Models\Barang;
use Illuminate\Http\Request;

class BarangKeluarController extends Controller
{
    // Index method
    public function index()
    {
        $barangKeluar = BarangKeluar::with('barang')->get();
        return view('barangkeluar.index', compact('barangKeluar'));
    }

    // Create method
    public function create()
    {
        $barang = Barang::all();  // Get all barang for the select field
        return view('barangkeluar.create', compact('barang'));
    }

    // Store method
    public function store(Request $request)
    {
        // Validate incoming request
        $request->validate([
            'id_barang' => 'required|exists:barang,id_barang',
            'tgl_keluar' => 'required|date',
            'jml_keluar' => 'required|integer|min:1',
            'lokasi' => 'required|string',
            'penerima' => 'required|string',
        ]);

        // Create new BarangKeluar entry
        BarangKeluar::create([
            'id_barang' => $request->id_barang,
            'tgl_keluar' => $request->tgl_keluar,
            'jml_keluar' => $request->jml_keluar,
            'lokasi' => $request->lokasi,
            'penerima' => $request->penerima,
        ]);

        return redirect()->route('barangkeluar.index')->with('success', 'Barang Keluar successfully added');
    }

    // Edit method
    public function edit($id)
    {
        $barangKeluar = BarangKeluar::findOrFail($id);
        $barang = Barang::all();  // Get all barang for the select field
        return view('barangkeluar.edit', compact('barangKeluar', 'barang'));
    }

    // Update method
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_barang' => 'required|exists:barangs,id_barang',
            'tgl_keluar' => 'required|date',
            'jml_keluar' => 'required|integer|min:1',
            'lokasi' => 'required|string',
            'penerima' => 'required|string',
        ]);

        $barangKeluar = BarangKeluar::findOrFail($id);
        $barangKeluar->update([
            'id_barang' => $request->id_barang,
            'tgl_keluar' => $request->tgl_keluar,
            'jml_keluar' => $request->jml_keluar,
            'lokasi' => $request->lokasi,
            'penerima' => $request->penerima,
        ]);

        return redirect()->route('barangkeluar.index')->with('success', 'Barang Keluar successfully updated');
    }
    public function destroy($id)
    {
        // Find the BarangKeluar record by ID
        $barangKeluar = BarangKeluar::findOrFail($id);

        // Delete the record
        $barangKeluar->delete();

        // Redirect back with success message
        return redirect()->route('barangkeluar.index')->with('success', 'Barang Keluar successfully deleted');
    }
}
?>