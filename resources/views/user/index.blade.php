@extends('layouts.app')

@section('content')
<div class="max-w-[720px] mx-auto py-16 sm:py-8 lg:py-16">
    
    <!-- Header -->
    <div class="w-full flex justify-between items-center mb-5 pl-3">
        <div>
            <h3 class="text-xl font-semibold text-slate-800">Users</h3>
            <p class="text-slate-500">Manage user accounts and their details.</p>
        </div>
        <div class="ml-3">
            <a href="{{ route('user.create') }}" class="inline-flex items-center px-4 py-2 font-semibold text-white bg-blue-500 border border-blue-700 rounded-lg shadow-md hover:bg-blue-600 hover:border-blue-500">
                Add New User
            </a>
        </div>
    </div>

    <!-- Success Message -->
    @if(session('success'))
        <div class="bg-green-100 text-green-800 px-4 py-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <!-- Table -->
    <div class="overflow-hidden bg-white shadow-lg rounded-lg">
        <table class="min-w-full text-left table-auto">
            <thead>
                <tr class="bg-slate-100 text-slate-700">
                    <th class="p-4 font-semibold">ID User</th>
                    <th class="p-4 font-semibold">Name</th>
                    <th class="p-4 font-semibold">Username</th>
                    <th class="p-4 font-semibold">Level</th>
                    <th class="p-4 font-semibold">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr class="border-b hover:bg-slate-50">
                        <td class="p-4 text-slate-600">{{ $user->id_user }}</td>
                        <td class="p-4 text-slate-600">{{ $user->nama }}</td>
                        <td class="p-4 text-slate-600">{{ $user->username }}</td>
                        <td class="p-4 text-slate-600">{{ $user->level }}</td>
                        <td class="p-4 flex space-x-2">
                            <a href="{{ route('user.edit', $user->id_user) }}" class="font-medium text-blue-600 hover:text-blue-800">Edit</a>
                            <form action="{{ route('user.destroy', $user->id_user) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="font-medium text-red-600 hover:text-red-800">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
