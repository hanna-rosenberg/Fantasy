<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        'summary'
    ];

    public $timestamps = false;
}
