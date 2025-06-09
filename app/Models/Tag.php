<?php

namespace App\Models;

use App\Models\Relations\TagRelations;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use TagRelations;

    protected $fillable = [
        'name'
    ];
}
