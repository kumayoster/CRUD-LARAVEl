@extends('layouts.app')

@section('content')
    <div class="max-w-[720px] mx-auto py-16 sm:py-8 lg:py-16">
        <div class="relative flex flex-col w-full h-full overflow-scroll text-gray-700 bg-white shadow-md rounded-lg px-6 py-6">
            
            <h3 class="text-xl font-semibold text-gray-900 mb-6">Add Peminjaman Barang</h3>

            <!-- Display validation errors -->
            @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('pinjam_barang.store') }}" method="POST" class="space-y-6">
                @csrf

                <div class="mb-4">
                    <label for="peminjam" class="block text-sm font-medium text-gray-900">Peminjam</label>
                    <div class="mt-2">
                        <input id="peminjam" name="peminjam" type="text" value="{{ old('peminjam') }}" required
                            class="block w-full rounded-md border-gray-300 py-2 pl-3 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm">
                    </div>
                </div>

                <div class="mb-4">
                    <label for="tgl_pinjam" class="block text-sm font-medium text-gray-900">Tanggal Pinjam</label>
                    <div class="mt-2">
                        <input id="tgl_pinjam" name="tgl_pinjam" type="date" value="{{ old('tgl_pinjam') }}" required
                            class="block w-full rounded-md border-gray-300 py-2 pl-3 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm">
                    </div>
                </div>

                <div class="mb-4">
                    <label for="id_barang" class="block text-sm font-medium text-gray-900">Barang</label>
                    <div class="mt-2">
                        <select id="id_barang" name="id_barang" required
                            class="block w-full rounded-md border-gray-300 py-2 pl-3 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm">
                            <option value="">-- Pilih Barang --</option>
                            @foreach ($stok as $item)
                                <option value="{{ $item->id_barang }}"
                                    {{ old('id_barang') == $item->id_barang ? 'selected' : '' }}>
                                    {{ $item->nama_barang }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="mb-4">
                    <label for="jml_barang" class="block text-sm font-medium text-gray-900">Jumlah Barang</label>
                    <div class="mt-2">
                        <input id="jml_barang" name="jml_barang" type="number" value="{{ old('jml_barang') }}" required
                            class="block w-full rounded-md border-gray-300 py-2 pl-3 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm">
                    </div>
                </div>

                <div class="mb-4">
                    <label for="tgl_kembali" class="block text-sm font-medium text-gray-900">Tanggal Kembali (Optional)</label>
                    <div class="mt-2">
                        <input id="tgl_kembali" name="tgl_kembali" type="date" value="{{ old('tgl_kembali') }}"
                            class="block w-full rounded-md border-gray-300 py-2 pl-3 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm">
                    </div>
                </div>

                <div class="flex justify-end">
                    <button type="submit"
                        class="px-4 py-2 bg-indigo-600 text-white rounded-md shadow-sm hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:ring-offset-2">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
