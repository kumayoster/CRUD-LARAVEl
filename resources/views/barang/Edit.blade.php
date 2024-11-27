@extends('layouts.app')

@section('content')
@if ($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="max-w-[720px] mx-auto py-16 sm:py-8 lg:py-16">
    <div class="relative flex flex-col w-full h-full overflow-scroll text-gray-700 bg-white shadow-md rounded-lg px-6 py-6">
        <form action="{{ route('barang.update', $barang->id_barang) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-lg font-semibold text-gray-900">Edit Barang Data</h2>
                <p class="mt-1 text-sm text-gray-600">Update the necessary information carefully.</p>
                
                <div class="mt-5">
                    <label for="nama_barang" class="block text-sm font-medium text-gray-900">Nama Barang</label>
                    <div class="mt-2">
                        <input id="nama_barang" name="nama_barang" type="text" value="{{ old('nama_barang', $barang->nama_barang) }}" required class="block w-full rounded-md border-gray-300 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm">
                    </div>
                </div>

                <div class="mt-5">
                    <label for="spesifikasi" class="block text-sm font-medium text-gray-900">Spesifikasi</label>
                    <div class="mt-2">
                        <textarea id="spesifikasi" name="spesifikasi" rows="3" required class="block w-full rounded-md border-gray-300 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm">{{ old('spesifikasi', $barang->spesifikasi) }}</textarea>
                    </div>
                </div>

                <div class="mt-5">
                    <label for="lokasi" class="block text-sm font-medium text-gray-900">Lokasi</label>
                    <div class="mt-2">
                        <input id="lokasi" name="lokasi" type="text" value="{{ old('lokasi', $barang->lokasi) }}" required class="block w-full rounded-md border-gray-300 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm">
                    </div>
                </div>

                <div class="mt-5">
                    <label for="kondisi" class="block text-sm font-medium text-gray-900">Kondisi</label>
                    <div class="mt-2">
                        <input id="kondisi" name="kondisi" type="text" value="{{ old('kondisi', $barang->kondisi) }}" required class="block w-full rounded-md border-gray-300 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm">
                    </div>
                </div>

                <div class="mt-5">
                    <label for="jumlah_barang" class="block text-sm font-medium text-gray-900">Jumlah Barang</label>
                    <div class="mt-2">
                        <input id="jumlah_barang" name="jumlah_barang" type="number" value="{{ old('jumlah_barang', $barang->jumlah_barang) }}" required class="block w-full rounded-md border-gray-300 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm">
                    </div>
                </div>

                <div class="mt-5">
                    <label for="sumber_dana" class="block text-sm font-medium text-gray-900">Sumber Dana</label>
                    <div class="mt-2">
                        <input id="sumber_dana" name="sumber_dana" type="text" value="{{ old('sumber_dana', $barang->sumber_dana) }}" required class="block w-full rounded-md border-gray-300 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm">
                    </div>
                </div>
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="button" class="text-sm font-semibold text-gray-900">Cancel</button>
                <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection
