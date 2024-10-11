<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('admin.books.index', compact('books'));
    }

    public function show($id)
    {
        $book = Book::findOrFail($id);
        return view('admin.books.show', ['book' => $book]);
    }
    public function create()
    {
        return view('admin.books.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'description' => 'required',
            'copies_available' => ['required', 'integer'],
            'isbn' => ['required', 'unique:books'],
        ]);

        Book::create($request->all());

        return redirect()->route('books.index')->with('success', 'Book created successfully');
    }

    public function edit(Book $book)
    {
        return view('admin.books.edit', compact('book'));
    }

    public function update(Request $request, $id)
    {
        $book = Book::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'description' => 'required',
            'copies_available' => ['required', 'integer'],
        ]);

        $book->update($request->all());

        return redirect()->route('books.index')->with('success', 'Book updated successfully');
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Book deleted successfully');
    }
}
