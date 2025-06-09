<?php

namespace App\Models\Relations;

use App\Models\User;

trait PostRelations
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
