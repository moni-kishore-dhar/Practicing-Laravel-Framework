<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    
    //protected $fillable = [ 'firstname', 'lastname', 'email', 'phone', 'date_of_birth','user_name' ];

    //An alternative of $fillable:

    protected $guarded = [];




    //Here $date_of_birth is converted into an object of the 'Carbon' class. So now, we can use the method of 'Carbon' class for $date_of_birth:
   
    protected $dates = ['date_of_birth'];



    public function profile()
    {
        
        //Here, $this indicates the User. Which has one Profile.
        
        return $this->hasOne('App\Models\Profile', 'owner_id');    
        
        
        /*
        In the 'profiles' table Laravel by default searches the 'user_id' as the foreign key of the 'users' table. Cause, here method name is 'user()'. [ By default, considered Foreign Key = "<method_name>_id" ]
        But in the 'profiles' table the foreign key of the 'users' table is 'owner_id'.
        That's why we need to mention the 'owner_id' here, which is the foreign key of the 'users' table.
        */
       
    }


}




/*

    Difference Between $fillable & $guarded: 
    
    $fillable: Here declared fields will be fillable or assignable.

    $guarded: Here declared fields will be guarded to fill. So it remains empty to make sure that all fields are filled up.


*/