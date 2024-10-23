<x-layout>
    <x-heading>
        Authors
    </x-heading>

    <div id="authors-container" class="flex flex-wrap justify-start"></div>
    <div id="pagination" class="flex justify-center mt-4"></div>

    <script>
        // Function to display the authors as cards
        function displayAuthors(authors) {
            const container = document.getElementById('authors-container');
            container.innerHTML = ''; // Clear existing cards

            authors.forEach(author => {
                const card = document.createElement('div');
                card.classList.add('card', 'bg-slate', 'rounded-lg', 'overflow-hidden', 'shadow-lg', 'm-4');

                // Set width for 4 cards per row
                card.classList.add('w-full', 'sm:w-1/2', 'md:w-1/3', 'lg:w-1/4', 'max-w-xs');

                let image;
                if (author.img !== "NULL") {
                    image = "{{ asset('storage/images/') }}" + "/" + author.img;
                } else {
                    image = "{{ Vite::image('logo.icon') }}";
                }

                // Create card content with a link to the author's profile
                card.innerHTML = `
                    <a href="/profile/${author.id}" class="block">
                        <img src="${image}" class="h-48 w-full object-cover" alt="Author Photo">
                        <div class="p-4">
                            <h5 class="text-amber-500 text-xl font-bold mb-2">${author.name}</h5>
                        </div>
                    </a>
                `;

                container.appendChild(card);
            });
        }

        // Function to handle pagination
        function setupPagination(currentPage, lastPage) {
            const paginationContainer = document.getElementById('pagination');
            paginationContainer.innerHTML = ''; // Clear previous pagination

            // Previous button
            if (currentPage > 1) {
                const prevButton = document.createElement('button');
                prevButton.innerText = 'Previous';
                prevButton.classList.add('btn', 'btn-primary', 'mx-1');
                prevButton.addEventListener('click', () => fetchAuthors(currentPage - 1));
                paginationContainer.appendChild(prevButton);
            }

            // Display a limited number of page numbers for better UX
            const maxPagesToShow = 5;
            let startPage = Math.max(1, currentPage - Math.floor(maxPagesToShow / 2));
            let endPage = Math.min(lastPage, startPage + maxPagesToShow - 1);

            for (let i = startPage; i <= endPage; i++) {
                const pageButton = document.createElement('button');
                pageButton.innerText = i;
                pageButton.classList.add('btn', 'btn-primary', 'mx-1');

                if (i === currentPage) {
                    pageButton.classList.add('btn-active');
                }

                pageButton.addEventListener('click', () => fetchAuthors(i));
                paginationContainer.appendChild(pageButton);
            }

            // Next button
            if (currentPage < lastPage) {
                const nextButton = document.createElement('button');
                nextButton.innerText = 'Next';
                nextButton.classList.add('btn', 'btn-primary', 'mx-1');
                nextButton.addEventListener('click', () => fetchAuthors(currentPage + 1));
                paginationContainer.appendChild(nextButton);
            }
        }

        // Example fetch function for authors with pagination
        function fetchAuthors(page = 1) {
            fetch(`http://127.0.0.1:8000/api/authors?page=${page}`)
                .then(response => response.json())
                .then(data => {
                    displayAuthors(data.users);
                    setupPagination(data.current_page, data.last_page);
                })
                .catch(error => console.log('Error fetching authors:', error));
        }

        // Call the function to fetch and display authors when the page loads
        fetchAuthors();
    </script>
</x-layout>
