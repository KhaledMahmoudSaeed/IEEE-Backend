<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\User;
use App\Models\BorrowedBook;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $books = Book::all();
        $students = User::where('role', 'student')->get();
        $borrowedBooks = BorrowedBook::with('book', 'user')->get();
        return view('admin.dashboard', compact('books', 'students', 'borrowedBooks'));
    }

    public function searchStudent(Request $request)
    {
        $searchTerm = $request->input('student_id');
        $students = User::where('id', $searchTerm)->get();
        if (!$students) {
            return redirect('/admin/students')->with('error', 'Student not found');
        }

        return view('admin.student.index', ['students' => $students]);
    }

    public function viewStudent($id)
    {
        $student = User::findOrFail($id);

        return view('admin.students.view', compact('student'));
    }
}
