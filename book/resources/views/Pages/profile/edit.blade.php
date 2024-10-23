<x-layout>
    <form action="{{ route('profile.update', Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT') @csrf
        <div class="max-w-md mx-auto bg-slate-800 border border-gray-200 rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-semibold text-amber-500 mb-4">Edit Profile</h2>

            <div class="mb-4">
                <label for="name" class="block text-amber-500">Name</label>
                <input type="text" id="name" name="name" value="{{ Auth::user()->name }}"
                    class="form-control bg-slate-700 text-amber-500 @error('name') is-invalid @enderror">

                @error('name')
                    <span class="invalid-feedback text-amber-500" role="alert">
                        {{ $message }}
                    </span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="email" class="block text-amber-500">Email</label>
                <input type="email" id="email" name="email" value="{{ Auth::user()->email }}"
                    class="form-control bg-slate-700 text-amber-500 @error('email') is-invalid @enderror" required>

                @error('email')
                    <span class="invalid-feedback text-amber-500" role="alert">
                        {{ $message }}
                    </span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="img" class="block text-amber-500">Update your Image</label>
                <input type="file" name="image"
                    class="form-control bg-slate-700 text-amber-500 @error('image') is-invalid @enderror">

                @error('image')
                    <span class="invalid-feedback text-amber-500" role="alert">
                        {{ $message }}
                    </span>
                @enderror
            </div>

            <div class="mt-6 flex justify-between">
                <input type="submit" value="Submit"
                    class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75 cursor-pointer">
                <a href="{{ route('profile.show', Auth::user()->id) }}"
                    class="btn bg-gray-300 text-gray-800 px-4 py-2 rounded hover:bg-gray-400 transition">Back</a>
            </div>
        </div>
    </form>
</x-layout>
