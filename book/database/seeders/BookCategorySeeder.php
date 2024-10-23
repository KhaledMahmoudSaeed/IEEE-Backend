<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\BookCategory;
use App\Models\Category;
use Illuminate\Database\Seeder;

class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::all();
        $books = Book::all();

        foreach ($books as $book) {
            // Select 5 unique categories randomly
            $selectedCategories = $categories->random(4);

            foreach ($selectedCategories as $category) {
                BookCategory::create([
                    'book_id' => $book->id,
                    'category_id' => $category->id,
                ]);
            }
        }
    }
}
