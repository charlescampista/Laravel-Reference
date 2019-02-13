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


/*

    Laravel Convention
    
    GET /projects (index) -> featch all.
    GET /projects/create (create) -> loads the form that is going to create a new object
    GET /projects/1 (show) -> it shows a single item, it can be an html page or a JSON return
    POST /projects (store) -> save.
    GET /projects/1/edit (edit) -> loads the edition form
    PACTH /projects/1 (update) -> update a single.
    DELETE /projects/1 (destroy) -> delete a single.

*/

// Route::get('/house', 'HouseController@index');
// Route::get('/models', 'ModelArtistController@index');
// Route::get('/models/create', 'ModelArtistController@create');
// Route::get('/models/{modelArtist}','ModelArtistController@show');
// Route::post('/models', 'ModelArtistController@store');
// Route::get('/models/{modelArtist}/edit','ModelArtistController@edit');
// Route::patch('/models/{modelArtist}','ModelArtistController@update');
// Route::delete('/models/{{modelArtist}}','ModelArtistController@destroy');

Route::resource('models','ModelArtistController');
Route::resource('donator','DonatorController');
Route::resource('sponsor','SponsorController');
Route::resource('house','HouseController');
Route::resource('car','CarController');
Route::patch('/donatortasks/{donatortask}','DonatorTaskController@update');
Route::post('/donatortasks/{donatorid}/task','DonatorTaskController@store');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
