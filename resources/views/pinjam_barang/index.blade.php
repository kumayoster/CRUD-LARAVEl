@extends('layouts.app')

@section('content')
<div class="max-w-[720px] mx-auto py-16 sm:py-8 lg:py-16">

    <!-- Header -->
    <div class="w-full flex justify-between items-center mb-5 pl-3">
        <div>
            <h3 class="text-xl font-semibold text-slate-800 whitespace-nowrap">Data Peminjaman Barang</h3>
        </div>
        <div class="ml-3">
            <a href="{{ route('pinjam_barang.create') }}" class="inline-flex items-center px-4 py-2 font-semibold text-white bg-blue-500 border border-blue-700 rounded-lg shadow-md hover:bg-blue-600 hover:border-blue-500">
                Add Peminjaman
            </a>
        </div>
    </div>

    <!-- Table -->
    <div class="overflow-hidden bg-white shadow-lg rounded-lg">
        <table class="min-w-full text-left table-auto">
            <thead>
                <tr class="bg-slate-100 text-slate-700">
                    <th class="p-4 font-semibold">No</th>
                    <th class="p-4 font-semibold">Peminjam</th>
                    <th class="p-4 font-semibold">Tanggal Pinjam</th>
                    <th class="p-4 font-semibold">Tanggal Kembali</th>
                    <th class="p-4 font-semibold">Barang</th>
                    <th class="p-4 font-semibold">Jumlah</th>
                    <th class="p-4 font-semibold">Edit</th>
                    <th class="p-4 font-semibold">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pinjams as $pinjam)
                <tr class="border-b hover:bg-slate-50">
                    <td class="p-4 text-slate-600">{{ $loop->iteration }}</td>
                    <td class="p-4 text-slate-600">{{ $pinjam->peminjam }}</td>
                    <td class="p-4 text-slate-600">{{ $pinjam->tgl_pinjam }}</td>
                    <td class="p-4 text-slate-600">{{ $pinjam->tgl_kembali ?? 'Belum Dikembalikan' }}</td>
                    <td class="p-4 text-slate-600">{{ $pinjam->stok->nama_barang }}</td>
                    <td class="p-4 text-slate-600">{{ $pinjam->jml_barang }}</td>
                    <td class="p-4">
                        <a href="{{ route('pinjam_barang.edit', $pinjam->id_pinjam) }}" class="text-blue-600 hover:text-blue-800">Edit</a>
                    </td>
                    <td class="p-4">
                        <form action="{{ route('pinjam_barang.destroy', $pinjam->id_pinjam) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this record?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-800">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="mt-5">
        {{ $pinjams->links() }}
    </div>
</div>
@endsection
