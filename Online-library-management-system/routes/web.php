<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowedBookController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Admin\AdminController;
use App\Models\Book;

Route::get('/', function () {
    $books = Book::paginate(12);
    return view('home', ['books' => $books]);
})->middleware('auth');

Route::get('/home', function () {
    $books = Book::paginate(12);
    return view('home', ['books' => $books]);
})->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::group(['middleware' => ['auth']], function () {
//     Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
// });

Route::group(['middleware' => ['auth', 'can:admin']], function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::resource('/admin/books', BookController::class);
    Route::get('/admin/students', [StudentController::class, 'index']);
});

// Route::group(['middleware' => ['auth', 'admin']], function () {
//     Route::resource('/admin/books', BookController::class);
// });

Route::group(['middleware' => ['auth', 'can:admin']], function () {
    Route::get('/admin/search-student', [AdminController::class, 'searchStudent'])->name('admin.searchStudent');

});


Route::get('/student/books', [StudentController::class, 'viewBooks'])->middleware('auth')->name('student.viewBooks');
Route::post('/student/borrow-book/{id}', [StudentController::class, 'borrowBook'])->middleware('auth')->name('student.borrowBook');
Route::post('/student/return-book/{id}', [StudentController::class, 'returnBook'])->middleware('auth')->name('student.returnBook');
// Route::post('/student/borrow/{book}', [BorrowedBookController::class, 'borrow']);

require __DIR__ . '/auth.php';
