<?php

namespace App\Models\Admin;

use App\Models\Admin\GenresBook;
use App\Models\Client\ReviewBooks;
use App\Models\Client\DiscussBooks;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Books extends Model
{
    use HasFactory;
    protected $table = "books";
    protected $primaryKey = "book_id";
    protected $fillable =[
        'bookTitle',
        'bookImage',
        'bookPages',
        'bookSynopsis',
        'bookAuthor',
        'bookPublisher',
        'bookLanguage',
    ];

    public function author(){
        return $this->belongsTo(AuthorsBook::class,'bookAuthor');
    }

    public function genres()
    {
        return $this->belongsToMany(GenresBook::class, 'books_genres_config', 'books_id', 'genres_id');
    }

    public function languages(){
        return $this->belongsToMany(LanguagesBook::class,'books_languages_config','books_id','languages_id');
    }

    public function publisher(){
        return $this->belongsTo(PublishersBook::class,'bookPublisher');
    }

    public function reviews(){
        return $this->hasMany(ReviewBooks::class, 'reviewBook', 'book_id');
    }
    public function discusses()
    {
        return $this->hasMany(DiscussBooks::class, 'book_id');
    }
}
