@extends('layouts.app')

@section('content')
    <div class="container mt-5">

        <!-- Display success message -->
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <!-- Display error message -->
        @if (session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif

        <h1 class="text-4xl text-blue-400 mb-4">All Books</h1>

        <table
            class="table-auto w-full bg-gray-800 text-gray-200 border-collapse border border-gray-700 rounded-lg shadow-lg">
            <thead class="bg-blue-600 text-white">
                <tr>
                    <th class="p-4 border-b border-gray-700 text-left">Title</th>
                    <th class="p-4 border-b border-gray-700 text-left">Author</th>
                    <th class="p-4 border-b border-gray-700 text-left">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr class="hover:bg-gray-700">
                        <td class="p-4 border-b border-gray-700">{{ $book->title }}</td>
                        <td class="p-4 border-b border-gray-700">{{ $book->author }}</td>
                        <td class="p-4 border-b border-gray-700">
                            @php
                                $isBorrowedByUser = false; // Initialize a flag
                                foreach ($book->borrowedBooks as $b) {
                                    // Check if the current book is borrowed by the authenticated user
                                    if ($b->book_id === $book->id && $b->user_id === Auth::id()) {
                                        $isBorrowedByUser = true;
                                        break; // Exit the loop early if found
                                    }
                                }
                            @endphp

                            @if ($isBorrowedByUser)
                                <form action="{{ route('student.returnBook', $book->id) }}" method="POST"
                                    class="inline-block">
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm">Return</button>
                                </form>
                            @elseif ($book->borrowedBooks->isNotEmpty())
                                <!-- If the book is borrowed but not by this user -->
                                <button class="btn btn-secondary btn-sm" disabled>Not Available</button>
                            @else
                                <form action="{{ route('student.borrowBook', $book->id) }}" method="POST"
                                    class="inline-block">
                                    @csrf
                                    <button type="submit" class="btn btn-success btn-sm">Borrow</button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
