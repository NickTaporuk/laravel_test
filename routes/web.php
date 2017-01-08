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

//Route::get('/','PagesController@home');
//
//Route::get('about', function(){
//    return view('pages.about');
//});
Route::group(['middleware' => 'web'], function () {
    Auth::routes();

    Route::get('/home', 'HomeController@index')/*->middleware('auth')*/;
//Cards
    Route::get('cards', 'CardsController@index');
    Route::get('cards/{card}', 'CardsController@show');
    Route::get('cards/insertform', 'CardsController@insertform');
    Route::get('cards/store', 'CardsController@store');

//Notes
    Route::post('cards/{card}/notes', 'NotesController@store');
    Route::get('notes/{note}/edit', 'NotesController@edit');
    Route::patch('notes/{note}', 'NotesController@update');
});