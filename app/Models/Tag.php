<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    // Define the relationship with the Tag model/Use for tagging
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
