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

Route::get('seclara/{fname}', 'Secondcontroller@second');

Route::get('thilara/{age}', 'Secondcontroller@third')->where(['age'=>"[0-9]+"]);

Route::get('fourlara/{midname}', function ($midname){      // alternative method for defined function closure

    echo "suhail asrar " .$midname;

});

Route::get('moblara/{mobile}', function ($mobile){

    echo "mobile number " .$mobile;


})->where(['mobile'=>"[0-9]+"]); // validation for numbers

Route::get('pricefilter/{max}/{min?}', function ($max, $min=0){

    echo "max = ".$max. " min = ".$min;

})->middleware('testmidd');

Route::get('testview', 'Testcontroller@index');
Route::get('testview', 'Testcontroller@create');
Route::get('testview', 'Testcontroller@loose');

Route::get('helloview', 'Tutscontroller@index');

Route::get('studentview', 'Studentcontroller@index');
Route::get('classview', 'Studentcontroller@create');
Route::get('teacherview', 'Studentcontroller@world');

Route::get('productview', 'Productcontroller@index');

Route::get('/', 'Contactcontroller@index');

Route::post('/contact', 'Contactcontroller@create')->name('contactstore');
