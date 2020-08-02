<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// follow button
Route::post('/follow/{user}', 'FollowController@store');

// to create a post
Route::get('/p/create', 'PostsController@create');

Route::post('/p', 'PostsController@store');

// to display a post when we hover on it
Route::get('/p/{post}', 'PostsController@show');

// profile page 
Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');

// edit profile
Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');

// update profile
Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');