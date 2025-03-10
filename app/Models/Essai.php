<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Essai extends Model
{
    use HasFactory;

    protected $table = 'essais';

    protected $fillable = [
        'title',
        'content',
        'author',
        'picture',
        'timestamp',
    ];
}

