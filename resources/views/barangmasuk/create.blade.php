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

            <form action="{{ route('barangmasuk.store') }}" method="POST">
                @csrf
                <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-lg font-semibold text-gray-900">Add Barang Masuk</h2>
                    <p class="mt-1 text-sm text-gray-600">Please enter the details of the incoming goods.</p>

                    <div class="mt-10">
                        <label for="id_barang" class="block text-sm font-medium text-gray-900">Barang</label>
                        <div class="mt-2">
                            <select id="id_barang" name="id_barang" required
                                class="block w-full rounded-md border-gray-300 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm">
                                <option value="">Select Barang</option>
                                @foreach ($barangs as $barang)
                                    <option value="{{ $barang->id_barang }}">{{ $barang->nama_barang }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="mt-5">
                        <label for="tgl_masuk" class="block text-sm font-medium text-gray-900">Tanggal Masuk</label>
                        <div class="mt-2">
                            <input type="date" id="tgl_masuk" name="tgl_masuk" required
                                class="block w-full rounded-md border-gray-300 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm">
                        </div>
                    </div>

                    <div class="mt-5">
                        <label for="jml_masuk" class="block text-sm font-medium text-gray-900">Jumlah Masuk</label>
                        <div class="mt-2">
                            <input type="number" id="jml_masuk" name="jml_masuk" required
                                class="block w-full rounded-md border-gray-300 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm">
                        </div>
                    </div>

                    <div class="mt-5">
                        <label for="id_supplier" class="block text-sm font-medium text-gray-900">Supplier</label>
                        <div class="mt-2">
                            <select id="id_supplier" name="id_supplier" required
                                class="block w-full rounded-md border-gray-300 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm">
                                <option value="">Select Supplier</option>
                                @foreach ($suppliers as $supplier)
                                    <option value="{{ $supplier->id_supplier }}">{{ $supplier->id_supplier }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <button type="button" class="text-sm font-semibold text-gray-900">Cancel</button>
                    <button type="submit" class="rounded-md bg-blue-500 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">Add Barang Masuk</button>
                </div>
            </form>
        </div>
    </div>
@endsection
