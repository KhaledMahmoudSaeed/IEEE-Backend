<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\User;

class BookSeeder extends Seeder
{
    public function run()
    {
        // Fetch all users first
        $users = User::all();

        // Array of real book titles
        $bookTitles = [
            'To Kill a Mockingbird',
            '1984',
            'Pride and Prejudice',
            'The Great Gatsby',
            'Moby-Dick',
            'War and Peace',
            'The Catcher in the Rye',
            'The Lord of the Rings',
            'The Hobbit',
            'Fahrenheit 451',
            'The Diary of a Young Girl',
            'The Picture of Dorian Gray',
            'Brave New World',
            'Crime and Punishment',
            'The Grapes of Wrath',
            'One Hundred Years of Solitude',
            'Wuthering Heights',
            'Jane Eyre',
            'The Odyssey',
            'The Brothers Karamazov',
            'The Count of Monte Cristo',
            'Les Misérables',
            'The Alchemist',
            'The Kite Runner',
            'The Road',
            'The Shining',
            'The Bell Jar',
            'Animal Farm',
            'The Hitchhiker\'s Guide to the Galaxy',
            'Gone with the Wind',
            'The Fault in Our Stars',
            'The Chronicles of Narnia',
            'The Secret Garden',
            'The Old Man and the Sea',
            'A Tale of Two Cities',
            'The Little Prince',
            'The Color Purple',
            'The Wind-Up Bird Chronicle',
            'The Joy Luck Club',
            'The Road Less Traveled',
            'The Art of War',
            'The Book Thief',
            'The Five People You Meet in Heaven',
            'The Time Traveler\'s Wife',
            'Eat, Pray, Love',
            'The Immortal Life of Henrietta Lacks',
            'Dune',
            'A Brief History of Time',
            'Sapiens: A Brief History of Humankind',
            'Educated',
            'Becoming',
            'Where the Crawdads Sing',
            'The Help',
            'Little Fires Everywhere',
            'The Silent Patient',
            'Circe',
            'The Vanishing Half',
            'Normal People',
            'The Night Circus',
            'Station Eleven',
            'Before the Coffee Gets Cold',
            'Anxious People',
            'The Seven Husbands of Evelyn Hugo',
            'The Song of Achilles',
            'The Midnight Library'
        ];

        // Shuffle the titles to randomize their order
        shuffle($bookTitles);

        // Create 70 books and assign each to a random author
        Book::factory()->count(70)->make()->each(function ($book, $index) use ($users, $bookTitles) {
            $book->title = $bookTitles[$index % count($bookTitles)]; // Use titles in order
            $book->user_id = $users->random()->id; // Assign a random user
            $book->save(); // Save the book
        });
    }
}
