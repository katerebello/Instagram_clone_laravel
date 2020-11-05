<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class likeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(User $user)
    {
        $data = auth()->user()->like()->toggle($user->posts);
        return $data;
    }
}
