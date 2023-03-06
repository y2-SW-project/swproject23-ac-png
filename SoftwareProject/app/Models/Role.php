<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    public function users()
    {
        // Many-to-many relationship between User and Role.
        return $this->belongsToMany('App\Models\User', 'user_role');
    }
}
