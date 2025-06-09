<?php

namespace App\Policies;

use App\Models\User;

class TagPolicy
{
    public function create(User $user){
        return $user->role == 'admin';
    }

    public function update(User $user){
        return $user->role == 'admin';
    }

    public function delete(User $user){
        return $user->role == 'admin';
    }
}
