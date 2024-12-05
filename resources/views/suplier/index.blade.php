@extends('layouts.app')

@section('content')
<div class="max-w-[720px] mx-auto py-16 sm:py-8 lg:py-16">

  <!-- Header -->
  <div class="w-full flex justify-between items-center mb-5 pl-3">
      <div>
          <h3 class="text-xl font-semibold text-slate-800">Data Supplier</h3>
      </div>
      <!-- Search Bar -->
      <div class="ml-3">
          <div class="relative w-full max-w-sm">
              <input
              type="text"
              class="w-full h-10 pl-3 pr-10 text-sm text-slate-700 placeholder-slate-400 border border-slate-200 rounded-lg focus:outline-none focus:border-slate-400 hover:border-slate-400 shadow-sm focus:shadow-md"
              placeholder="Search for user data..."
              />
              <button class="absolute right-2 top-2 h-6 w-6 text-slate-600">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                  </svg>
              </button>
          </div>
      </div>
  </div>

  <!-- Table -->
  <div class="overflow-hidden bg-white shadow-lg rounded-lg">
      <table class="min-w-full text-left table-auto">
          <thead>
              <tr class="bg-slate-100 text-slate-700">
                  <th class="p-4 font-semibold">No</th>
                  <th class="p-4 font-semibold">Name</th>
                  <th class="p-4 font-semibold">Address</th>
                  <th class="p-4 font-semibold">Phone Number</th>
                  <th class="p-4 font-semibold">Edit</th>
                  <th class="p-4 font-semibold">Delete</th>
              </tr>
          </thead>
          <tbody> 
              @foreach ($supliers as $suplier)
              <tr class="border-b hover:bg-slate-50">
                  <td class="p-4 text-slate-600">{{ $loop->iteration }}</td>
                  <td class="p-4 text-slate-600">{{ $suplier->nama_supplier }}</td>
                  <td class="p-4 text-slate-600">{{ $suplier->alamat_supplier }}</td>
                  <td class="p-4 text-slate-600">{{ $suplier->telp_supplier }}</td>
                  <td class="p-4">
                  <a href="{{ route('suplier.edit', $suplier->id_supplier) }}" class="font-medium text-blue-600 hover:text-blue-800">Edit</a>

                  </td>
                  <td class="p-4">
                  <a href="#"
                    class="font-medium text-red-600 hover:text-red-800"
                    onclick="event.preventDefault(); confirmDelete({{ $suplier->id_supplier }});">
                    Delete
                    </a>
                    <form id="delete-form-{{ $suplier->id_supplier }}" action="{{ route('suplier.destroy', $suplier->id_supplier) }}" method="POST" style="display: none;">
                    @csrf
                    @method('DELETE')
                    </form>
                  </td>
              </tr>
              @endforeach
          </tbody>
      </table>
  </div>

  <!-- Pagination -->
  <div class="flex justify-between items-center px-4 py-3 bg-white rounded-b-lg shadow-md">
      <div class="text-sm text-slate-500">Showing <b>{{ $supliers->firstItem() }}</b> to <b>{{ $supliers->lastItem() }}</b> of <b>{{ $supliers->total() }}</b></div>
      {{ $supliers->links() }}
  </div>

  <!-- Add Data Button -->
  <div class="flex justify-center mt-5">
      <a href="{{ route('suplier.create') }}" class="inline-flex items-center px-4 py-2 font-semibold text-white bg-blue-500 border border-blue-700 rounded-lg shadow-md hover:bg-blue-600 hover:border-blue-500">
          Add Data Supplier
      </a>
  </div>
</div>

<script>
    function confirmDelete(id) {
        if (confirm('Are you sure you want to delete this supplier?')) {
            document.getElementById(`delete-form-${id}`).submit();
        }
    }
</script>
@endsection
