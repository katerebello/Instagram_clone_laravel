<?php

namespace App\Http\Controllers;


use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Cache;



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
            'image' => ['required', 'image'],
        ]);

        $image_path = request('image')->store('uploads', 'public');

        $image = Image::make(public_path("storage/{$image_path}"))->fit(1200, 1200);//uses the intervention pacakge installed
        $image->save();

        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $image_path,
        ]);

        return redirect('/profile/' . auth()->user()->id);
    }

    public function show(Post $post)
    {
        
        return view('posts/show', compact('post'));
    }

    


    public function index(Post $post)
    {   
        $users = auth()->user()->following->pluck('user_id');
        //dd($users);
        $likes = (auth()->user())? auth()->user()->like->contains($post->id) : false;
        //dd($likes);
        $posts = Post::whereIn('user_id', $users)->with('user')->latest()->paginate(5);

        return view('posts.index', compact('posts','likes'));
    }

    public function allposts()
    {
        $posts = Post::all();
        //dd($posts);
        return view('posts.allposts',compact('posts'));
    }


}