<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublishersBook extends Model
{
    use HasFactory;
    protected $table = "books_publishers";
    protected $primaryKey = "publisher_id";
    protected $fillable = [
        'publisherName',
        'publisherDescription',
        'publisherAddress'
    ];
    public function books(){
        return $this->hasMany(Books::class,'bookPublisher');
    }
}
