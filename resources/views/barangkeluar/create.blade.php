@extends('layouts.app')

@section('content')
    <div class="max-w-[720px] mx-auto py-16 sm:py-8 lg:py-16">
        <div class="relative flex flex-col w-full h-full overflow-scroll text-gray-700 bg-white shadow-md rounded-lg px-6 py-6">
            @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('barangkeluar.store') }}" method="POST">
                @csrf
                <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-lg font-semibold text-gray-900">Tambah Barang Keluar</h2>
                    <p class="mt-1 text-sm text-gray-600">Please enter the details for the outgoing goods.</p>

                    <div class="mt-10">
                        <label for="id_barang" class="block text-sm font-medium text-gray-900">Barang</label>
                        <div class="mt-2">
                            <select id="id_barang" name="id_barang" required
                                class="block w-full rounded-md border-gray-300 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm">
                                <option value="">Pilih Barang</option>
                                @foreach ($barang as $barangItem)
                                    <option value="{{ $barangItem->id_barang }}">{{ $barangItem->nama_barang }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="mt-5">
                        <label for="tgl_keluar" class="block text-sm font-medium text-gray-900">Tanggal Keluar</label>
                        <div class="mt-2">
                            <input type="date" id="tgl_keluar" name="tgl_keluar" required
                                class="block w-full rounded-md border-gray-300 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm">
                        </div>
                    </div>

                    <div class="mt-5">
                        <label for="jml_keluar" class="block text-sm font-medium text-gray-900">Jumlah Keluar</label>
                        <div class="mt-2">
                            <input type="number" id="jml_keluar" name="jml_keluar" required min="1"
                                class="block w-full rounded-md border-gray-300 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm">
                        </div>
                    </div>

                    <div class="mt-5">
                        <label for="lokasi" class="block text-sm font-medium text-gray-900">Lokasi</label>
                        <div class="mt-2">
                            <input type="text" id="lokasi" name="lokasi" required
                                class="block w-full rounded-md border-gray-300 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm">
                        </div>
                    </div>

                    <div class="mt-5">
                        <label for="penerima" class="block text-sm font-medium text-gray-900">Penerima</label>
                        <div class="mt-2">
                            <input type="text" id="penerima" name="penerima" required
                                class="block w-full rounded-md border-gray-300 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm">
                        </div>
                    </div>
                </div>

                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <button type="button" class="text-sm font-semibold text-gray-900">Cancel</button>
                    <button type="submit" class="rounded-md bg-blue-500 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">Tambah Barang Keluar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
