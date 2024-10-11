@extends('layouts.app')

@section('content')
<div>
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
</div>

    <div class="container mt-5">
        <h1 class="text-4xl text-blue-400 mb-4">All Books</h1>
        <a href="{{ route('books.create') }}" class="btn btn-success mb-4">Add New Book</a>

        <table
            class="table-auto w-full bg-gray-800 text-gray-200 border-collapse border border-gray-700 rounded-lg shadow-lg">
            <thead class="bg-blue-600 text-white">
                <tr>
                    <th class="p-4 border-b border-gray-700 text-left">Title</th>
                    <th class="p-4 border-b border-gray-700 text-left">Author</th>
                    <th class="p-4 border-b border-gray-700 text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr class="hover:bg-gray-700">
                        <td class="p-4 border-b border-gray-700">{{ $book->title }}</td>
                        <td class="p-4 border-b border-gray-700">{{ $book->author }}</td>
                        <td class="p-4 border-b border-gray-700 flex space-x-2">
                            <a href="{{ route('books.show', $book->id) }}" class="btn btn-primary btn-sm">Show</a>
                            <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('books.destroy', $book->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
