<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    //It needs for Mass Assignment. We need to add [name] to fillable property to allow mass assignment:

    protected $fillable = ['name' , 'capital' , 'currency' , 'population'];

}
