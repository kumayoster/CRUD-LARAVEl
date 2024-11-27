@extends('layouts.app')

@section('content')
<!-- component -->
<!--
This example requires some changes to your config:
// tailwind.config.js
module.exports = {
    plugins: [
        require('@tailwindcss/forms'),
    ],
}
-->

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
    <div class="relative flex flex-col w-jafull h-full overflow-scroll text-gray-700 bg-white shadow-md rounded-lg px-6 py-6">
        <form action="{{ route('suplier.store') }}" method="POST">
            @csrf
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-lg font-semibold text-gray-900">Add Supplier Data</h2>
                <p class="mt-1 text-sm text-gray-600">This information will be displayed publicly, so be careful what you share.</p>
                
                <div class="mt-10">
                    <label for="id_supplier" class="block text-sm font-medium text-gray-900">ID Supplier</label>
                    <div class="mt-2">
                        <input id="id_supplier" name="id_supplier" type="text" autocomplete="id_supplier" value="{{ old('id_supplier') }}" required class="block w-full rounded-md border-gray-300 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm">
                    </div>
                </div>

                <div class="mt-5">
                    <label for="nama_supplier" class="block text-sm font-medium text-gray-900">Name</label>
                    <div class="mt-2">
                        <input id="nama_supplier" name="nama_supplier" type="text" autocomplete="nama_supplier" value="{{ old('nama_supplier') }}" required class="block w-full rounded-md border-gray-300 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm">
                    </div>
                </div>

                <div class="mt-5">
                    <label for="alamat_supplier" class="block text-sm font-medium text-gray-900">Address</label>
                    <div class="mt-2">
                        <textarea id="alamat_supplier" name="alamat_supplier" rows="3" required class="block w-full rounded-md border-gray-300 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm">{{ old('alamat_supplier') }}</textarea>
                    </div>
                </div>

                <div class="mt-5">
                    <label for="telp_supplier" class="block text-sm font-medium text-gray-900">Phone Number</label>
                    <div class="mt-2">
                        <input id="telp_supplier" name="telp_supplier" type="text" autocomplete="telp_supplier" value="{{ old('telp_supplier') }}" required class="block w-full rounded-md border-gray-300 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm">
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
