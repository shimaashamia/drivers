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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    include public_path().'/views/index.blade.php';

  //  return view('../views/index.blade.php');
});



//  Route::get('drive/index', function () {
//      return view('drive/index');
//  });
//Route::get('drive/index','DriverController@index_api');

//Route::get('drive/index','ProductController@index_api');
//Route::controller('driver','DriverController');

Route::resource('driver', 'DriverController');
//Route::resource('AngularJs', 'DriverController');

// Route::put('drive/index/{id}',[ 'as' =>'drive.update','uses'=>'DriverController@update']);
// Route::get('drive/index',[ 'uses'=>'DriverController@index']);


// Route::post('drive/index',['as' =>'drive.store','uses'=>'DriverController@store']);

//Route::post('drive/store',['as' =>'drive.store','uses'=>'InfoDriverController@store_api']);

//Route::get('home', 'ControllerDriver@index');