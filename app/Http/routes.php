<?php


//Event::listen('LaraBook.Registration.Events.UserRegistered',function($event){
//    dd("now user is Registered");
//});
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','PagesController@home');

/*
|Register post Data
*/
Route::get('/register','RegistrationController@create');
Route::post('/','RegistrationController@store');
Route::get('login','SessionsController@create');
Route::post('login','SessionsController@store');
Route::get('/auth/logout',array('as' => 'logout', 'uses' => 'RegistrationController@logout'));


/* * ******************** Statuses *****************************/
//Route::get('status','StatusesController@index');
Route::post('status','StatusesController@store');

/* * ******************** Users ********************************/
Route::get('users','UsersController@index');
Route::get('/username/{username}',[
    'as' => 'profile_path',
    'uses' => 'StatusesController@show'
]);
Route::post('/follow','FollowersController@follow');
Route::delete('/follow/{id}','FollowersController@destroy');
/* * ******************** Comments ******************************/
Route::post('/status/{id}/comments','CommentsController@store');