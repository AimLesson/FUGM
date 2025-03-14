<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opini extends Model
{
    use HasFactory;

    protected $table = 'opinis';

    protected $fillable = [
        'title',
        'content',
        'author',
        'picture',
        'timestamp',
    ];
}
