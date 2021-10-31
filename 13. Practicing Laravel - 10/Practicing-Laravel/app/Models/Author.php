<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    public function books()
    {
        return $this->belongsToMany('App\Models\Book'); 
        //Here, $this indicates the Author. Which is belongs to many Books.
    }
}
