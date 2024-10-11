@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <h1 class="mb-4 text-center text-blue-400">Add a New Book</h1>

        <form method="POST" action="{{ route('books.store') }}" class="bg-gray-800 p-4 rounded-lg shadow-lg">
            @csrf

            <div class="form-group mb-3">
                <label for="title" class="form-label text-gray-300">Title</label>
                <input type="text" name="title" id="title"
                    class="form-control @error('title') is-invalid @enderror bg-gray-700 text-gray-300 border border-gray-600"
                    placeholder="Enter book title" value="{{ old('title') }}" required>
                @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="author" class="form-label text-gray-300">Author</label>
                <input type="text" name="author" id="author"
                    class="form-control @error('author') is-invalid @enderror bg-gray-700 text-gray-300 border border-gray-600"
                    placeholder="Enter author name" value="{{ old('author') }}" required>
                @error('author')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="description" class="form-label text-gray-300">Description</label>
                <textarea name="description" id="description"
                    class="form-control @error('description') is-invalid @enderror bg-gray-700 text-gray-300 border border-gray-600"
                    rows="4" placeholder="Enter book description" required>{{ old('description') }}</textarea>
                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="isbn" class="form-label text-gray-300">ISBN</label>
                <input type="text" name="isbn" id="isbn"
                    class="form-control @error('isbn') is-invalid @enderror bg-gray-700 text-gray-300 border border-gray-600"
                    placeholder="Enter ISBN" value="{{ old('isbn') }}" required>
                @error('isbn')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="copies_available" class="form-label text-gray-300">Copies Available</label>
                <input type="number" name="copies_available" id="copies_available"
                    class="form-control @error('copies_available') is-invalid @enderror bg-gray-700 text-gray-300 border border-gray-600"
                    placeholder="Enter number of copies" value="{{ old('copies_available') }}" required>
                @error('copies_available')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <button type="submit" class="btn btn-success btn-lg w-100 rounded-pill">Add Book</button>
        </form>
    </div>
@endsection
