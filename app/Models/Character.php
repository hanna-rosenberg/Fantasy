<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book;

class Character extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'age',
        'creature',
        'alignment',
        'power',
        'colour',
        'book_id',
        'summary',
        'img_url',
    ];

    public $timestamps = false;

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
