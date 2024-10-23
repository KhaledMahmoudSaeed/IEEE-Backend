<x-layout>
    <a href="{{ URL::previous() }}"
        class="btn bg-gray-300 text-gray-800 px-4 py-2 rounded hover:bg-gray-400 transition">Back</a>
    <div id="books-container" class="container mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 mt-5"></div>
    <div id="pagination" class="flex justify-center mt-6"></div>

    <script>
        // Fetch the books for a given category with pagination
        // Example fetch call for a selected category
        const fetchCategoryBooks = async (categoryId, page = 1) => {
            console.log(categoryId); // Check the data structure in the console

            try {
                const response = await fetch(`http://127.0.0.1:8000/api/categories/${categoryId}?page=${page}`);
                if (!response.ok) {
                    throw new Error('Failed to fetch data');
                }
                const data = await response.json();
                console.log(data); // Check the data structure in the console
                displayBooks(data.books); // Pass the correct array of books
                setupPagination(data.current_page, data.last_page, categoryId); // Setup pagination
            } catch (error) {
                console.error('Error fetching category books:', error);
            }
        };


        // Function to display books in cards
        function displayBooks(books) {
            const container = document.getElementById('books-container');
            container.innerHTML = ''; // Clear existing content

            books.forEach(book => {
                const card = document.createElement('div');
                card.classList.add('card', 'bg-slate', 'rounded-lg', 'overflow-hidden', 'shadow-lg', 'm-4');

                // Truncate the description to 100 characters with "read more"
                const truncatedDescription = book.description.length > 100 ?
                    book.description.substring(0, 100) + '...' :
                    book.description;

                card.innerHTML = `
                <img src="{{ Vite::image('logo.icon') }}" class="h-40 w-full object-cover" alt="Book Image">
                <div class="p-4">
                    <h5 class="text-amber-500 text-xl font-bold mb-2">${book.title}</h5>
                    <p class="truncate-desc">${truncatedDescription} <a href="#" class="text-blue-500 read-more">Read more</a></p>
                    <p class="text-gray-400">Author Name: ${book.user_name}</p>
                </div>
            `;

                // Add event listener for the "read more" link
                const readMoreLink = card.querySelector('.read-more');
                readMoreLink.addEventListener('click', (e) => {
                    e.preventDefault();
                    const descElement = card.querySelector('.truncate-desc');
                    descElement.innerHTML = book.description +
                        ` <a href="#" class="text-blue-500 show-less">Show less</a>`;
                    const showLessLink = card.querySelector('.show-less');
                    showLessLink.addEventListener('click', (e) => {
                        e.preventDefault();
                        descElement.innerHTML = truncatedDescription +
                            ` <a href="#" class="text-blue-500 read-more">Read more</a>`;
                    });
                });

                container.appendChild(card);
            });
        }

        // Function to setup pagination
        function setupPagination(currentPage, lastPage, categoryTitle) {
            const paginationContainer = document.getElementById('pagination');
            paginationContainer.innerHTML = ''; // Clear previous pagination

            const maxPagesToShow = 5;
            const half = Math.floor(maxPagesToShow / 2);

            if (currentPage > 1) {
                const prevButton = document.createElement('button');
                prevButton.innerText = 'Previous';
                prevButton.classList.add('btn', 'btn-primary', 'mx-1');
                prevButton.addEventListener('click', () => fetchCategoryBooks(categoryTitle, currentPage - 1));
                paginationContainer.appendChild(prevButton);
            }

            let startPage = Math.max(1, currentPage - half);
            let endPage = Math.min(lastPage, currentPage + half);

            if (currentPage <= half) {
                endPage = Math.min(lastPage, maxPagesToShow);
            }
            if (currentPage + half >= lastPage) {
                startPage = Math.max(1, lastPage - maxPagesToShow + 1);
            }

            if (startPage > 1) {
                const firstPageButton = document.createElement('button');
                firstPageButton.innerText = '1';
                firstPageButton.classList.add('btn', 'btn-primary', 'mx-1');
                firstPageButton.addEventListener('click', () => fetchCategoryBooks(categoryTitle, 1));
                paginationContainer.appendChild(firstPageButton);

                if (startPage > 2) {
                    const ellipsis = document.createElement('span');
                    ellipsis.innerText = '...';
                    paginationContainer.appendChild(ellipsis);
                }
            }

            for (let i = startPage; i <= endPage; i++) {
                const pageButton = document.createElement('button');
                pageButton.innerText = i;
                pageButton.classList.add('btn', 'btn-primary', 'mx-1');
                if (i === currentPage) {
                    pageButton.classList.add('btn-active');
                }
                pageButton.addEventListener('click', () => fetchCategoryBooks(categoryTitle, i));
                paginationContainer.appendChild(pageButton);
            }

            if (endPage < lastPage) {
                if (endPage < lastPage - 1) {
                    const ellipsis = document.createElement('span');
                    ellipsis.innerText = '...';
                    paginationContainer.appendChild(ellipsis);
                }

                const lastPageButton = document.createElement('button');
                lastPageButton.innerText = lastPage;
                lastPageButton.classList.add('btn', 'btn-primary', 'mx-1');
                lastPageButton.addEventListener('click', () => fetchCategoryBooks(categoryTitle, lastPage));
                paginationContainer.appendChild(lastPageButton);
            }

            if (currentPage < lastPage) {
                const nextButton = document.createElement('button');
                nextButton.innerText = 'Next';
                nextButton.classList.add('btn', 'btn-primary', 'mx-1');
                nextButton.addEventListener('click', () => fetchCategoryBooks(categoryTitle, currentPage + 1));
                paginationContainer.appendChild(nextButton);
            }
        }
        const url = window.location.href;

        // Extract the category name from the URL
        const categoryName = url.split('/').pop(); // This will give you "Science-Fiction"
        const formattedCategoryName = categoryName.replace(/-/g, ' '); // "Science Fiction"

        // Call your function and pass the category name
        fetchCategoryBooks(formattedCategoryName);
    </script>

</x-layout>
