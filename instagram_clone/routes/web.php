<?php
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

Route::post('like/{user}/{post}','likeController@store');

Route::post('/follow/{user}', 'FollowsController@store');

Route::get('/', 'postscontroller@index');

Route::get('/p/create', 'PostsController@create');

Route::get('/p/{post}', 'PostsController@show');//to show a single image when v click on pne particular post

Route::post('/p', 'PostsController@store');



Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');

Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');//this will get the form
Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');//this will update the form

Route::post('/search','ProfilesController@search');



Route::get('/home', 'HomeController@index')->name('home');

Route::get('/explore','PostsController@allposts');

Route::get('/profile/{user}/followers','FollowsController@viewfollowers');

Route::get('/profile/{user}/following','FollowsController@viewfollowing');
