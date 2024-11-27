<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barangs = Barang::paginate(10);
        return view('barang.index', compact('barangs'));
    }

    public function create()
    {
        return view('barang.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required|string|max:255',
            'spesifikasi' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
            'kondisi' => 'required|string|max:255',
            'jumlah_barang' => 'required|integer',
            'sumber_dana' => 'required|string|max:255',
        ]);

        Barang::create($request->all());
        return redirect()->route('barang.index')->with('success', 'Barang added successfully');
    }

    public function edit($id_barang)
    {
        $barang = Barang::findOrFail($id_barang);
        return view('barang.edit', compact('barang'));
    }

    public function update(Request $request, $id_barang)
    {
        $request->validate([
            'nama_barang' => 'required|string|max:255',
            'spesifikasi' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
            'kondisi' => 'required|string|max:255',
            'jumlah_barang' => 'required|integer',
            'sumber_dana' => 'required|string|max:255',
        ]);

        $barang = Barang::findOrFail($id_barang);
        $barang->update($request->all());
        return redirect()->route('barang.index')->with('success', 'Barang updated successfully');
    }

    public function destroy($id_barang)
    {
        $barang = Barang::findOrFail($id_barang);
        $barang->delete();
        return redirect()->route('barang.index')->with('success', 'Barang deleted successfully');
    }
}

