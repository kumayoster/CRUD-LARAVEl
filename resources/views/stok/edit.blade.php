@extends('layouts.app')

@section('content')
<div class="max-w-[720px] mx-auto py-16">
    <h2 class="text-xl font-bold mb-4">Edit Stock</h2>

    @if ($errors->any())
        <div class="bg-red-100 text-red-800 px-4 py-2 rounded mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('stok.update', $stok->id_barang) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="nama_barang" class="block text-sm">Item Name</label>
            <input type="text" name="nama_barang" id="nama_barang" class="border px-4 py-2 w-full" value="{{ old('nama_barang', $stok->nama_barang) }}" required>
        </div>
        <div class="mb-4">
            <label for="jml_masuk" class="block text-sm">Stock In</label>
            <input type="number" name="jml_masuk" id="jml_masuk" class="border px-4 py-2 w-full" value="{{ old('jml_masuk', $stok->jml_masuk) }}" required>
        </div>
        <div class="mb-4">
            <label for="jml_keluar" class="block text-sm">Stock Out</label>
            <input type="number" name="jml_keluar" id="jml_keluar" class="border px-4 py-2 w-full" value="{{ old('jml_keluar', $stok->jml_keluar) }}" required>
        </div>
        <div class="mb-4">
            <label for="total_barang" class="block text-sm">Total Stock</label>
            <input type="number" name="total_barang" id="total_barang" class="border px-4 py-2 w-full" value="{{ old('total_barang', $stok->total_barang) }}" required>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
    </form>
</div>
@endsection
