    @extends('layouts.app')

    @section('content')
    <div class="max-w-[720px] mx-auto py-16">
        <h2 class="text-xl font-bold mb-4">Users</h2>

        @if(session('success'))
            <div class="bg-green-100 text-green-800 px-4 py-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('user.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4">Add New User</a>
 
        <table class="table-auto w-full border-collapse border border-gray-300">
            <thead>
                <tr>
                    <th class="border px-4 py-2">id user</th>
                    <th class="border px-4 py-2">Name</th>
                    <th class="border px-4 py-2">Username</th>
                    <th class="border px-4 py-2">Level</th>
                    <th class="border px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                    <td class="border px-4 py-2">{{ $user->id_user }}</td>
                        <td class="border px-4 py-2">{{ $user->nama }}</td>
                        <td class="border px-4 py-2">{{ $user->username }}</td>
                        <td class="border px-4 py-2">{{ $user->level }}</td>
                        <td class="border px-4 py-2">
                            <a href="{{ route('user.edit', $user->id_user) }}" class="text-blue-500">Edit</a>
                            <form action="{{ route('user.destroy', $user->id_user) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500">Delete</button>
                        </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endsection
