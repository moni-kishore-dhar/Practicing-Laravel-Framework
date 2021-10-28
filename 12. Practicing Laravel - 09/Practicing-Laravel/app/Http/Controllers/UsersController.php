<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Profile;

class UsersController extends Controller
{
    
    
    public function index()
    {
        $users_data = User::all();
        return view('users.index', compact('users_data'));
    }



    public function create()
    {
        return view('users.create');
    }



    public function store()
    {
        //It will take all the fields with '_token':
        //User::create( request()->all() ); 


        //It will take all fields without '_token':
        //User::create( request()->except('_token') ); 



        //Inserting Data in 'users' table:

        $user = User::create([
            'firstname' => request('firstname'),
            'lastname' => request('lastname'),
            'email' => request('email'),
            'phone' => request('phone'),
            'date_of_birth' => request('date_of_birth'),
            'user_name' => request('user_name')
        ]);




        //Inserting Data in 'profiles' table:


        //First Approach:
        
        /*
        Profile::create([
            'profile_pic' => request('profile_pic'),
            'bio' => request('bio'),
            'address' => request('address'),
            'owner_id' => $user->id
        ]);
        */


        //Second Approach: 
        //Here we don't need to fill 'owner_id' manually. It will be done automatically. Cause 'owner_id' is a foreign key of users table.

        $user->profile()->create([                                              //profile() is a method of 'User' model which is defined in the 'User' model           
            'profile_pic' => request('profile_pic'),
            'bio' => request('bio'),
            'address' => request('address')
        ]);



        return redirect('/users/');
    }



    public function showProfile($id)
    {
        $user_data= User::find($id);
        return view('users.showProfile', compact('user_data'));
    }



    public function edit($id)
    {
        $editable_user = User::find($id);
        return view('users.edit', compact('editable_user'));
    }



    public function update($id)
    {
        $user = User::find($id);              

       
        //For getting the data from the 'input form':

        $firstname = request('firstname');
        $lastname = request('lastname');
        $email = request('email');
        $phone = request('phone');
        $date_of_birth = request('date_of_birth');
        $user_name = request('user_name');

        
        //For Updating the data in the database:
      
        $user->firstname = $firstname;
        $user->lastname = $lastname;
        $user->email = $email;
        $user->phone = $phone;
        $user->date_of_birth = $date_of_birth;
        $user->user_name = $user_name;              
        
        $user->save();
        
        return redirect('/users');
    }



    public function destroy($id)
    {
        $user = User::find($id);

        $user->delete();

        return back();
    }

}
