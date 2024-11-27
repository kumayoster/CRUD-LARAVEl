@extends('layouts.app')

@section('content')
<div class="max-w-[720px] mx-auto py-16">
    <div class="flex justify-between items-center mb-5">
        <h3 class="text-xl font-semibold">Data Barang</h3>
        <a href="{{ route('barang.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded">Add Barang</a>
    </div>

    <div class="overflow-hidden bg-white shadow-lg rounded-lg">
        <table class="min-w-full text-left table-auto">
            <thead>
                <tr class="bg-gray-100 text-gray-700">
                    <th class="p-4">No</th>
                    <th class="p-4">Nama Barang</th>
                    <th class="p-4">Spesifikasi</th>
                    <th class="p-4">Lokasi</th>
                    <th class="p-4">Kondisi</th>
                    <th class="p-4">Jumlah</th>
                    <th class="p-4">Sumber Dana</th>
                    <th class="p-4">Edit</th>
                    <th class="p-4">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($barangs as $barang)
                <tr>
                    <td class="p-4">{{ $loop->iteration }}</td>
                    <td class="p-4">{{ $barang->nama_barang }}</td>
                    <td class="p-4">{{ $barang->spesifikasi }}</td>
                    <td class="p-4">{{ $barang->lokasi }}</td>
                    <td class="p-4">{{ $barang->kondisi }}</td>
                    <td class="p-4">{{ $barang->jumlah_barang }}</td>
                    <td class="p-4">{{ $barang->sumber_dana }}</td>
                    <td class="p-4">
                        <a href="{{ route('barang.edit', $barang->id_barang) }}" class="text-blue-600">Edit</a>
                    </td>
                    <td class="p-4">
                        <form action="{{ route('barang.destroy', $barang->id_barang) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-5">
        {{ $barangs->links() }}
    </div>
</div>
@endsection
