<?php

namespace App\Http\Controllers;

Use App\User;
use Illuminate\Http\Request;

class FollowsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(User $user)
    {
        return auth()->user()->following()->toggle($user->profile);
    }
    public function viewfollowers(User $user)
    {
        //dd($user->profile->followers);
        $followers = $user->profile->followers;
        //dd($followers);
        return view('profiles/followers',compact('followers'));
    }

    public function viewfollowing(User $user)
    {
        //dd($user->profile);
        $followings = $user->following;
        //dd($followings);
        //dd($followings);
        return view('profiles/following',compact('followings'));
    }
}

