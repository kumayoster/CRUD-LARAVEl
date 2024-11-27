@extends('layouts.app')

@section('content')
<div class="max-w-[720px] mx-auto py-16">
    <h2 class="text-xl font-bold mb-4">Add New User</h2>

   <!-- Create User Form -->
<form action="{{ route('user.store') }}" method="POST">
    @csrf
    <div class="mb-4">
        <label for="nama" class="block text-sm font-medium text-gray-700">Name</label>
        <input type="text" name="nama" id="nama" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
    </div>

    <div class="mb-4">
        <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
        <input type="text" name="username" id="username" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
    </div>

    <div class="mb-4">
        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
        <input type="password" name="password" id="password" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
    </div>

    <div class="mb-4">
        <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
        <input type="password" name="password_confirmation" id="password_confirmation" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
    </div>

    <div class="mb-4">
        <label for="level" class="block text-sm font-medium text-gray-700">Level</label>
        <select name="level" id="level" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
            <option value="admin">Admin</option>
            <option value="user">User</option>
        </select>
    </div>

    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save User</button>
</form>

</div>
@endsection
