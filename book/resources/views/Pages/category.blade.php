<x-layout>
    <x-heading>
        Categories
    </x-heading><br>

    <div id="categories-container" class="flex flex-wrap justify-start"></div>
    <div id="pagination" class="flex justify-center mt-4"></div>

    <script>
        // Function to display the categories as cards
        function displayCategories(categories) {
            const container = document.getElementById('categories-container');
            container.innerHTML = ''; // Clear existing cards

            categories.forEach(category => {
                const card = document.createElement('div');
                card.classList.add('card', 'bg-gradient-to-r', 'from-blue-200', 'to-blue-300', 'border',
                    'border-blue-400', 'rounded-lg', 'shadow-xl', 'm-2', 'p-4', 'transition', 'transform',
                    'hover:scale-105', 'hover:rotate-2', 'cursor-pointer'
                ); // Added 'cursor-pointer' for clickable effect

                // Set width for 4 cards per row
                card.classList.add('w-full', 'sm:w-1/2', 'md:w-1/3', 'lg:w-1/4', 'max-w-xs');

                // Create card content (just showing the category title)
                card.innerHTML = `
            <div class="p-4">
                <h5 class="text-amber-500 text-xl font-bold mb-2">${category.title}</h5>
            </div>
        `;

                // Add click event listener to redirect
                card.addEventListener('click', () => {
                    const categoryTitle = category.title.replace(/ /g,
                    '-'); // Replace spaces with hyphens if needed
                    console.log(`Redirecting to: /categories/${categoryTitle}`);
                    window.location.href = `/categories/${categoryTitle}`;
                });


                container.appendChild(card);
            });
        }

        // Example fetch function for categories with pagination
        function fetchCategories(page = 1) {
            fetch(`http://127.0.0.1:8000/api/categories?page=${page}`)
                .then(response => response.json())
                .then(data => {
                    displayCategories(data.categories);
                    setupPagination(data.current_page, data.last_page);
                })
                .catch(error => console.log('Error fetching categories:', error));
        }

        // Call the function to fetch and display categories when the page loads
        fetchCategories();
    </script>


</x-layout>
