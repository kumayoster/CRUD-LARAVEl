@extends('layouts.app')

@section('content')
<div class="max-w-[720px] mx-auto py-16">
    <h2 class="text-xl font-bold mb-4">Edit Barang Keluar</h2>

    @if ($errors->any())
        <div class="bg-red-100 text-red-800 px-4 py-2 rounded mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('barangkeluar.update', $barangKeluar->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="id_barang" class="block text-sm">Barang</label>
            <select name="id_barang" id="id_barang" class="border px-4 py-2 w-full" required>
                <option value="">Pilih Barang</option>
                @foreach($barang as $barangItem)
                    <option value="{{ $barangItem->id_barang }}" {{ $barangKeluar->id_barang == $barangItem->id_barang ? 'selected' : '' }}>
                        {{ $barangItem->nama_barang }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label for="tgl_keluar" class="block text-sm">Tanggal Keluar</label>
            <input type="date" name="tgl_keluar" id="tgl_keluar" class="border px-4 py-2 w-full" value="{{ $barangKeluar->tgl_keluar }}" required>
        </div>

        <div class="mb-4">
            <label for="jml_keluar" class="block text-sm">Jumlah Keluar</label>
            <input type="number" name="jml_keluar" id="jml_keluar" class="border px-4 py-2 w-full" value="{{ $barangKeluar->jml_keluar }}" required min="1">
        </div>

        <div class="mb-4">
            <label for="lokasi" class="block text-sm">Lokasi</label>
            <input type="text" name="lokasi" id="lokasi" class="border px-4 py-2 w-full" value="{{ $barangKeluar->lokasi }}" required>
        </div>

        <div class="mb-4">
            <label for="penerima" class="block text-sm">Penerima</label>
            <input type="text" name="penerima" id="penerima" class="border px-4 py-2 w-full" value="{{ $barangKeluar->penerima }}" required>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update Barang Keluar</button>
    </form>
</div>
@endsection
