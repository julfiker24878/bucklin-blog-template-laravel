<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'desc', 'image'];

    function rel_to_category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
