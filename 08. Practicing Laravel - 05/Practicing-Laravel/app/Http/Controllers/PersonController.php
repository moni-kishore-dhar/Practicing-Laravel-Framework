<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Person;


class PersonController extends Controller
{
    public function person()
    {
        $person_list = Person::all();     //Select * from people;

        return view('Person.PersonList' , compact('person_list'));
    }
}



