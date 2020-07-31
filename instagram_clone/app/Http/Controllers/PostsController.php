<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class PostsController extends Controller
{
    //so that only logged in users can have access to the create post form    
    public function __construct() 
    {
        $this->middleware('auth');//so every single route will require autharization
    }


    public function create()
    {
        return view('posts/create');
    }

    public function store()
    {
       $data = request()->validate([
            'caption' => 'required',
            'image' => ['required','image'],
        ]);

       // dd(request('image')->store('uploads','public'));
        $imagePath = (request('image')->store('uploads','public'));

        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
        $image->save();
      //  \App\Post::create($data);

       // auth()->user()->posts()->create($data);//so that the user_id comes from the relation and auth is so that user must be signed in
       auth()->user()->posts()->create([
           'caption' => $data['caption'],
           'image' => $imagePath,
       ]);

       //dd(request()->all());//get all the data thats been passed to the request(just for checking dd is used)
        return redirect('/profile/'. auth()->user()->id);
    }

}
