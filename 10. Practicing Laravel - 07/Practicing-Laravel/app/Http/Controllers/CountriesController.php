<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Country;

class CountriesController extends Controller
{
  
    
    public function create()
    {
        return view('country.create');
    }




    public function store(Request $request)          //$request is an object of Request. It has been injected for getting the data from the user and inserting them into the database in one command. ' Country::create( $request->all() );'
    {
     


        //Some techniques for getting the data from the 'input form':
        

        //First Approach:    
        /*

        $name = request('name');
        $capital = request('capital');
        $currency = request('currency');
        $population = request('population');

        */


        //Second Approach:
        /*

        $name = request()->input('name');
        $capital = request()->input('capital');
        $currency = request()->input('currency');
        $population = request()->input('population');
        
        */




        //Some techniques for inserting the data in the database.:
        

        //First Approach:
        //Mass Assignment :
        /*

        Country::create([
            'name' => $name,                       //'<database attribute name>' => <assigning value>  
            'capital' => $capital,
            'currency' => $currency,
            'population' => $population
        ]);
        
        */
    

        //Second Approach:
        /*

        $country = new Country;               //$country is an object of the Country model/class 
        
        $country->name = $name;               //Assigning the value($name) in property of the $country object
        $country->capital = $capital;
        $country->currency = $currency;
        $country->population = $population;

        $country->save();              //for saving the value 
        
        */



        
        //This one line command has been used for getting all the data from the 'input form' and inserting them to the database:
        
        Country::create( $request->all() );




        //This command is used for getting only the data of 'name' and 'capital' from 'input form' and inserting them into the database:
       
        //Country::create( $request->only('name' , 'capital') );




        //This command is used for getting all the data except 'population' from 'input form' and inserting them to the database:
        
        //Country::create( $request->except('population') ); 




        //return back();       //for returning the previous page




        return redirect('/countries');
        
        
    }




    public function showAllCountry()
    {
       $countries_data = Country::all(); 

       return view('country.showallcountry' , compact('countries_data'));
    }



    public function showCountryDetails($id)
    {
       
        //$country_details = Country::where('id', '=', $id)->get();                /*  "select * from countries where id = $id";  */


        //It will only work for searching with a primary key (like $id): ( It is much easier than the previous one and we can use it only for searching with primary key ($id): )
        $country_details = Country::find($id);


        return view('country.showcountrydetails' , compact('country_details'));
    
    }


    

    //Another Approach for searching any data from DB without any query: Here, the passing dynamic variable name ($editable_country) has to be same in the route, controller and view.
    //Route Model Binding:

    /*

    public function edit(Country $editable_country)                   //Country is a Model/Class & $editable_country is an object
    { 
        
        return view('country.edit', compact('editable_country'));
    
    }

    */



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


