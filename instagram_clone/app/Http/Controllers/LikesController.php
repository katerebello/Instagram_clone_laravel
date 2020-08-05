<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;

class LikesController extends Controller
{
    public function store( User $user)
    {
        return auth()->user()->LikePost()->toggle($user->post);
    }
}
