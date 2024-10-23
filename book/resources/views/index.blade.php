<x-layout>

    @if (session('success'))
        <div class="alert alert-success bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative"
            role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

    <form class="max-w-md mx-auto" method="GET" action="{{ route('book_search') }}">
        @csrf
        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
            </div>
            <input type="search" id="default-search" maxlength="35" name='q'
                class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 pl-5"
                placeholder="Harry Potter, Conan Doyle" required />
            <button type="submit"
                class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
        </div>
    </form><br>

    <div id="books-container" class="container mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 mt-5"></div>
    <div id="pagination" class="flex justify-center mt-6"></div>



    <script>
        // Fetch books data and setup pagination
        function fetchBooks(page = 1) {
            fetch(`http://127.0.0.1:8000/api?page=${page}`)
                .then(response => response.json())
                .then(data => {
                    displayBooks(data.data);
                    setupPagination(data.current_page, data.last_page);
                })
                .catch(error => console.log('Error fetching books:', error));
        }

        // Function to display the books as cards
        function displayBooks(books) {
            const container = document.getElementById('books-container');
            container.innerHTML = ''; // Clear existing cards

            books.forEach(book => {
                const card = document.createElement('div');
                card.classList.add('card', 'bg-slate', 'rounded-lg', 'overflow-hidden', 'shadow-lg', 'm-4');

                let image;
                if (book.img == null) {
                    image = "{{ vite::image('logo.icon') }}";
                } else {
                    image = "{{ asset('storage/images') }}" + "/" + book.img;
                }



                card.innerHTML = `
                <img src="${image}" class="h-40 w-full object-cover" alt="Book Image">
                <div class="p-4">
                    <h5 class="text-amber-500 text-xl font-bold mb-2">${book.author}</h5>
                    <h6 class="text-amber-800 text-xl font-bold mb-2">Book Title: ${book.title}</h6>
                    <div class="flex flex-wrap">
                        ${book.categories.map(category =>
                        `<a href="/categories/${category}" class="btn btn-sm btn-primary m-1">${category}</a>`)
                            .join('')}
                    </div>
                </div>
            `;
                container.appendChild(card);
            });
        }

        function setupPagination(currentPage, lastPage) {
            const paginationContainer = document.getElementById('pagination');
            paginationContainer.innerHTML = ''; // Clear previous pagination

            // Define the maximum number of page buttons to display
            const maxPagesToShow = 5;
            const half = Math.floor(maxPagesToShow / 2);

            // Previous button
            if (currentPage > 1) {
                const prevButton = document.createElement('button');
                prevButton.innerText = 'Previous';
                prevButton.classList.add('btn', 'btn-primary', 'mx-1');
                prevButton.addEventListener('click', () => fetchBooks(currentPage - 1));
                paginationContainer.appendChild(prevButton);
            }

            // Determine the range of pages to display
            let startPage = Math.max(1, currentPage - half);
            let endPage = Math.min(lastPage, currentPage + half);

            // Adjust if we're near the start or end of the list
            if (currentPage <= half) {
                endPage = Math.min(lastPage, maxPagesToShow);
            }
            if (currentPage + half >= lastPage) {
                startPage = Math.max(1, lastPage - maxPagesToShow + 1);
            }

            // First page button
            if (startPage > 1) {
                const firstPageButton = document.createElement('button');
                firstPageButton.innerText = '1';
                firstPageButton.classList.add('btn', 'btn-primary', 'mx-1');
                firstPageButton.addEventListener('click', () => fetchBooks(1));
                paginationContainer.appendChild(firstPageButton);

                // Ellipsis if there are skipped pages
                if (startPage > 2) {
                    const ellipsis = document.createElement('span');
                    ellipsis.innerText = '...';
                    paginationContainer.appendChild(ellipsis);
                }
            }

            // Page number buttons
            for (let i = startPage; i <= endPage; i++) {
                const pageButton = document.createElement('button');
                pageButton.innerText = i;

                // Add base classes
                pageButton.classList.add('btn', 'btn-primary', 'mx-1');

                // Add 'btn-active' class only if i matches currentPage
                if (i === currentPage) {
                    pageButton.classList.add('btn-active');
                }

                pageButton.addEventListener('click', () => fetchBooks(i));
                paginationContainer.appendChild(pageButton);
            }

            // Last page button
            if (endPage < lastPage) {
                // Ellipsis if there are skipped pages
                if (endPage < lastPage - 1) {
                    const ellipsis = document.createElement('span');
                    ellipsis.innerText = '...';
                    paginationContainer.appendChild(ellipsis);
                }

                const lastPageButton = document.createElement('button');
                lastPageButton.innerText = lastPage;
                lastPageButton.classList.add('btn', 'btn-primary', 'mx-1');
                lastPageButton.addEventListener('click', () => fetchBooks(lastPage));
                paginationContainer.appendChild(lastPageButton);
            }

            // Next button
            if (currentPage < lastPage) {
                const nextButton = document.createElement('button');
                nextButton.innerText = 'Next';
                nextButton.classList.add('btn', 'btn-primary', 'mx-1');
                nextButton.addEventListener('click', () => fetchBooks(currentPage + 1));
                paginationContainer.appendChild(nextButton);
            }
        }




        // Initial fetch call to display the first page of books
        fetchBooks();
    </script>


</x-layout>
