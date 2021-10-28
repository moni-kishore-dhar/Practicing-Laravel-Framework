<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function user()
    {
        
         //Here, $this indicates the Profile. Which is belongs to only one User.
        
         return $this->belongsTo('App\Models\User', 'owner_id');
     
         

        /*
        In the 'profiles' table Laravel by default searches the 'user_id' as the foreign key of the 'users' table. Cause, here method name is 'user()'. [ By default, considered Foreign Key = "<method_name>_id" ]
        But in the 'profiles' table the foreign key of the 'users' table is 'owner_id'.
        That's why we need to mention the 'owner_id' here, which is the foreign key of the 'users' table.
        */

        
    }
}
