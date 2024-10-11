@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h2 class="text-center text-4xl text-blue-400 mb-4">Edit Book</h2>

        <form action="{{ route('books.update', $book->id) }}" method="POST" class="bg-gray-800 p-6 rounded-lg shadow-md">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="title" class="form-label text-white">Title</label>
                <input type="text"
                    class="form-control bg-gray-700 text-white border border-gray-600 rounded focus:bg-gray-600 focus:border-blue-400 @error('title') is-invalid @enderror"
                    id="title" name="title" value="{{ old('title', $book->title) }}" required>
                @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="author" class="form-label text-white">Author</label>
                <input type="text"
                    class="form-control bg-gray-700 text-white border border-gray-600 rounded focus:bg-gray-600 focus:border-blue-400 @error('author') is-invalid @enderror"
                    id="author" name="author" value="{{ old('author', $book->author) }}" required>
                @error('author')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="description" class="form-label text-white">Description</label>
                <textarea
                    class="form-control bg-gray-700 text-white border border-gray-600 rounded focus:bg-gray-600 focus:border-blue-400 @error('description') is-invalid @enderror"
                    id="description" name="description" rows="4" required>{{ old('description', $book->description) }}</textarea>
                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="copies_available" class="form-label text-white">Copies Available</label>
                <input type="number"
                    class="form-control bg-gray-700 text-white border border-gray-600 rounded focus:bg-gray-600 focus:border-blue-400 @error('copies_available') is-invalid @enderror"
                    id="copies_available" name="copies_available"
                    value="{{ old('copies_available', $book->copies_available) }}" required>
                @error('copies_available')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>



            <div class="text-center">
                <button type="submit" class="btn btn-success btn-lg">Update Book</button>
                <a href="{{ route('books.index') }}" class="btn btn-outline-light btn-lg">Back</a>
            </div>
        </form>
    </div>
@endsection
