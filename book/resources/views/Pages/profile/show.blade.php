<x-layout>
    <div class="max-w-md mx-auto bg-slate-800 border border-gray-300 rounded-lg shadow-md p-6">
        <div class="flex flex-col items-center">
            @php
                if ($user->img == 'NULL') {
                    $image = Vite::image('logo.icon');
                } else {
                    $image = asset('storage/images/' . $user->img);
                }

            @endphp

            <img src="{{ $image }}" alt="User Profile Picture"
                class="h-24 w-24 rounded-full border-4 border-gray-300 mb-4">

            <h2 class="text-2xl font-semibold text-amber-500">{{ $user->name }}</h2>
            <p class="text-gray-400 text-2xl text-sm mb-2">Email: {{ $user->email }}</p>
            <p class="text-gray-400 text-2xl text-xs">Last Update: {{ date_format($user->updated_at, 'd-m-Y') }}</p>
            <p class="text-gray-400 text-2xl text-xs">Role: {{ $user->role }}</p>

            <div class="mt-6 w-full">
                <h3 class="text-lg font-semibold text-amber-500 mb-4">My Published Books :</h3>
                <div class="grid grid-cols-2 gap-4">
                    @foreach ($books_name as $name)
                        <div class="bg-gray-700 p-4 rounded-lg shadow transition-transform transform hover:scale-105">
                            <h4 class="text-lg font-medium text-white">{{ $name }}</h4>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="mt-6 flex justify-around">
            @if (Auth::user()->id === $user->id)
                <a href="{{ route('profile.edit', Auth::user()->id) }}"
                    class="btn bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">Edit</a>
                <a href="{{ route('book.create') }}"
                    class="btn bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 transition">Add New
                    Book</a>
            @endif
            <a href="{{ URL::previous() }}"
                class="btn bg-gray-300 text-gray-800 px-4 py-2 rounded hover:bg-gray-400 transition">Back</a>
        </div>
    </div>
</x-layout>
