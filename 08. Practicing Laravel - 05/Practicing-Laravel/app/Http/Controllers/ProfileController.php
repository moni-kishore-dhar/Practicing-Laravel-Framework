<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Profile;


class ProfileController extends Controller
{
    public function profile()
    {
        $profile_list = Profile::all();     ////Select * from profile;

        return view('Profile.ProfileList' , compact('profile_list'));
    }
}
  