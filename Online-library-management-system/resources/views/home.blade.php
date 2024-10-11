<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-4xl text-blue-500 leading-tight">
            {{ __('Library') }}
        </h2>
    </x-slot>

    @section('content')
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @foreach ($books as $book)
                <div x-data="{ open: false }"
                    class="h-auto p-4 border bg-gray-800 border-gray-600 rounded-md flex flex-col justify-between">
                    <h2 class="text-lg text-amber-400 font-bold truncate">{{ $book->title }}</h2>
                    <p class="text-gray-300 text-sm truncate">Author: {{ $book->author }}</p>

                    <p class="text-gray-100 text-sm h-16 overflow-hidden" :class="{ 'h-auto': open }">
                        <span x-show="!open" class="truncate">{{ $book->description }}</span>
                        <span x-show="open">{{ $book->description }}</span>
                    </p>

                    <button @click="open = !open" class="text-blue-500 text-sm mt-1">
                        <span x-show="!open">Read More</span>
                        <span x-show="open">Show Less</span>
                    </button>

                    <p class="text-amber-400 text-sm mt-2">Copies Available: {{ $book->copies_available }}</p>
                </div>
            @endforeach
        </div>
        <div class="mt-6">
            {{-- Pagination links --}}
            <div class="flex justify-center">
                {{ $books->links() }}
            </div>
        </div>
    @endsection
</x-app-layout>
