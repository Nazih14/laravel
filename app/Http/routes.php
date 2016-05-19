<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::get('home', 'HomeController@index');

Route::get('login', 'Auth\AuthController@showLoginForm');
Route::post('login', 'Auth\AuthController@login');

Route::get('logout', 'Auth\AuthController@logout');

Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
Route::post('password/reset', 'Auth\PasswordController@reset');

Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');

Route::post('register', 'Auth\AuthController@register');
Route::get('register', 'Auth\AuthController@showRegistrationForm');


Route::resource('barang', 'BarangController');


//Route::resource('material', 'MaterialController');

// rute menu kategori
Route::get('genteng', 'KategoriController@showGenteng');
Route::get('bata', 'KategoriController@showBata');
Route::get('cat', 'KategoriController@showCat');
Route::get('lantai', 'KategoriController@showLantai');
Route::get('semen', 'KategoriController@showSemen');
Route::get('kayu', 'KategoriController@showKayu');
Route::get('besi', 'KategoriController@showBesi');
Route::get('perkakas', 'KategoriController@showPerkakas');

// rute item genteng
Route::get('gentengkodok', 'KategoriController@gentengKodok');
Route::get('gentengmagas', 'KategoriController@gentengMagas');
Route::get('gentengplentongbulat', 'KategoriController@gentengPlentongbulat');
Route::get('gentengplentongpapak', 'KategoriController@gentengPlentongpapak');
Route::get('gentengmorando', 'KategoriController@gentengMorando');
Route::get('gentengmorandoglazur', 'KategoriController@gentengMorandoglazur');


// rute item batu bata
Route::get('batako', 'KategoriController@batako');
Route::get('batamerah', 'KategoriController@bataMerah');
Route::get('merahoven', 'KategoriController@merahOven');
Route::get('batuadesit', 'KategoriController@batuAdesit');
Route::get('batucandi', 'KategoriController@batuCandi');
Route::get('batukali', 'KategoriController@batuKali');


// rute item cat
Route::get('dulux', 'KategoriController@dulux');
Route::get('catylac', 'KategoriController@catylac');
Route::get('nippon', 'KategoriController@nippon');
Route::get('metrolite', 'KategoriController@metrolite');
Route::get('danacryl', 'KategoriController@danacryl');
Route::get('property', 'KategoriController@property');

// rute item peralatan
//Route::get('perkakas', 'KategoriController@perkakas');





/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});



	
