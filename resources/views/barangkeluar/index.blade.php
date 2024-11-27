@extends('layouts.app')

@section('content')
<div class="max-w-[720px] mx-auto py-16">
    <h2 class="text-xl font-bold mb-4">Barang Keluar</h2>

    @if(session('success'))
        <div class="bg-green-100 text-green-800 px-4 py-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('barangkeluar.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4">Tambah Barang Keluar</a>

    <table class="table-auto w-full border-collapse border border-gray-300">
        <thead>
            <tr>
                <th class="border px-4 py-2">Barang</th>
                <th class="border px-4 py-2">Tanggal Keluar</th>
                <th class="border px-4 py-2">Jumlah Keluar</th>
                <th class="border px-4 py-2">Lokasi</th>
                <th class="border px-4 py-2">Penerima</th>
                <th class="border px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($barangKeluar as $item)
                <tr>
                    <td class="border px-4 py-2">{{ $item->barang->nama_barang }}</td>
                    <td class="border px-4 py-2">{{ $item->tgl_keluar }}</td>
                    <td class="border px-4 py-2">{{ $item->jml_keluar }}</td>
                    <td class="border px-4 py-2">{{ $item->lokasi }}</td>
                    <td class="border px-4 py-2">{{ $item->penerima }}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('barangkeluar.edit', $item->id) }}" class="text-blue-500">Edit</a>

                        <!-- Delete Button -->
                        <form action="{{ route('barangkeluar.destroy', $item->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
