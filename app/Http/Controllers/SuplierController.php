<?php

namespace App\Http\Controllers;

use App\Models\Suplier;
use Illuminate\Http\Request;

class SuplierController extends Controller
{
    public function index()
    {
        $supliers = Suplier::paginate(10);
        return view('suplier.index', compact('supliers'));
    }
    
    public function create()
    {
        return view('suplier.create');
    }
 
 
    // Menyimpan data Supplier ke database
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_supplier' => 'required|integer',
            'nama_supplier' => 'required|string|max:255',
            'alamat_supplier' => 'required|string|max:255',
            'telp_supplier' => 'required|string|max:255',
        ]);
 
 
        Suplier::create($validated);
 
 
        return redirect()->route('suplier.index')->with('success', 'Supplier berhasil ditambahkan.');
    }
 
 
    // Menghapus data Supplier dari database
    public function destroy(Suplier $suplier)
    {
        $suplier->delete();
    
        return redirect()->route('suplier.index')->with('success', 'Supplier successfully deleted.');
    }
    
 
    // Show the edit form for a specific supplier
    public function edit($id)
    {
        $suplier = Suplier::find($id);
    
        if (!$suplier) {
            return redirect()->route('suplier.index')->with('error', 'Supplier not found.');
        }
    
        return view('suplier.edit', compact('suplier'));
    }
    
 
    public function update(Request $request, Suplier $suplier)
{
    $validated = $request->validate([
        'nama_supplier' => 'required|string|max:255',
        'alamat_supplier' => 'required|string',
        'telp_supplier' => 'required|string|max:255',
    ]);

    $suplier->update($validated);

    return redirect()->route('suplier.index')->with('success', 'Supplier updated successfully!');
}
}