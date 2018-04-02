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


Route::view('','public.es.index');
Route::view('admin','admin.index');
Route::view('login','admin.login');

Route::resource('user','UserController');
Route::resource('lang','LanguageController');
Route::resource('categorie','CategorieController');
Route::resource('multimedia','MultimediaController');
Route::resource('menu','MenuController');

//aqui las rutas para administrar el tour
Route::resource('turismo','TourController');
Route::get('t/categoria/{id}','TourController@showCategoria');
//fin de las ruas para administrar el tour

// comienzo de rutas de img
Route::resource('img','ImageController');
Route::post('slider/{id}','ImageController@slider');
Route::post('slider/delete/{id}','ImageController@deleteSlider');
Route::get('slider/show/{id}','ImageController@showSlider');
// fin de rutas de img


// comienzo de rutas de video
Route::resource('video','VideoController');
Route::post('video/{id}','VideoController@video');
Route::post('video/delete/{id}','VideoController@deleteVideo');
Route::get('video/show/{id}','VideoController@showVideo');
// fin de rutas de video



//Rutas Comentarios de los tours


// Rutas de Public

Route::view('tour', 'public.es.tour');
Route::view('categories', 'public.es.categories');
Route::view('contact', 'public.es.contact');
Route::view('about', 'public.es.about_us');
Route::view('personal-info', 'public.es.payment.personal_info');
Route::view('payment', 'public.es.payment.payment_info');
Route::view('confirmation', 'public.es.payment.confirmation');

// Fin de las rutas publicas