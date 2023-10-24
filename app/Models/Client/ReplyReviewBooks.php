<?php

namespace App\Models\Client;

use App\Models\User;
use App\Models\Client\ReviewBooks;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ReplyReviewBooks extends Model
{
    use HasFactory;
    protected $table = "books_reviews_replies";
    protected $primaryKey = "replys_id";
    protected $fillable = [
        'replysUser',
        'replysReview',
        'replysText'
    ];

    public function userReplyReviewBooks(){
        return $this->belongsTo(User::class,'replysUser');
    }
    public function repliesReviewBooks()
    {
        return $this->belongsTo(ReviewBooks::class, 'replysReview', 'review_id');
    }
}
