<?php

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

Route::post('/follow/{user}', 'FollowsController@store');

Route::get('/', 'postscontroller@index');

Route::get('/p/create', 'PostsController@create');

Route::get('/p/{post}', 'PostsController@show');//to show a single image when v click on pne particular post

Route::post('/p', 'PostsController@store');



Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');

Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');//this will get the form
Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');//this will update the form




Route::get('/home', 'HomeController@index')->name('home');
