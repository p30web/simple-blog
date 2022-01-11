<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory , HasFactory;

    protected $fillable = [
        'title',
        'content',
        'author_id',
        'status',
    ];
}
