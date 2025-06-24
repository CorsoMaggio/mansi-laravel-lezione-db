<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = ['firstname', 'lastname'];

    //Per specificare una relazione devo usare un metodo

    // SELECT authors.firstname, authors.lastname
    // FROM books
    // INNER JOIN authors ON (books.author_id = authors.id)
    // WHERE books.id = 18 

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
