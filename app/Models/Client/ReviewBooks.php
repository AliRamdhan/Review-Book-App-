<?php

namespace App\Models\Client;

use App\Models\User;
use App\Models\Admin\Books;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ReviewBooks extends Model
{
    use HasFactory;
    protected $table = "books_reviews";
    protected $primaryKey = "review_id";
    protected $fillable = [
        'reviewUser',
        'reviewBook',
        'reviewRates',
        'reviewText'
    ];

    public function userReviewBooks(){
        return $this->belongsTo(User::class,'reviewUser');
    }
    public function bookReviewBooks(){
        return $this->belongsTo(Books::class,'reviewBook');
    }
    public function repliesReviewBooks()
    {
        return $this->hasMany(ReplyReviewBooks::class, 'replysReview', 'review_id');
    }
}
