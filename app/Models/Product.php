<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Product extends Model
{
    use HasFactory, Searchable;

    protected $fillable = [
        'title',
        'author',
        'genre',
        'description',
        'isbn',
        'image',
        'published',
        'publisher'
        // Add other fields here as needed for search
    ];

    /**
     * Customize the searchable fields for Elasticsearch.
     *
     * @return array
     */
    public function toSearchableArray(): array
    {
        return [
            'title' => $this->title,
            'author' => $this->author,
            'genre' => $this->genre,
            'description' => $this->description,
            'isbn' => $this->isbn,
            'published' => $this->published,
            'publisher' => $this->publisher,
            // Include other fields here as needed for search
        ];
    }
}
