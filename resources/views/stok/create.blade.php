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

        <form action="{{ route('stok.store') }}" method="POST">
            @csrf
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-lg font-semibold text-gray-900">Add Stock</h2>
                <p class="mt-1 text-sm text-gray-600">Please provide the required details accurately.</p>

                <div class="mt-10">
                    <label for="nama_barang" class="block text-sm font-medium text-gray-900">Item Name</label>
                    <div class="mt-2">
                        <input id="nama_barang" name="nama_barang" type="text" value="{{ old('nama_barang') }}" required
                            class="block w-full rounded-md border-gray-300 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm">
                    </div>
                </div>

                <div class="mt-5">
                    <label for="jml_masuk" class="block text-sm font-medium text-gray-900">Stock In</label>
                    <div class="mt-2">
                        <input id="jml_masuk" name="jml_masuk" type="number" value="{{ old('jml_masuk') }}" required
                            class="block w-full rounded-md border-gray-300 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm">
                    </div>
                </div>

                <div class="mt-5">
                    <label for="jml_keluar" class="block text-sm font-medium text-gray-900">Stock Out</label>
                    <div class="mt-2">
                        <input id="jml_keluar" name="jml_keluar" type="number" value="{{ old('jml_keluar') }}" required
                            class="block w-full rounded-md border-gray-300 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm">
                    </div>
                </div>

                <div class="mt-5">
                    <label for="total_barang" class="block text-sm font-medium text-gray-900">Total Stock</label>
                    <div class="mt-2">
                        <input id="total_barang" name="total_barang" type="number" value="{{ old('total_barang') }}" required
                            class="block w-full rounded-md border-gray-300 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm">
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
