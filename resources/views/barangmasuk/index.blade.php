@extends('layouts.app')

@section('content')
    <div class="max-w-[720px] mx-auto py-16">
        <h2 class="text-xl font-bold mb-4">Barang Masuk</h2>

        <a href="{{ route('barangmasuk.create') }}" class="px-4 py-2 bg-indigo-600 text-white rounded-md">Add Barang Masuk</a>

        <div class="mt-6">
            <table class="w-full table-auto">
                <thead>
                    <tr>
                        <th class="px-4 py-2">ID Barang</th>
                        <th class="px-4 py-2">Tanggal Masuk</th>
                        <th class="px-4 py-2">Jumlah Masuk</th>
                        <th class="px-4 py-2">Supplier</th>
                        <th class="px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($barangMasuks as $barangMasuk)
                        <tr>
                            <td class="px-4 py-2">{{ $barangMasuk->barang->nama_barang }}</td>
                            <td class="px-4 py-2">{{ $barangMasuk->tgl_masuk }}</td>
                            <td class="px-4 py-2">{{ $barangMasuk->jml_masuk }}</td>
                            <td class="px-4 py-2">{{ $barangMasuk->supplier->id_supplier }}</td>
                            <td class="px-4 py-2">
                                <a href="{{ route('barangmasuk.edit', $barangMasuk->id) }}" class="text-blue-500">Edit</a> |
                                <form action="{{ route('barangmasuk.destroy', $barangMasuk->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
