@extends('layouts.app')

@section('content')
    <div class="max-w-[720px] mx-auto py-16">
        <h2 class="text-xl font-bold mb-4">Add Barang Masuk</h2>

        @if ($errors->any())
            <div class="bg-red-100 text-red-800 px-4 py-2 rounded mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('barangmasuk.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="id_barang" class="block text-sm">Barang</label>
                <select name="id_barang" id="id_barang" class="border px-4 py-2 w-full" required>
                    <option value="">Select Barang</option>
                    @foreach ($barangs as $barang)
                        <option value="{{ $barang->id_barang }}">{{ $barang->nama_barang }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="tgl_masuk" class="block text-sm">Tanggal Masuk</label>
                <input type="date" name="tgl_masuk" id="tgl_masuk" class="border px-4 py-2 w-full" required>
            </div>

            <div class="mb-4">
                <label for="jml_masuk" class="block text-sm">Jumlah Masuk</label>
                <input type="number" name="jml_masuk" id="jml_masuk" class="border px-4 py-2 w-full" required>
            </div>

            <div class="mb-4">
                <label for="id_supplier" class="block text-sm">Supplier</label>
                <select name="id_supplier" id="id_supplier" class="border px-4 py-2 w-full" required>
                    <option value="">Select Supplier</option>
                    @foreach ($suppliers as $supplier)
                        <option value="{{ $supplier->id_supplier }}">{{ $supplier->id_supplier }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Add Barang Masuk</button>
        </form>
    </div>
@endsection
