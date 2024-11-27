<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PinjamBarang; // Assuming the model is named PinjamBarang
use App\Models\Stok; // For referencing related 'stok' data

class PinjamBarangController extends Controller
{
    // Display a listing of the resource
    public function index()
{
    $pinjams = PinjamBarang::with('stok')->paginate(10); // Eager load related stok data
    return view('pinjam_barang.index', compact('pinjams'));
}

    // Show the form for creating a new resource
    public function create()
    {
        $stok = Stok::all(); // Fetch all available items from the stok table
        return view('pinjam_barang.create', compact('stok'));
    }

    // Store a newly created resource in storage
    public function store(Request $request)
{
    $validated = $request->validate([
        'peminjam' => 'required|string|max:255',
        'tgl_pinjam' => 'required|date',
        'tgl_kembali' => 'nullable|date',
        'id_barang' => 'required|exists:stok,id_barang',
        'jml_barang' => 'required|integer|min:1',
    ]);

    // Store the validated data
    PinjamBarang::create($validated);

    // Redirect back with success message
    return redirect()->route('pinjam_barang.index')->with('success', 'Data pinjaman berhasil ditambahkan.');
}


    // Show the form for editing the specified resource
    // Show the form for editing the specified resource
public function edit($id)
{
    $pinjam = PinjamBarang::findOrFail($id); // Retrieve the PinjamBarang by its ID
    $stok = Stok::all(); // Fetch all available items from the Stok table for the dropdown

    return view('pinjam_barang.edit', compact('pinjam', 'stok')); // Pass data to the view
}


    // Update the specified resource in storage
    public function update(Request $request, $id)
{
    // Find the record by ID
    $pinjam = PinjamBarang::findOrFail($id);

    // Validate the incoming request
    $validated = $request->validate([
        'peminjam' => 'required|string|max:255',
        'tgl_pinjam' => 'required|date',
        'tgl_kembali' => 'nullable|date',
        'id_barang' => 'required|exists:stok,id_barang',
        'jml_barang' => 'required|integer|min:1',
        'is_returned' => 'required|boolean',
    ]);

    // Update the record
    $pinjam->peminjam = $validated['peminjam'];
    $pinjam->tgl_pinjam = $validated['tgl_pinjam'];
    $pinjam->tgl_kembali = $validated['tgl_kembali'] ?? null; // Handle null case
    $pinjam->id_barang = $validated['id_barang'];
    $pinjam->jml_barang = $validated['jml_barang'];
    $pinjam->is_returned = $validated['is_returned'];

    $pinjam->save();

    // Redirect with success message
    return redirect()->route('pinjam_barang.index')->with('success', 'Pinjam Barang updated successfully!');
}



    // Remove the specified resource from storage
    public function destroy($id)
    {
        $pinjam = PinjamBarang::findOrFail($id);
        $pinjam->delete();
        return redirect()->route('pinjam_barang.index')->with('success', 'Data pinjaman berhasil dihapus.');
    }
}
