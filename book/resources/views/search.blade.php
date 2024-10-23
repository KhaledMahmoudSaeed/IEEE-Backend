<x-layout>

    <a href="{{ URL::previous() }}"
        class="btn bg-gray-300 text-gray-800 px-4 py-2 rounded hover:bg-gray-400 transition">Back</a>
    <div id="books-container" class="container mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 mt-5"></div>
    <div id="pagination" class="flex justify-center mt-6"></div>

    <div class="container mx-auto mt-10">
        <h2 class="text-2xl font-bold mb-6 text-amber-600">Search Results</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8"> <!-- Increased gap to 8 -->
            @if ($books->isEmpty())
                <p>No books found.</p>
            @else
                @foreach ($books as $book)
                    <div
                        class="card bg-slate-200 rounded-lg overflow-hidden shadow-lg transition-transform transform hover:scale-105">
                        @php
                            $image = $book->img
                                ? asset('storage/images/' . $book->img)
                                : asset('storage/images/logo.icon'); // Adjust path accordingly
                        @endphp
                        <img src="{{ $image }}" class="h-40 w-full object-cover" alt="Book Image">
                        <div class="p-4">
                            <h5 class="text-amber-500 text-xl font-bold mb-2">{{ $book->user->name }}</h5>
                            <h6 class="text-amber-800 text-xl font-bold mb-2">Book Title: {{ $book->title }}</h6>
                            <div class="flex flex-wrap">
                                @foreach ($book->categories as $category)
                                    <a href="{{ url('/categories/' . $category->title) }}"
                                        class="btn btn-sm btn-primary m-1">{{ $category->title }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</x-layout>
