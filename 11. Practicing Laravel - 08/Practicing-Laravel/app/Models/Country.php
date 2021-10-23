<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;


    protected $fillable = ['name' , 'capital' , 'currency' , 'population'];

    public function persons()
    {
        
        return $this->hasMany('App\Models\Person');

        //Here, $this indicates the Country. Which has many persons.
    }



}
