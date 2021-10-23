<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Person extends Model
{
    use HasFactory;

    protected $fillable= ['name', 'email', 'phone', 'country_id'];


    public function country()
    {
    
        return $this->belongsTo('App\Models\Country');
        
        //Here, $this indicates the Person. Which is belongs to only one country.

    }


}
