<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Index method to display all users
    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    // Create method to show the form for adding a new user
    public function create()
    {
        return view('user.create');
    }

    // Store method to store the new user in the database
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'nama' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username',
            'password' => 'required|string|min:6|confirmed',
            'level' => 'required|string|max:50',
        ]);
    
        // Create the user record
        User::create([
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => bcrypt($request->password), // Encrypt the password
            'level' => $request->level,
        ]);
    
        // Redirect to user index page with success message
        return redirect()->route('user.index')->with('success', 'User successfully added');
    }
    
    

    // Edit method to show the form for editing a user
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('user.edit', compact('user'));
    }

    // Update method to update the user data in the database
    public function update(Request $request, $id_user)
    {
        $user = User::findOrFail($id_user); // Gunakan id_user
        $user->update([
            'nama' => $request->nama,
            'username' => $request->username,
            'level' => $request->level,
        ]);
    
        if ($request->filled('password')) {
            $user->password = bcrypt($request->password);
        }
    
        return redirect()->route('user.index')->with('success', 'User updated successfully');
    }
    
    // Destroy method to delete a user
    public function destroy($id)
    {
        // Find the user by ID and delete it
        $user = User::findOrFail($id);
        $user->delete();

        // Redirect to the user index page with a success message
        return redirect()->route('user.index')->with('success', 'User successfully deleted');
    }

}
?>