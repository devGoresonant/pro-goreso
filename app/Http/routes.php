<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::auth();

Route::get('/home', 'HomeController@index');

Route::group(array('namespace'=>'admin'), function()
{
    Route::get('/dashboard', array('as' => 'dashboard', 'uses' => 'LoginController@dashboard'))->middleware('AdminAuth');
//    Route::get('/admin', array('as' => 'admin', 'uses' => 'LoginController@admin'));
//    Route::post('/admin', array('uses' => 'LoginController@doLogin'));
});

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    // return what you want
});

      Route::post('password/reset', 'Auth\AuthController@reset');