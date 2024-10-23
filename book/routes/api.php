<?php

use App\Http\Resources\BookCollection;
use App\Http\Resources\CategorybookResource;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use App\Models\Book;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('/', function () {
    // return Book::paginate();
    // $books = Book::with(['categories', 'user'])->Paginate(8);
    // return view('index', ['books' => $books]);
    // return response()->json(Book::paginate(15));

    $books = new BookCollection(Book::with(['categories', 'user'])->latest()->paginate(12));
    return response()->json([
        'data' => $books,
        'current_page' => $books->currentPage(),
        'last_page' => $books->lastPage(),
        'total' => $books->total(),
    ]);
})->name('home');

Route::get('/authors', function () {
    $users = new UserCollection(User::paginate(8));
    return [
        'users' => $users,
        'current_page' => $users->currentPage(),
        'last_page' => $users->lastPage(),
        'total' => $users->total(),
    ];
})->name('authors');

Route::get('/categories', function () {
    $category = CategoryResource::collection(Category::paginate(8));
    return [
        'categories' => $category,
        'current_page' => $category->currentPage(),
        'last_page' => $category->lastPage(),
        'total' => $category->total(),
    ];
})->name('categories');

Route::get('/categories/{categoryTitle}', function ($categoryTitle) {
    $category = Category::where('title', '=', $categoryTitle)->first();
    $books = $category->books()->orderBy('title', 'asc')->paginate(8);

    $books = CategorybookResource::collection($books);
    return [
        'books' => $books,
        'current_page' => $books->currentPage(),
        'last_page' => $books->lastPage(),
        'total' => $books->total(),
    ];
})->name('categories.books');
