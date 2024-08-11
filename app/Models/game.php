<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class game extends Model
{
    use HasFactory;

    protected $fillable = [
        'game_title',
        'cover_art',
        'developer',
        'release_year',
    ];
}
