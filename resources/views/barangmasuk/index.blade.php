@extends('layouts.app')

@section('content')
<div class="max-w-[720px] mx-auto py-16 sm:py-8 lg:py-16">
    
    <!-- Header -->
    <div class="w-full flex justify-between items-center mb-5 pl-3">
        <div>
            <h3 class="text-xl font-semibold text-slate-800">Barang Masuk</h3>
        </div>
        <div class="ml-3">
            <a href="{{ route('barangmasuk.create') }}" class="inline-flex items-center px-4 py-2 font-semibold text-white bg-indigo-600 border border-indigo-700 rounded-lg shadow-md hover:bg-indigo-700 hover:border-indigo-500">
                Add Barang Masuk
            </a>
        </div>
    </div>

    <!-- Table -->
    <div class="overflow-hidden bg-white shadow-lg rounded-lg">
        <table class="min-w-full text-left table-auto">
            <thead>
                <tr class="bg-slate-100 text-slate-700">
                    <th class="p-4 font-semibold">ID Barang</th>
                    <th class="p-4 font-semibold">Tanggal Masuk</th>
                    <th class="p-4 font-semibold">Jumlah Masuk</th>
                    <th class="p-4 font-semibold">Supplier</th>
                    <th class="p-4 font-semibold">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($barangMasuks as $barangMasuk)
                    <tr class="border-b hover:bg-slate-50">
                        <td class="p-4 text-slate-600">{{ $barangMasuk->barang->nama_barang }}</td>
                        <td class="p-4 text-slate-600">{{ $barangMasuk->tgl_masuk }}</td>
                        <td class="p-4 text-slate-600">{{ $barangMasuk->jml_masuk }}</td>
                        <td class="p-4 text-slate-600">{{ $barangMasuk->supplier->id_supplier }}</td>
                        <td class="p-4 flex space-x-2">
                            <a href="{{ route('barangmasuk.edit', $barangMasuk->id) }}" class="font-medium text-blue-600 hover:text-blue-800">Edit</a>
                            <form action="{{ route('barangmasuk.destroy', $barangMasuk->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this record?');">
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
