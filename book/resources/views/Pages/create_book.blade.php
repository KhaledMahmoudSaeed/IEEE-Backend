<x-layout>
    <div class="max-w-lg mx-auto mt-10 bg-slate-400 p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-6 text-amber-600 text-center">Add New Book</h2>

        <form action="{{ route('book.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Title Input with Error Handling -->
            <div class=" mb-3">
                <label for="title" class="col-md-4 col-form-label text-md-end text-amber-600">Title</label>
                <div class="col-md-12">
                    <input id="title" type="text"
                        class="form-control bg-slate-700 text-amber-600 @error('title') is-invalid @enderror"
                        name="title" value="{{ old('title') }}" required>

                    @error('title')
                        <span class="invalid-feedback text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <!-- Description Input with Error Handling -->
            <div class=" mb-3">
                <label for="description" class="col-md-4 col-form-label text-md-end text-amber-600">Description</label>
                <div class="col-md-12">
                    <textarea id="description" name="description" rows="4"
                        class="form-control bg-slate-700 text-amber-600 @error('description') is-invalid @enderror" required>{{ old('description') }}</textarea>

                    @error('description')
                        <span class="invalid-feedback text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <!-- Image Input with Error Handling -->
            <div class=" mb-3">
                <label for="img" class="col-md-4 col-form-label text-md-end text-amber-600">Upload Image</label>
                <div class="col-md-12">
                    <input id="img" type="file"
                        class="form-control bg-slate-700 text-amber-600 @error('img') is-invalid @enderror"
                        name="img" required accept="image/*">

                    @error('img')
                        <span class="invalid-feedback text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <!-- Category Checkboxes -->
            <div class="mb-3">
                <label class="col-md-4 col-form-label text-md-end text-amber-600">Select Categories</label>
                <div class="col-md-12 flex flex-wrap">
                    @php
                        $categories = [
                            'Fantasy',
                            'Science Fiction',
                            'Romance',
                            'Thriller',
                            'Mystery',
                            'Horror',
                            'Adventure',
                        ];
                    @endphp

                    @foreach ($categories as $category)
                        <div class="w-1/2 mb-2">
                            <label class="inline-flex items-center">
                                <input type="checkbox" name="categories[]" value="{{ $category }}"
                                    class="form-checkbox text-amber-600 @error('categories') is-invalid @enderror"
                                    {{ in_array($category, old('categories', [])) ? 'checked' : '' }}>
                                <span class="ml-2 text-gray-700">{{ $category }}</span>
                            </label>
                        </div>
                    @endforeach
                </div>

                <!-- Error message for categories -->
                @error('categories')
                    <span class="invalid-feedback text-amber-500" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>



            <!-- Submit Button -->
            <div class="flex justify-center">
                <button type="submit"
                    class="bg-amber-600 hover:bg-amber-600 text-white font-bold py-2 px-4 rounded-md transition">
                    Submit
                </button>
            </div>
        </form>
    </div>
</x-layout>
