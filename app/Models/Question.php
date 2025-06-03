<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{


    protected $guarded = ['id'];

    public function comments()
    {
       return $this->hasMany(Comment::class);
    }

    public function reactions()
    {
       return $this->hasMany(Reaction::class);
    }
    public function user()
    {

        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
