@extends('layouts.app')

@section('content')
<div class="max-w-[720px] mx-auto py-16">
    <div class="flex justify-between items-center mb-5">
        <h3 class="text-xl font-semibold">Data Peminjaman Barang</h3>
        <a href="{{ route('pinjam_barang.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded">Add Peminjaman</a>
    </div>

    <div class="overflow-hidden bg-white shadow-lg rounded-lg">
        <table class="min-w-full text-left table-auto">
            <thead>
                <tr class="bg-gray-100 text-gray-700">
                    <th class="p-4">No</th>
                    <th class="p-4">Peminjam</th>
                    <th class="p-4">Tanggal Pinjam</th>
                    <th class="p-4">Tanggal Kembali</th>
                    <th class="p-4">Barang</th>
                    <th class="p-4">Jumlah</th>
                    <th class="p-4">Edit</th>
                    <th class="p-4">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pinjams as $pinjam)
                <tr>
                    <td class="p-4">{{ $loop->iteration }}</td>
                    <td class="p-4">{{ $pinjam->peminjam }}</td>
                    <td class="p-4">{{ $pinjam->tgl_pinjam }}</td>
                    <td class="p-4">{{ $pinjam->tgl_kembali ?? 'Belum Dikembalikan' }}</td>
                    <td class="p-4">{{ $pinjam->stok->nama_barang }}</td>
                    <td class="p-4">{{ $pinjam->jml_barang }}</td>
                    <td class="p-4">
                        <a href="{{ route('pinjam_barang.edit', $pinjam->id_pinjam) }}" class="text-blue-600">Edit</a>
                    </td>
                    <td class="p-4">
                        <form action="{{ route('pinjam_barang.destroy', $pinjam->id_pinjam) }}" method="POST">
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
        {{ $pinjams->links() }}
    </div>
</div>
@endsection
