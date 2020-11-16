<?php

namespace App\Http\Controllers;
use Intervention\Image\Facades\Image;

use Illuminate\Http\Request;
use App\User;




class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(User $user)
    {
        $users = $user->all();
        //$profiles = Profile::where('id','!=','auth(id)')->get();
        //dd($profiles);
        return view('home',compact('users'));
    }
}
