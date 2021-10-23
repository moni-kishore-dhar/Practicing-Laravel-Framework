<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Country;
use App\Models\Person;

class CountriesController extends Controller
{
  
    
    public function create()
    {
        return view('country.create');
    }



    public function store(Request $request)          
    {
     
        Country::create( $request->all() );
        return redirect('/countries');   
        
    }




    public function showAllCountry()
    {
       $countries_data = Country::all(); 
       return view('country.showallcountry' , compact('countries_data'));
    }



    public function showCountryDetails($id)
    {
       
        //$country_details = Country::where('id', '=', $id)->get();       


        //It will only work for searching with a primary key (like $id): ( It is much easier than the previous one and we can use it only for searching with primary key ($id): )
        $country_details = Country::find($id);






        //Here, we can use a query to find out the persons:
        /*  

        // Here, country_id is not a PRIMARY KEY. That's why we can not use the find() method there. So where() method has been used there:
        
        $persons_in_this_country = Person::where('country_id', $country_details->id)->get();
        return view('country.showcountrydetails' , compact('country_details','persons_in_this_country' ));
        
        */
        
        



        //We can also do it without any query:
        
        return view('country.showcountrydetails' , compact('country_details' ));
    

        
    }




    public function edit($id)
    {
        
        //It will only work for searching with primary key (like $id):
        $editable_country = Country::find($id);
        return view('country.edit', compact('editable_country'));
    
    }



    public function update($id)
    {
        $country = Country::find($id);               //Searching the data where will be updated

       
        //For getting the data from the 'input form':

        $name = request('name');
        $capital = request('capital');
        $currency = request('currency');
        $population = request('population');

        
        //Some techniques for Updating the data in the database:
      
    
        //First Approach:
        //Mass Assignment:
        /*

        $country->update([

            'name' => $name,
            'capital' => $capital,
            'currency' => $currency,
            'population' => $population
        ]);
        
        */


        //Second Approach:

        $country->name = $name;              
        $country->capital = $capital;
        $country->currency = $currency;
        $country->population = $population;

        $country->save();
        
     
        return redirect('/countries');

    }


    public function destroy($id)
    {
        $country = Country::find($id);

        $country->delete();

        return back();
    }


}   


