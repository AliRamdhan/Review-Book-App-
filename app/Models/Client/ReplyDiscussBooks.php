<?php

namespace App\Models\Client;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ReplyDiscussBooks extends Model
{
    use HasFactory;
    protected $table = "discuss_comments";
    protected $primaryKey = "replyDiscuss_id";
    protected $fillable = [
        'replyUser',
        'replyDiscuss',
        'replyText'
    ];

    public function users(){
        return $this->belongsTo(User::class,'replyUser');
    }
}
