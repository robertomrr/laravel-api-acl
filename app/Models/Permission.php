<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory, HasUuids;

    public function users():BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }    
}
