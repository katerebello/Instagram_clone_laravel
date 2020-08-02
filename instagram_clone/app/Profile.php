<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/MnCHs5CNqBGHtwVwsvQY73YS2QRvpvEaeRy7icMn.jpeg';

        return '/storage/' . $imagePath;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    

    // a profile has many followers(users)
    public function followers()
    {
        return $this->belongsToMany(User::class);
    }
}
