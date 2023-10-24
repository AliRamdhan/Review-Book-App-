<?php

namespace App\Models\Client;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DiscussBooks extends Model
{
    use HasFactory;
    protected $table = "discuss";
    protected $primaryKey = "discuss_id";
    protected $fillable = [
        'discussMessage',
        'discussUser'
    ];

    public function userDiscuss(){
        return $this->belongsTo(User::class,'discussUser');
    }

    public function replyDiscuss(){
        return $this->hasMany(ReplyDiscussBooks::class,'replyDiscuss');
    }
}

