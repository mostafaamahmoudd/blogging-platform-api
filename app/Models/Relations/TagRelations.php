<?php

namespace App\Models\Relations;

use App\Models\Post;

trait TagRelations
{
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
