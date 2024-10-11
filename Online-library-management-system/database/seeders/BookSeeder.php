<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bookTitles = [
            "The Alchemist",
            "Life of Pi",
            "The Girl with the Dragon Tattoo",
            "The Night Circus",
            "Gone Girl",
            "The Goldfinch",
            "The Road",
            "Shantaram",
            "The Book Thief",
            "The Time Traveler's Wife",
            "The Secret History",
            "Cloud Atlas",
            "All the Light We Cannot See",
            "The Shadow of the Wind",
            "The Name of the Wind",
            "A Song of Ice and Fire",
            "American Gods",
            "Big Little Lies",
            "The Silent Patient",
            "Circe",
            "The Midnight Library",
            "Anxious People",
            "Where the Crawdads Sing",
            "Educated",
            "The Nightingale",
            "Little Fires Everywhere",
            "Normal People",
            "Daisy Jones & The Six",
            "The Vanishing Half",
            "The Seven Husbands of Evelyn Hugo",
            "The Invisible Life of Addie LaRue",
            "Mexican Gothic",
            "Pachinko",
            "A Man Called Ove",
            "The Water Dancer",
            "The Song of Achilles",
            "The Overstory",
            "The Testaments",
            "The Underground Railroad",
            "The Nickel Boys",
            "Homegoing",
            "Lincoln in the Bardo",
            "Station Eleven",
            "The Light Between Oceans",
            "Before We Were Strangers",
            "The Giver of Stars",
            "Where'd You Go, Bernadette",
            "The Curious Incident of the Dog in the Night-Time",
            "The House in the Cerulean Sea",
            "The Night Watchman"
        ];

        Book::factory()->count(50)->create([
            'title' => function () use ($bookTitles) {
                return $bookTitles[array_rand($bookTitles)];
            },
        ]);
    }
}
