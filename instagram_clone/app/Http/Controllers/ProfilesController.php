<?php

namespace App\Http\Controllers;
use Intervention\Image\Facades\Image;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;


class ProfilesController extends Controller
{
    public function index(User $user) // User is actually /Post/user but we have imported at top ie.Post/User namespace so thats considered
    {
       //dd($user);//dd will echo out and stop the remaining operation
       //dd(User::find($user)); 
      //echo($user);
       //$user = User::findOrFail($user);//overwritten below using the compact method
       //$user = User::where('username', $user)-> first();
      //echo($user);
      $follows = (auth()->user()) ? auth()->user()->following->contains($user->id) : false;
      //dd($follows);

       return view('profiles/index',compact('user','follows'));

    }

    public function edit(User $user){
        //dd($user);
        $this->authorize('update', $user->profile);//authorized the statement we wrote in profilepolicy
        return view('profiles/edit',compact('user'));
    }

    public function search(User $user,Request $request){
        //dd($user->all());
        $users = $user->all();
        $search = $request->input('q');
        if($search != ''){
            $found = $user::where('username','LIKE','%'.$search.'%')->get();
            //return $found->count();
            //dd($found);
            return view ('search',compact('found'));
        }
        else{
            return('NOT FOUND');
        }
        //dd($users);
        //dd($search);
        //return view ('search',compact('users'));
    }

    public function update(User  $user)
    {
        $this->authorize('update', $user->profile);

        $data = request()->validate([
            'title'=> 'required',
            'description'=>'required',
            'url'=>'url',
            'image'=>''
        ]);


        if (request('image')) {
            $imagePath = request('image')->store('profile','public');

            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000,1000);
            $image->save();

            $imageArray = ['image' => $imagePath];
        }
        //dd($data);
        //dd(array_merge(
       //     $data,
       //     ['image' => $imagePath]
       // ));
        auth()->user()->profile->update(array_merge(
            $data,
            $imageArray ?? [] //if theres a image in a request then pass or else null always ie. previous image will not be erased
        ));//does matter wats passes in ie.the user ull be able to edit only if ur the logged in user

        return redirect ("/profile/{$user->id}");
      
         //dd($user);
        



        return redirect("/profile/{$user->id}");
    }
}
