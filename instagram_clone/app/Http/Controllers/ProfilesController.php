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
      // echo($user);
       $user = User::findOrFail($user);
       //$user = User::where('username', $user)-> first();
      //echo($user);

       return view('profiles/index',[
           'user' => $user,//user on lhs is the variable will use in views
       ]);

    }
}
