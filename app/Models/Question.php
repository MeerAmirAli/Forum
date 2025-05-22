<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    

    protected $fillable = ['title', 'body', 'category_id'];
public function user()
{
    
    return $this->belongsTo(User::class);
}

public function category()
{
    return $this->belongsTo(Category::class);
}
}
