<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    //
    public function index($user)
    {
       // dd($user);//dd will echo out and stop the remaining operation
       //dd(User::find($user)); 
       $user = User::find($user);

       return view('home',[
           'user' => $user,//user on lhs is the variable will use in views
       ]);

    }
}
