<?php

namespace App\Models\Admin;

use App\Models\Admin\Books;
use App\Models\Client\ReviewBooks;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GenresBook extends Model
{
    use HasFactory;
    protected $table = "books_genres";
    protected $primaryKey = "genre_id";
    protected $fillable = [
        'genreName',
        'genreImage',
        'genreDescription'
    ];

    public function books()
    {
        return $this->belongsToMany(Books::class, 'books_genres_config', 'genres_id', 'books_id');
    }
    public function reviews(){
        return $this->hasMany(ReviewBooks::class, 'reviewBook', 'book_id');
    }
}
