<?php

use App\Http\Controllers\PostsController;
use App\Mail\NewUserWelcomeMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();

// welcome page
Route::get('/', function () {
    return view('welcome');
});

// mail
Route::get('/email', function(){
    return new NewUserWelcomeMail();
});

// follow button
Route::post('/follow/{user}', 'FollowController@store');

// likes button
// Route::post('/like/{user}', 'LikesController@store' );

// to create a post
Route::get('/p/create', 'PostsController@create');


Route::post('/p', 'PostsController@store');

// home page(where we can see posts from the users we follow)
Route::get('/home', 'PostsController@index');


// to display a post when we click on it
Route::get('/p/{post}', 'PostsController@show');

// profile page 
Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');

// edit profile
Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');

// update profile
Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');