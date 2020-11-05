<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\post;

class likeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(User $user,Post $post)
    {   
        $data = auth()->user()->like()->toggle($user->posts->find($post->id));
        return $data;
    }
}
