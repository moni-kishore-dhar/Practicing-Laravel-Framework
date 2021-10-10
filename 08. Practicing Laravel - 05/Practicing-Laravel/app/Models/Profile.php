<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    

    //Connection to a database table called Profile:

    protected $table = "profile";


    //Changing the primary key from id to profile_id:

   // protected $primaryKey = "profile_id";    
  
   
}
