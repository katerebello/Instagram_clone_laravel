<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;


class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
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

        $image = Image::make(public_path("storage/{$image_path}"))->fit(1200, 1200);
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

    public function index(User $user)
    {
        // $likes = (auth()->user()) ? auth()->user()->LikePost->contains($user->id): false;
        // return view('posts/index', compact('posts', 'likes'));

        
        // grabs the users you are following
        $users = auth()->user()->following()-> pluck('profiles.user_id');
        
        // grabs the posts of the user you are following
        // paginate is posts per page
        // with('user') loads all the users while grabbing posts (more efficient)
        $posts = Post::whereIn('user_id', $users)->with('user')->latest()->paginate(5);

        return view('posts/index', compact('posts'));
    }
}
