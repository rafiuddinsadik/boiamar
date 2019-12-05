<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'name',
        'description',
        'author_id',
        'category_id',
        'slug'
    ];

    public function getCategory(){
        return $this->belongsTo(Category::class,'category_id', 'id');
    }

    public function getAuthor(){
        return $this->belongsTo(Author::class,'author_id', 'id');
    }
}
