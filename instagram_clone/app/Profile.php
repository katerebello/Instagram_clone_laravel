<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage()
    {
        // $imagePath = ($this->image) ?  $this->image : 'profile/7wbefrd2tRPfctIqQ8LE8GHJoAbtU4LjA0z0Yvjq.jpeg' ; 
        $imagePath = ($this->image) ?  $this->image : 'profile/7wbefrd2tRPfctIqQ8LE8GHJoAbtU4LjA0z0Yvjq.png' ; 

        return '/storage/'. $imagePath;//in model $this implies the model u are in ,in this case profile
       //else can also take storage outside like follows:
       //'/storage/' return ($this->image) ?   .$this->image : '/storage/profile/7wbefrd2tRPfctIqQ8LE8GHJoAbtU4LjA0z0Yvjq.png'  //means if image provided take the option before : ,else if not take after : one
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //a profile can have many users so they are followers
    public function followers()
    {
        return $this->belongsToMany(User::class);
    }
    //
}
