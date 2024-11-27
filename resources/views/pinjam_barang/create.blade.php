@extends('layouts.app')

@section('content')
<div class="max-w-[720px] mx-auto py-16">
    <h3 class="text-xl font-semibold mb-6">Add Peminjaman Barang</h3>

    <!-- Display validation errors -->
    @if ($errors->any())
        <div class="bg-red-100 text-red-800 px-4 py-2 rounded mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('pinjam_barang.store') }}" method="POST" class="bg-white shadow-md rounded-lg p-6">
        @csrf

        <div class="mb-4">
            <label for="peminjam" class="block text-sm font-medium text-gray-700">Peminjam</label>
            <input id="peminjam" name="peminjam" type="text" value="{{ old('peminjam') }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        </div>

        <div class="mb-4">
            <label for="tgl_pinjam" class="block text-sm font-medium text-gray-700">Tanggal Pinjam</label>
            <input id="tgl_pinjam" name="tgl_pinjam" type="date" value="{{ old('tgl_pinjam') }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        </div>

        <div class="mb-4">
            <label for="id_barang" class="block text-sm font-medium text-gray-700">Barang</label>
            <select id="id_barang" name="id_barang" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                <option value="">-- Pilih Barang --</option>
                @foreach ($stok as $item)
                    <option value="{{ $item->id_barang }}" {{ old('id_barang') == $item->id_barang ? 'selected' : '' }}>
                        {{ $item->nama_barang }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label for="jml_barang" class="block text-sm font-medium text-gray-700">Jumlah Barang</label>
            <input id="jml_barang" name="jml_barang" type="number" value="{{ old('jml_barang') }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        </div>

        <div class="mb-4">
            <label for="tgl_kembali" class="block text-sm font-medium text-gray-700">Tanggal Kembali (Optional)</label>
            <input id="tgl_kembali" name="tgl_kembali" type="date" value="{{ old('tgl_kembali') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        </div>

        <div class="flex justify-end">
            <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-md shadow-sm">Save</button>
        </div>
    </form>
</div>
@endsection
