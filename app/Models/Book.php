<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //attributi id, name, pages,years, created_at e updated_at
    protected $fillable = ['years', 'name', 'pages', 'price', 'author_id'];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
