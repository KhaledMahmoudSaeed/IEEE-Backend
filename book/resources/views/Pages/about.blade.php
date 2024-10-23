<x-layout>

    <x-heading>
        BookMugs
    </x-heading>
<main class="container mx-auto px-4 py-12">
    <!-- Content starts here -->
    <section class="mb-12">
        <h2 class="text-3xl font-bold text-amber-500 mb-6">Our Mission</h2>
        <p class="text-lg leading-relaxed text-yellow-100 font-bold mb-4 max-w-full md:max-w-3/4 lg:max-w-2/3">
            At BookMugs, our mission is to connect readers with books that inspire, entertain, and educate.
        </p>
        <p class="text-lg leading-relaxed text-yellow-100 font-bold mb-4 max-w-full md:max-w-3/4 lg:max-w-2/3">
            We strive to create a welcoming space for all book enthusiasts, where they can explore a curated selection
            of titles,
        </p>
        <p class="text-lg leading-relaxed text-yellow-100 font-bold mb-4 max-w-full md:max-w-3/4 lg:max-w-2/3">
            participate in engaging discussions, and enjoy a variety of literary events.
        </p>
    </section>

    <section class="mb-12">
        <h2 class="text-3xl font-bold text-amber-500 mb-6">For Authors</h2>
        <p class="text-lg leading-relaxed text-yellow-100 font-bold mb-4 max-w-full md:max-w-3/4 lg:max-w-2/3">
            At BookMugs, we understand the importance of providing authors with a platform to showcase their work.
            Whether you are an aspiring writer or a seasoned author, we offer a seamless process for publishing your
            books and promoting your work to a global audience.
        </p>
        <p class="text-lg leading-relaxed text-yellow-100 font-bold mb-4 max-w-full md:max-w-3/4 lg:max-w-2/3">
            Our platform provides tools and support to help you manage your publications, engage with readers, and track
            your book’s performance. We believe in empowering authors by giving them the resources they need to succeed.
        </p>
        <p class="text-lg leading-relaxed text-yellow-100 font-bold mb-4 max-w-full md:max-w-3/4 lg:max-w-2/3">
            Additionally, we offer opportunities for authors to post job listings, connect with other professionals in
            the industry, and collaborate on exciting projects. Join our community and let us help you bring your
            literary dreams to life.
        </p>
    </section>

    <section class="mb-12">
        <h2 class="text-3xl font-bold text-amber-500 mb-6">Meet the Team</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="bg-slate-800 p-6 rounded-lg shadow-lg">
                <img src="https://randomuser.me/api/portraits/women/50.jpg" alt="Alice Johnson"
                    class="w-full h-48 object-cover rounded-t-lg mb-4">
                <h3 class="text-xl font-bold mb-2 text-amber-500">Alice Johnson</h3>
                <p class="text-lg text-yellow-900 font-bold mb-2">Founder & CEO</p>
                <p class="text-lg text-yellow-100 font-bold">
                    Alice has over 20 years of experience in the publishing industry and is passionate about connecting
                    readers with great books.
                </p>
            </div>
            <div class="bg-slate-800 p-6 rounded-lg shadow-lg">
                <img src="https://randomuser.me/api/portraits/men/51.jpg" alt="Bob Smith"
                    class="w-full h-48 object-cover rounded-t-lg mb-4">
                <h3 class="text-xl font-bold mb-2 text-amber-500">Bob Smith</h3>
                <p class="text-lg text-yellow-900 font-bold mb-2">Chief Editor</p>
                <p class="text-lg text-yellow-100 font-bold">
                    Bob oversees the editorial process, ensuring that every book meets our high standards of quality and
                    relevance.
                </p>
            </div>
            <div class="bg-slate-800 p-6 rounded-lg shadow-lg">
                <img src="https://randomuser.me/api/portraits/women/52.jpg" alt="Carol Davis"
                    class="w-full h-48 object-cover rounded-t-lg mb-4">
                <h3 class="text-xl font-bold mb-2 text-amber-500">Carol Davis</h3>
                <p class="text-lg text-yellow-900 font-bold mb-2">Marketing Manager</p>
                <p class="text-lg text-yellow-100 font-bold">
                    Carol leads our marketing efforts, helping to spread the word about our latest releases and events.
                </p>
            </div>
            <div class="bg-slate-800 p-6 rounded-lg shadow-lg">
                <img src="https://randomuser.me/api/portraits/men/53.jpg" alt="David Lee"
                    class="w-full h-48 object-cover rounded-t-lg mb-4">
                <h3 class="text-xl font-bold mb-2 text-amber-500">David Lee</h3>
                <p class="text-lg text-yellow-900 font-bold mb-2">Customer Support</p>
                <p class="text-lg text-yellow-100 font-bold">
                    David ensures that all customer queries and issues are addressed promptly and efficiently.
                </p>
            </div>
        </div>
    </section>

    <section>
        <h2 class="text-3xl font-bold text-amber-500 mb-6">Contact Us</h2>
        <form action="#" method="POST" class="bg-slate-800 p-8 rounded-lg shadow-lg">
            <div class="mb-4">
                <label for="name" class="block text-lg mb-2 text-yellow-100 font-bold">Name</label>
                <input type="text" id="name" name="name"
                    class="w-full p-2 rounded border border-slate-600 bg-slate-700 text-white" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-lg mb-2 text-yellow-100 font-bold">Email</label>
                <input type="email" id="email" name="email"
                    class="w-full p-2 rounded border border-slate-600 bg-slate-700 text-white" required>
            </div>
            <div class="mb-4">
                <label for="message" class="block text-lg mb-2 text-yellow-100 font-bold">Message</label>
                <textarea id="message" name="message" rows="4"
                    class="w-full p-2 rounded border border-slate-600 bg-slate-700 text-white" required></textarea>
            </div>
            <button type="submit" class="bg-amber-500 text-slate-800 py-2 px-4 rounded hover:bg-amber-400">Send
                Message</button>
        </form>
    </section>
</main>

<footer class="bg-slate-800 py-6">
    <div class="container mx-auto text-center text-slate-400 px-4">
        <p>&copy; 2024 BookMugs. All rights reserved.</p>
    </div>
</footer>

</x-layout>