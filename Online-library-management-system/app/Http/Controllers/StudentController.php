<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BorrowedBook;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{

    public function index()
    {
        $students = User::all();
        return view('admin.student.index', ['students' => $students]);
    }
    public function dashboard()
    {
        $id = Auth::user();
        $student = User::user($id);
        $borrowedBooks = $student->borrowedBooks()->with('book')->get();

        return view('student.dashboard', compact('borrowedBooks'));
    }

    public function returnBook($id)
    {
        $student_id = Auth::user()->id;
        $student = User::findOrFail($student_id);

        $borrowedBook = $student->borrowedBooks()->where('book_id', $id)->first();

        if ($borrowedBook) {
            $borrowedBook->delete();

            return redirect()->route('student.viewBooks')->with('success', 'Book returned successfully.');
        }

        return redirect()->route('student.viewBooks')->with('error', 'You have not borrowed this book.');
    }

    public function viewBooks()
    {
        $books = Book::all();

        return view('student.books.index', compact('books'));
    }

    public function borrowBook($id)
    {
        $book = Book::findOrFail($id);

        BorrowedBook::create([
            'user_id' => Auth::id(),
            'book_id' => $book->id,
            'borrowed_at' => now(),
            'return_by' => now()->addDays(7),
        ]);

        return redirect()->route('student.viewBooks')->with('success', 'Book borrowed successfully');
    }

}
