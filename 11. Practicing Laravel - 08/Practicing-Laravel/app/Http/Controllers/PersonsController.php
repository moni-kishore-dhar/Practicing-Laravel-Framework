<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Person;
use App\Models\Country;

class PersonsController extends Controller
{



    public function index()
    {
        $persons_data = Person::all();
        return view('persons.index', compact('persons_data'));
    }

    
    public function showPersonDetails($id)
    {
        $person_details = Person::find($id);
        return view('persons.showpersondetails' , compact('person_details' ));
    }



    

    public function create()
    {
        $countries = Country::all();
        return view('persons.create', compact('countries'));
    }
    

    public function store()
    {
        Person::create([
            'name' => request('name'),
            'email' => request('email'),
            'phone' => request('phone'),
            'country_id' => request('country_id')
        ]);

        return redirect('/persons');
    }

    
    public function edit($id)
    {
        $editable_person = Person::find($id);
        $countries = Country::all();
        return view('persons.edit', compact('editable_person', 'countries') );
    }


    public function update($id)
    {
        $person = Person::find($id);              

       
        //For getting the data from the 'input form':

        $name = request('name');
        $email = request('email');
        $phone = request('phone');
        $country_id = request('country_id');

        
        //For Updating the data in the database:
      
        $person->name = $name;              
        $person->email = $email;
        $person->phone = $phone;
        $person->country_id = $country_id;

        $person->save();
        
        return redirect('/persons');
    }
    

    public function destroy($id)
    {
        $person = Person::find($id);

        $person->delete();

        return back();
    }





}
