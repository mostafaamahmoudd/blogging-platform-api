<?php

namespace App\Models;

use App\Models\Relations\CommentRelations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /** @use HasFactory<\Database\Factories\CommentFactory> */
    use HasFactory;
    use CommentRelations;

    protected $fillable = [
      'text',
      'user_id',
      'post_id',
    ];
}
