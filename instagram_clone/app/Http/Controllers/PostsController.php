<?php

namespace App\Http\Controllers;

<<<<<<< HEAD

use App\Post;
use App\User;
=======
use App\Post;
>>>>>>> insta-k
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
            'image' => ['required', 'image'],
        ]);

        $image_path = request('image')->store('uploads', 'public');

<<<<<<< HEAD
        $image = Image::make(public_path("storage/{$image_path}"))->fit(1200, 1200);
=======
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);//uses the intervention pacakge installed
>>>>>>> insta-k
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

    public function show(\App\Post $post){//if u use $post here and also in web.php u have a /{post} ie. the same name eg .post here u can get the the object post pf that image clicked by just adding(\App\Post $post) here as argument

        //dd($post);
        return view('posts/show',compact('post')); //compact does the  same as passing an array eg. [post=>$post]

    }

    public function index()
    {
        $users = auth()->user()->following->pluck('user_id');
       // dd($users);
        $posts = Post::whereIn('user_id', $users)->latest()->get();
       return view('posts.index', compact('posts'));
    }

}
