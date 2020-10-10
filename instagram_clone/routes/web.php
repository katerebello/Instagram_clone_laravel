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

<<<<<<< HEAD


Auth::routes();

// welcome page
Route::get('/', function () {
    return view('welcome');
});
=======
>>>>>>> insta-k

// mail
Route::get('/email', function(){
    return new NewUserWelcomeMail();
});

<<<<<<< HEAD
// follow button
Route::post('/follow/{user}', 'FollowController@store');

// likes button
// Route::post('/like/{user}', 'LikesController@store' );

// to create a post
Route::get('/p/create', 'PostsController@create');

=======
Route::post('/follow/{user}', 'FollowsController@store');

Route::get('/', 'postscontroller@index');

Route::get('/p/create', 'PostsController@create');

Route::get('/p/{post}', 'PostsController@show');//to show a single image when v click on pne particular post
>>>>>>> insta-k

Route::post('/p', 'PostsController@store');

// home page(where we can see posts from the users we follow)
Route::get('/home', 'PostsController@index');


// to display a post when we click on it
Route::get('/p/{post}', 'PostsController@show');


// profile page 

Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');

<<<<<<< HEAD
// edit profile
Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');

// update profile
Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');
=======
Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');//this will get the form
Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');//this will update the form




Route::get('/home', 'HomeController@index')->name('home');
>>>>>>> insta-k
