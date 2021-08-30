<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;


class AllUsersController extends Controller
{
    public function __construct() 
    {
        $this->middleware('auth');//so every single route will require autharization
    }


    public function show( User $user)
    {
        $all_users = User::where('id', '!=', auth()->id())->get();
        $all_profiles = Profile::where('id', '!=', auth()->id())->get();
        return view('users/allusers', compact('all_users', 'all_profiles'));
    }
}
