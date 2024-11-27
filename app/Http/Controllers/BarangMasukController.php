<?php
namespace App\Http\Controllers;

use App\Models\BarangMasuk;
use App\Models\Barang;
use App\Models\Suplier;
use Illuminate\Http\Request;

class BarangMasukController extends Controller
{
    // Show all Barang Masuk (Incoming Goods)
    public function index()
    {
        $barangMasuks = BarangMasuk::with(['barang', 'supplier'])->get(); // Retrieve all barang masuk with related barang and supplier data
        return view('barangmasuk.index', compact('barangMasuks'));
    }

    // Show the form to create a new Barang Masuk
    public function create()
    {
        $barangs = Barang::all(); // Get all barang
        $suppliers = Suplier::all(); // Get all suppliers
        return view('barangmasuk.create', compact('barangs', 'suppliers'));
    }

    // Store a new Barang Masuk
    public function store(Request $request)
    {
        $request->validate([
            'id_barang' => 'required|exists:stok,id_barang', // Ensure barang exists in the stok table
            'tgl_masuk' => 'required|date',
            'jml_masuk' => 'required|integer|min:1',
            'id_supplier' => 'required|exists:supplier,id_supplier', // Ensure supplier exists
        ]);

        BarangMasuk::create([
            'id_barang' => $request->id_barang,
            'tgl_masuk' => $request->tgl_masuk,
            'jml_masuk' => $request->jml_masuk,
            'id_supplier' => $request->id_supplier,
        ]);

        return redirect()->route('barangmasuk.index')->with('success', 'Barang Masuk created successfully');
    }

    // Show the form to edit an existing Barang Masuk
    public function edit($id)
    {
        $barangMasuk = BarangMasuk::findOrFail($id);
        $barangs = Barang::all(); // Get all barang
        $suppliers = Suplier::all(); // Get all suppliers
        return view('barangmasuk.edit', compact('barangMasuk', 'barangs', 'suppliers'));
    }

    // Update an existing Barang Masuk
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_barang' => 'required|exists:stok,id_barang', // Ensure barang exists in the stok table
            'tgl_masuk' => 'required|date',
            'jml_masuk' => 'required|integer|min:1',
            'id_supplier' => 'required|exists:supplier,id_supplier', // Ensure supplier exists
        ]);

        $barangMasuk = BarangMasuk::findOrFail($id);
        $barangMasuk->update([
            'id_barang' => $request->id_barang,
            'tgl_masuk' => $request->tgl_masuk,
            'jml_masuk' => $request->jml_masuk,
            'id_supplier' => $request->id_supplier,
        ]);

        return redirect()->route('barangmasuk.index')->with('success', 'Barang Masuk updated successfully');
    }

    // Delete a Barang Masuk record
    public function destroy($id)
    {
        $barangMasuk = BarangMasuk::findOrFail($id);
        $barangMasuk->delete();

        return redirect()->route('barangmasuk.index')->with('success', 'Barang Masuk deleted successfully');
    }
}
?>