@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="text-4xl text-blue-400 mb-4">Book Details</h1>

        <div class="card bg-gray-800 text-gray-300 border border-gray-700 p-4 rounded-lg shadow-lg">
            <h2 class="text-2xl text-amber-400 mb-4">Title: {{ $book->title }}</h2>
            <p class="text-lg mb-3"><strong class="text-cyan-400">Author:</strong> {{ $book->author }}</p>
            <p class="text-lg mb-3"><strong class="text-cyan-400">Description:</strong> {{ $book->description }}</p>
            <p class="text-lg mb-3"><strong class="text-cyan-400">Copies Available:</strong> {{ $book->copies_available }}</p>
            <p class="text-lg mb-3"><strong class="text-cyan-400">ISBN:</strong> {{ $book->isbn }}</p>
            <p class="text-lg mb-3">
                <strong class="text-cyan-400">Status:</strong>

                @if ($book->borrowedBooks->isEmpty())
                    <span class="text-green-500 font-bold">Available</span>
                @else
                    <span class="text-red-500 font-bold">Borrowed</span>
                @endif
            </p>

            <div class="mt-4">
                <a href="{{ route('books.index') }}" class="btn btn-secondary">Back</a>
            </div>
        </div>
    </div>
@endsection
