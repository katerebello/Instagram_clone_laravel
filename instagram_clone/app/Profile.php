<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
<<<<<<< HEAD
=======

>>>>>>> insta-k
    protected $guarded = [];

    public function profileImage()
    {
<<<<<<< HEAD
        $imagePath = ($this->image) ? $this->image : 'profile/MnCHs5CNqBGHtwVwsvQY73YS2QRvpvEaeRy7icMn.jpeg';

        return '/storage/' . $imagePath;
=======
        return ($this->image) ? '/storage/'  .$this->image : '/storage/profile/7wbefrd2tRPfctIqQ8LE8GHJoAbtU4LjA0z0Yvjq.png' ; //in model $this implies the model u are in ,in this case profile
       //else can also take storage outside like follows:
       //'/storage/' return ($this->image) ?   .$this->image : '/storage/profile/7wbefrd2tRPfctIqQ8LE8GHJoAbtU4LjA0z0Yvjq.png'  //means if image provided take the option before : ,else if not take after : one
>>>>>>> insta-k
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
<<<<<<< HEAD
    

    // a profile has many followers(users)
=======

    //a profile can have many users so they are followers
>>>>>>> insta-k
    public function followers()
    {
        return $this->belongsToMany(User::class);
    }
<<<<<<< HEAD
=======
    //
>>>>>>> insta-k
}
