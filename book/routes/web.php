<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Models\Book;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/authors', function () {
    return view('pages.authors');
})->name('authors');

Route::get('/categories', function () {
    return view('pages.category');
})->name('categories');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::resource('/profile', ProfileController::class)->middleware('auth');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/categories/{title}', function ($title) {
    return view('pages.category_books');
})->name('categorybook');

Route::resource('/profile/book', BookController::class);

Route::resource('/dashboard', DashboardController::class)->middleware(['auth', 'can:admin']);

Route::put('/dashboard/promote/{id}', function ($id) {
    $user = User::findOrFail($id);
    $user->update([
        'role' => 'admin',
    ]);
    $user->save();
    return redirect()->route('dashboard.index')->with('success', 'Author has been promoted successfully');
})->name('promot')->middleware('auth');

Route::put('/dashboard/deomote/{id}', function ($id) {
    $user = User::findOrFail($id);
    $user->update([
        'role' => 'author',
    ]);
    $user->save();
    return redirect()->route('dashboard.index')->with('success', 'Author has been demoted successfully');
})->name('deomot')->middleware(['auth', 'can:admin']);


Route::delete('/dashboard/delete_book/{id}', function ($id) {
    Book::destroy($id);
    return redirect()->route('dashboard.index')->with('success', 'Book has been deleted successfully');
})->name('books.destroy')->middleware(['auth', 'can:admin']);



Route::get('/search', function (Request $request) {

    $query = $request->input('q');

    // Perform the search on books and categories
    $books = Book::where('title', 'LIKE', "%{$query}%")
        ->orWhere('description', 'LIKE', "%{$query}%")
        ->get();

    // $categories = Category::where('name', 'LIKE', "%{$query}%")->get();

    return view('search', compact('books', 'query'));
})->name('book_search');
// Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
// Route::post('login', [LoginController::class, 'login']);
// Route::post('logout', [LoginController::class, 'logout'])->name('logout');
// Route::get('/home', [HomeController::class, 'index'])->name('home');


