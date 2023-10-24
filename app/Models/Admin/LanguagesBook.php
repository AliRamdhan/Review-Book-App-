<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LanguagesBook extends Model
{
    use HasFactory;
    protected $table ="books_languages";
    protected $primaryKey = "language_id";
    protected $fillable = [
        'languageName'
    ];
    public function books(){
        return $this->belongsToMany(LanguagesBook::class,'bookLanguage');
    }
}
