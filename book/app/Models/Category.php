<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function books(): BelongsToMany
    {
        return $this->belongsToMany(Book::class, 'book_categories');// i should explicitly specify which table is it to not face any error
    }
}
