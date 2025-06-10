<?php

namespace App\Models\Relations;

use App\Models\Comment;
use App\Models\Tag;
use App\Models\User;

trait PostRelations
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
