<?php

namespace App;

use App\Mail\NewUserWelcomeMail;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Mail;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','username', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    //this boot method is extented by adding this so that the profile is created as we create a user
    //checkout elequent model events documentation for more of such event methods
    //here we used the created one so as soon as the record is added to the users table ..we can create a profile!!
    protected static function boot()
    {
        parent::boot();

        static::created(function($user) {
            $user->profile()->create([
                'title' => $user->username, //just we set title as username bydefault at first you can keepit blank as well if in profile model it can be null
            ]);
            Mail::to($user->email)->send(new NewUserWelcomeMail());
        });

    }


    public function posts()
    {
        return $this->hasMany(Post::class)->orderBy('created_at', 'DESC');
    }


    //here users can follow many profiles ie.following
    public function following()
    {
        return $this->belongsToMany(Profile::class);
    }

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }


    //a user can like many posts
    public function like()
    {
        return $this->belongsToMany(Post::class);
    }
    
}
