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

// simply way to defined custom url ..
Route::get('sayhello', 'Hellocontroller@index');

Route::get('givedemo', 'Democontroller@demobro');


// alternative way for showing view..
Route::get('woolara', function (){

    return view('first_class');


});

Route::get('/', function () {
    return view('welcome');
});
