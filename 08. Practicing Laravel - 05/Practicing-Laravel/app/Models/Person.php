<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;
}






/*

Here, The table will be automatically detected by the convention of Laravel, which is the plural of model name.
Here the model name is Person. So the table name will be the plural form of Person, which is People.


*/