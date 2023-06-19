<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;


    public function author(){

        return $this->belongsTo(User::class,'user_id');
    }

    public function comment(){
        return $this->hasMany(Comment::class);
    }

    public function category(){//category_id

        return $this->belongsTo(Category::class);
    }
}
