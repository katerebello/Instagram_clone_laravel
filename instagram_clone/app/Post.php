<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
<<<<<<< HEAD

    protected $guarded = [];


=======
    protected $guarded =[];
    
>>>>>>> insta-k
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
