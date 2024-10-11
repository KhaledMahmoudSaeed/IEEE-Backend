<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        return view('profile.index', ['user' => $user]);
    }
    public function edit()
    {
        $user = Auth::user();
        return view('profile.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $id = Auth::user()->id;
        $user = User::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id,
        ]);

        $user->update(
            [
                'name' => $request->name,
                'email' => $request->email,
            ]
        );

        return redirect()->route('profile')->with('success', 'Profile updated successfully');
    }
}
