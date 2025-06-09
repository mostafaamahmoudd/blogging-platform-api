<?php

namespace App\Models;

use App\Models\Relations\PostRelations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;
    use PostRelations;

    protected $fillable = [
        'title',
        'content',
        'user_id',
    ];
}
