<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function show($id)
    {
        $user = User::findOrFail($id);
        $books_name = $user->book()->pluck('title');
        return view('Pages.profile.show', ['user' => $user, 'books_name' => $books_name]);
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('Pages.profile.edit', ['user' => $user]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'unique:users,email,' . $id],
            'image' => ['required', 'file', 'mimes:jpg,jpeg,png'],
        ]);

        $books_name = User::findOrFail($id)->first()->book()->pluck('title');
        $user = User::findOrFail($id);

        $request->image->storeAs('images', $request->image->getClientOriginalName(), 'public');
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'img' => $request->image->getClientOriginalName(),

        ]);

        return view('Pages.profile.show', ['user' => $user, 'books_name' => $books_name])->with('success', ' Profile Updated');
    }
}
