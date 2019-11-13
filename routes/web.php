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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/desarrollo', function () {
    return view('desarrollo');
});

Route::get('/propiedad/{id}', function () {
    return view('propiedad');
});
Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Route::group(['prefix' => 'admin'], function () {
    Route::resource('/desarrollo', 'DevelopController');
    Route::get('/propiedad/document/delete/{id}', 'DevelopController@destroy_document');
    Route::resource('/propiedad', 'PropertyDevelopController');
    
    //Route::get('/propiedad/{property_id}', 'PropertyDevelopController@show');
    Route::get('/propiedad/create/{property_id}', 'PropertyDevelopController@create');
    
    Route::resource('/galeria_propiedad', 'GalleryDevelopController');
    Route::get('/galeria_propiedad/create/{develop_id}', 'GalleryDevelopController@create');
    Route::get('/galeria_propiedad/image/delete/{id}', 'GalleryDevelopController@destroy_document');
    
    Route::resource('/slider', 'HomeSliderController');
    Route::get('/slider/image/delete/{id}', 'HomeSliderController@destroy_image');
    
});
