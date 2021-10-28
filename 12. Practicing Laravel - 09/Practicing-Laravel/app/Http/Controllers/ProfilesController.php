<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Profile;

class ProfilesController extends Controller
{
    
    public function index()
    {
        $profiles_data = Profile::all();
        return view('profiles.index', compact('profiles_data'));
    }

    
    public function edit($id)
    {
        $editable_profile = Profile::find($id);
        return view('profiles.edit', compact('editable_profile'));
    }



    public function update($id)
    {
        $profile = Profile::find($id);               //Searching the data where will be updated

       
        //For getting the data from the 'input form':

        $profile_pic = request('profile_pic');
        $bio = request('bio');
        $address = request('address');
        
        //For Updating the data in the database: 
        //Mass Assignment:
     
        $profile->update([

            'profile_pic' => $profile_pic,
            'bio' => $bio,
            'address' => $address
            
        ]);


        return redirect('/profiles');

    }

}
