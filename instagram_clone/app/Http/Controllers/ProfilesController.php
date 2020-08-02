<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class ProfilesController extends Controller
{
    //
    public function index(User $user)
    {
        // dd($user);
        //dd will echo out and stop the remaining operation
        //dd(User::find($user)); 

        return view('profiles/index', compact('user'));
    }

    public function edit(User $user)
    {
        $this->authorize('update', $user->profile);
        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
        $this->authorize('update', $user->profile);

        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'url',
            'image' => '',

        ]);


        // new profile image
        if (request('image')) {
            $image_path = request('image')->store('profile', 'public');

            $image = Image::make(public_path("storage/{$image_path}"))->fit(1000, 1000);
            $image->save();

            $imageArray = ['image' => $image_path ];
        }

        auth()->user()->profile->update(array_merge(
            $data,
            $imageArray  ?? [] 
        ));

        return redirect("/profile/{$user->id}");
    }
}
