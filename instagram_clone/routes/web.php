<?php

use App\Http\Controllers\PostsController;
use App\Mail\NewUserWelcomeMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
/*use App\Mail\NewUserWelcomeMail;*/
 
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
/*
Route::get('/email',function(){
    return new NewUserWelcomeMail();
});*/

Route::get('/',function(){
    return view('welcome');
});

Route::post('like/{user}/{post}','likeController@store');

Route::post('/follow/{user}', 'FollowsController@store');

// home page(where we can see posts from the users we follow)
Route::get('/home', 'postscontroller@index');

// to create a post
Route::get('/p/create', 'PostsController@create');

//to show a single image when v click on one particular post
Route::get('/p/{post}', 'PostsController@show');

Route::post('/p', 'PostsController@store');

// to display a post when we click on it
Route::get('/p/{post}', 'PostsController@show');

// profile page 
Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');

Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');//this will get the form

Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');//this will update the form

Route::post('/search','ProfilesController@search');

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/explore','PostsController@allposts');

Route::get('/profile/{user}/followers','FollowsController@viewfollowers');

Route::get('/profile/{user}/following','FollowsController@viewfollowing');

// update profile
Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');

// all users
Route::get('/all', 'AllUsersController@show');

//settings
Route::get('/settings', function(){
    return view('settings');
});
