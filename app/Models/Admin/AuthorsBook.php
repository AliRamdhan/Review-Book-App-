<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthorsBook extends Model
{
    use HasFactory;
    protected $table = "books_authors";
    protected $primaryKey = "author_id";

    protected $fillable = [
        'authorName',
        'authorImage' ,
        'authorDescription'
    ];

    public function books(){
        return $this->hasMany(Books::class,'bookAuthor');
    }
}
