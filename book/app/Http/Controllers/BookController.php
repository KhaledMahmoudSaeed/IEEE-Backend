<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BookCategory;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    public function create()
    {

        return view('Pages.create_book');
    }
    public function store(Request $request)
    {


        $request->validate([
            'title' => ['required', 'string', 'max:20', 'unique:books,title'],
            'description' => ['required', 'string', 'max:800'],
            'img' => ['required', 'file', 'mimes:jpg,jpeg,png'],
            'categories' => ['required', 'array', 'min:1'], // Ensure at least one category is selected
        ]);


        $request->img->storeAs('images', $request->img->getClientOriginalName(), 'public');
        Book::create(
            [
                'title' => $request->title,
                'description' => $request->description,
                'img' => $request->img->getClientOriginalName(),
                'user_id' => Auth::user()->id
            ]
        );
        foreach ($request->categories as $category) {
            BookCategory::create([
                'book_id' => Book::where('title', '=', $request->title)->pluck('id')->first(),
                'category_id' => Category::where('title', '=', $category)->pluck('id')->first()
            ]);
        }
        return redirect('/')->with('success', 'Book has been added successfully');
    }
}
