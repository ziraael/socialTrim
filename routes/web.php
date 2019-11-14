<?php

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
use App\Mail\NewUserWelcomeMail;


Route::get('/', function(){
    return view('welcome');
});

Auth::routes();  

Route::get('/email', function(){
    return new NewUserWelcomeMail();
});
Route::post('follow/{user}', 'FollowersController@store');

Route::get('/post/create','PostsController@create');
Route::post('/post','PostsController@store');
Route::get('/post/{post}','PostsController@show'); // ma mir nfund mos me override route tjera

Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');
Route::get('/profile/{user}/edit','ProfilesController@edit')->name('profile.edit'); //show the edit form
Route::patch('/profile/{user}','ProfilesController@update')->name('profile.update'); // actually edit it(update)



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
