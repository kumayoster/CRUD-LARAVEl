@extends('layouts.app')

@section('content')
<div class="max-w-[720px] mx-auto py-16 sm:py-8 lg:py-16">

    <!-- Header -->
    <div class="w-full flex justify-between items-center mb-5 pl-3">
        <div>
            <h3 class="text-xl font-semibold text-slate-800">Barang Keluar</h3>
            <p class="text-slate-500">Manage outgoing goods and their details.</p>
        </div>
        <div class="ml-3">
            <a href="{{ route('barangkeluar.create') }}" class="inline-flex items-center px-4 py-2 font-semibold text-white bg-blue-500 border border-blue-700 rounded-lg shadow-md hover:bg-blue-600 hover:border-blue-500">
                Tambah Barang Keluar
            </a>
        </div>
    </div>

    <!-- Success Message -->
    @if(session('success'))
        <div class="bg-green-100 text-green-800 px-4 py-2 rounded mb-4 shadow-sm">
            {{ session('success') }}
        </div>
    @endif

    <!-- Table -->
    <div class="overflow-hidden bg-white shadow-lg rounded-lg">
        <table class="min-w-full text-left table-auto">
            <thead>
                <tr class="bg-slate-100 text-slate-700">
                    <th class="p-4 font-semibold">Barang</th>
                    <th class="p-4 font-semibold">Tanggal Keluar</th>
                    <th class="p-4 font-semibold">Jumlah Keluar</th>
                    <th class="p-4 font-semibold">Lokasi</th>
                    <th class="p-4 font-semibold">Penerima</th>
                    <th class="p-4 font-semibold">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($barangKeluar as $item)
                    <tr class="border-b hover:bg-slate-50">
                        <td class="p-4 text-slate-600">{{ $item->barang->nama_barang }}</td>
                        <td class="p-4 text-slate-600">{{ $item->tgl_keluar }}</td>
                        <td class="p-4 text-slate-600">{{ $item->jml_keluar }}</td>
                        <td class="p-4 text-slate-600">{{ $item->lokasi }}</td>
                        <td class="p-4 text-slate-600">{{ $item->penerima }}</td>
                        <td class="p-4 flex space-x-2">
                            <a href="{{ route('barangkeluar.edit', $item->id) }}" class="font-medium text-blue-600 hover:text-blue-800">Edit</a>
                            <form action="{{ route('barangkeluar.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this item?');" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="font-medium text-red-600 hover:text-red-800">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
