@extends('layouts.app')

@section('content')
<div class="max-w-[720px] mx-auto py-16 sm:py-8 lg:py-16">

  <!-- Header -->
  <div class="w-full flex justify-between items-center mb-5 pl-3">
      <div>
          <h3 class="text-xl font-semibold text-slate-800">Data Stock</h3>
          <p class="text-slate-500">A list of all stock items.</p>
      </div>
      <!-- Add Stock Button -->
      <div class="ml-3">
          <a href="{{ route('stok.create') }}" class="inline-flex items-center px-4 py-2 font-semibold text-white bg-blue-500 border border-blue-700 rounded-lg shadow-md hover:bg-blue-600 hover:border-blue-500">
              Add Stock
          </a>
      </div>
  </div>

  <!-- Success Message -->
  @if(session('success'))
      <div class="w-full mb-5 px-4 py-2 text-green-800 bg-green-100 rounded-lg shadow">
          {{ session('success') }}
      </div>
  @endif

  <!-- Table -->
  <div class="overflow-hidden bg-white shadow-lg rounded-lg">
      <table class="min-w-full text-left table-auto">
          <thead>
              <tr class="bg-slate-100 text-slate-700">
                  <th class="p-4 font-semibold">No</th>
                  <th class="p-4 font-semibold">Item Name</th>
                  <th class="p-4 font-semibold">Stock In</th>
                  <th class="p-4 font-semibold">Stock Out</th>
                  <th class="p-4 font-semibold">Total</th>
                  <th class="p-4 font-semibold">Actions</th>
              </tr>
          </thead>
          <tbody>
              @foreach ($stok as $item)
              <tr class="border-b hover:bg-slate-50">
                  <td class="p-4 text-slate-600">{{ $loop->iteration }}</td>
                  <td class="p-4 text-slate-600">{{ $item->nama_barang }}</td>
                  <td class="p-4 text-slate-600">{{ $item->jml_masuk }}</td>
                  <td class="p-4 text-slate-600">{{ $item->jml_keluar }}</td>
                  <td class="p-4 text-slate-600">{{ $item->total_barang }}</td>
                  <td class="p-4 flex gap-2">
                      <a href="{{ route('stok.edit', $item->id_barang) }}" class="font-medium text-blue-600 hover:text-blue-800">Edit</a>
                      <form action="{{ route('stok.destroy', $item->id_barang) }}" method="POST" class="inline">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="font-medium text-red-600 hover:text-red-800" onclick="return confirm('Are you sure?')">Delete</button>
                      </form>
                  </td>
              </tr>
              @endforeach
          </tbody>
      </table>
  </div>

  <!-- Pagination -->
  <div class="flex justify-between items-center px-4 py-3 bg-white rounded-b-lg shadow-md">
      <div class="text-sm text-slate-500">Showing <b>{{ $stok->firstItem() }}</b> to <b>{{ $stok->lastItem() }}</b> of <b>{{ $stok->total() }}</b></div>
      {{ $stok->links() }}
  </div>
</div>
@endsection
