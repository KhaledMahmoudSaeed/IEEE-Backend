<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index()
    {
        $users = User::all();
        $books = Book::all();
        return view('Pages.dashboard.index', ['users' => $users, 'books' => $books]);
    }



    function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('dashboard.index')->with('success', 'Author has been deleted successfully');
    }
}
