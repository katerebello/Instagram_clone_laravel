<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $guarded = [];

    public function profileImage()
    {
        return ($this->image) ? '/storage/'  .$this->image : '/storage/profile/7wbefrd2tRPfctIqQ8LE8GHJoAbtU4LjA0z0Yvjq.png' ; //in model $this implies the model u are in ,in this case profile
       //else can also take storage outside like follows:
       //'/storage/' return ($this->image) ?   .$this->image : '/storage/profile/7wbefrd2tRPfctIqQ8LE8GHJoAbtU4LjA0z0Yvjq.png'  //means if image provided take the option before : ,else if not take after : one
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    //
}
