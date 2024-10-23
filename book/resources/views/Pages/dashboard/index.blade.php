<x-layout>


    @if (session('success'))
        <div class="alert alert-success bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative"
            role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif
    <div class="container mx-auto mt-10">

        <!-- Users Table -->
        <h2 class="text-2xl font-bold mb-6 text-amber-600">Users</h2>
        <table class="min-w-full border-collapse border border-gray-300 shadow-lg">
            <thead class="bg-amber-600 text-white">
                <tr>
                    <th class="border border-gray-300 px-4 py-2">ID</th>
                    <th class="border border-gray-300 px-4 py-2">Name</th>
                    <th class="border border-gray-300 px-4 py-2">Email</th>
                    <th class="border border-gray-300 px-4 py-2">Image</th>
                    <th class="border border-gray-300 px-4 py-2">Role</th>
                    <th class="border border-gray-300 px-4 py-2">Created At</th>
                    <th class="border border-gray-300 px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-gray-200 text-gray-800">
                @foreach ($users as $user)
                    <tr class="hover:bg-amber-200 transition-colors duration-300">
                        <td class="border border-gray-300 px-4 py-2">{{ $user->id }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $user->name }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $user->email }}</td>
                        <td class="border border-gray-300 px-4 py-2">
                            @php
                                if ($user->img !== 'NULL') {
                                    echo "<a href='wew'> Have a picture</a>";
                                } else {
                                    echo 'No Picture Here';
                                }
                            @endphp
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            <span
                                class="{{ $user->role == 'author' ? 'bg-dark text-white' : ($user->role == 'admin' ? 'bg-amber-500 text-white' : 'bg-gray-300 text-gray-800') }} px-2 py-1 rounded">
                                {{ $user->role }}
                            </span>

                            @if ($user->role === 'author')
                                <form action="{{ route('promot', $user->id) }}" method="POST"
                                    class="inline-block ml-2">
                                    @csrf
                                    @method('PUT')
                                    <input type="submit" value="Promote"
                                        class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 transition duration-200 cursor-pointer">
                                </form>
                            @elseif($user->role === 'admin' && Auth::user()->id === 1)
                                <form action="{{ route('deomot', $user->id) }}" method="POST"
                                    class="inline-block ml-2">
                                    @csrf
                                    @method('PUT')
                                    <input type="submit" value="Demote"
                                        class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition duration-200 cursor-pointer">
                                </form>
                            @endif
                        </td>

                        <td class="border border-gray-300 px-4 py-2">{{ $user->created_at->format('d-M-Y') }}</td>
                        <td class="border border-gray-300 px-4 py-2">
                            <form action="{{ route('dashboard.destroy', $user->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Delete"
                                    class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition duration-200 cursor-pointer">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Books Table -->
        <h2 class="text-2xl font-bold mt-10 mb-6 text-amber-600">Books</h2>
        <table class="min-w-full border-collapse border border-gray-300 shadow-lg">
            <thead class="bg-amber-600 text-white">
                <tr>
                    <th class="border border-gray-300 px-4 py-2">ID</th>
                    <th class="border border-gray-300 px-4 py-2">Title</th>
                    <th class="border border-gray-300 px-4 py-2">Description</th>
                    <th class="border border-gray-300 px-4 py-2">Image</th>
                    <th class="border border-gray-300 px-4 py-2">Created At</th>
                    <th class="border border-gray-300 px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-gray-200 text-gray-800">
                @foreach ($books as $book)
                    <tr class="hover:bg-amber-200 transition-colors duration-300">
                        <td class="border border-gray-300 px-4 py-2">{{ $book->id }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $book->title }}</td>
                        <td class="border border-gray-300 px-4 py-2">
                            <span class="truncate-desc"
                                data-full-desc="{{ $book->description }}">{{ Str::limit($book->description, 50) }}</span>
                            @if (strlen($book->description) > 50)
                                <a href="#" class="text-blue-500 read-more">Show More</a>
                            @endif
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            @php
                                if ($user->img !== 'NULL') {
                                    echo "<a href='wew'> Have a picture</a>";
                                } else {
                                    echo 'No Picture Here';
                                }
                            @endphp
                        </td>
                        <td class="border border-gray-300 px-4 py-2">{{ $book->created_at->format('d-M-Y') }}</td>
                        <td class="border border-gray-300 px-4 py-2">
                            <form action="{{ route('books.destroy', $book->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Delete"
                                    class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition duration-200 cursor-pointer">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            function attachListeners() {
                document.querySelectorAll('.read-more, .show-less').forEach((link) => {
                    link.addEventListener('click', (e) => {
                        e.preventDefault(); // Prevent the default anchor link behavior

                        const descElement = link.closest('tr').querySelector('.truncate-desc');
                        const isReadMore = link.classList.contains('read-more');
                        const fullDesc = descElement.getAttribute('data-full-desc');
                        const truncatedDesc = fullDesc.substring(0, 50) + '...';

                        if (isReadMore) {
                            descElement.innerHTML = fullDesc;
                            link.textContent = "Show Less";
                            link.classList.remove('read-more');
                            link.classList.add('show-less');
                        } else {
                            descElement.innerHTML = truncatedDesc;
                            link.textContent = "Show More";
                            link.classList.remove('show-less');
                            link.classList.add('read-more');
                        }
                    });
                });
            }

            // Initial call to attach event listeners
            attachListeners();
        });
    </script>






</x-layout>
