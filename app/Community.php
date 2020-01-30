<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    public function members ()
    {
        return $this->belongsToMany(User::class, 'join_community', 'community_id', 'user_id');
    }
}
