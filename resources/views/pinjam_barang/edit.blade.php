@extends('layouts.app')

@section('content')
<div class="max-w-[720px] mx-auto py-16">
    <h2 class="text-xl font-bold mb-4">Edit Pinjam Barang</h2>

    @if ($errors->any())
        <div class="bg-red-100 text-red-800 px-4 py-2 rounded mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('pinjam_barang.update', $pinjam->id_pinjam) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="peminjam" class="block text-sm">Peminjam</label>
            <input type="text" name="peminjam" id="peminjam" class="border px-4 py-2 w-full" value="{{ old('peminjam', $pinjam->peminjam) }}" required>
        </div>

        <div class="mb-4">
            <label for="tgl_pinjam" class="block text-sm">Tanggal Pinjam</label>
            <input type="date" name="tgl_pinjam" id="tgl_pinjam" class="border px-4 py-2 w-full" value="{{ old('tgl_pinjam', $pinjam->tgl_pinjam) }}" required>
        </div>

        <div class="mb-4">
            <label for="tgl_kembali" class="block text-sm">Tanggal Dikembalikan</label>
            <input type="date" name="tgl_kembali" id="tgl_kembali" class="border px-4 py-2 w-full" value="{{ old('tgl_kembali', $pinjam->tgl_kembali) }}">
        </div>

        <div class="mb-4">
            <label for="id_barang" class="block text-sm">Barang</label>
            <select name="id_barang" id="id_barang" class="border px-4 py-2 w-full" required>
                <option value="">Pilih Barang</option>
                @foreach ($stok as $barang)
                    <option value="{{ $barang->id_barang }}" 
                        {{ $barang->id_barang == $pinjam->id_barang ? 'selected' : '' }}>
                        {{ $barang->nama_barang }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label for="jml_barang" class="block text-sm">Jumlah Barang</label>
            <input type="number" name="jml_barang" id="jml_barang" class="border px-4 py-2 w-full" value="{{ old('jml_barang', $pinjam->jml_barang) }}" required min="1">
        </div>

        <div class="mb-4">
            <label for="is_returned" class="block text-sm">Status Pengembalian</label>
            <select name="is_returned" id="is_returned" class="border px-4 py-2 w-full">
                <option value="0" {{ $pinjam->is_returned == 0 ? 'selected' : '' }}>Belum Kembali</option>
                <option value="1" {{ $pinjam->is_returned == 1 ? 'selected' : '' }}>Sudah Kembali</option>
            </select>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update Pinjaman</button>
    </form>
</div>
@endsection
