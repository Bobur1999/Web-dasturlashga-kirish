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

//Home page
Route::get('/', 'SiteController@home')->name('home');
//About
Route::get('/About', 'SiteController@about')->name('about');
//Mahalliy yangiliklar
Route::get('/mahalliy', 'SiteController@mahalliy')->name('mahalliy');
//Dunyo yangiliklar
Route::get('/dunyo', 'SiteController@dunyo')->name('dunyo');
//Sport yangiliklar
Route::get('/sport', 'SiteController@sport')->name('sport');
//Texnologiya yangiliklar
Route::get('/texnologiya', 'SiteController@texnologiya')->name('texnologiya');
// batafsil qismi
Route::get('/batafsil1/{id}', 'SiteController@batafsil1')->name('batafsil1');
Route::get('/batafsil2/{id}', 'SiteController@batafsil2')->name('batafsil2');
Route::get('/batafsil3/{id}', 'SiteController@batafsil3')->name('batafsil3');
Route::get('/batafsil4/{id}', 'SiteController@batafsil4')->name('batafsil4');
//Feedback
Route::get('/feedback', 'SiteController@aloqa')->name('aloqa');
Route::post('/feedback', 'SiteController@feedbackStore')->name('contact.store');
//Search
Route::get('/search1', 'SiteController@search1')->name('search1');
Route::get('/search2', 'SiteController@search2')->name('search2');
Route::get('/search3', 'SiteController@search3')->name('search3');
Route::get('/search4', 'SiteController@search4')->name('search4');
//Admin routes
Route::namespace('Admin')->middleware('auth')->name('admin.')->prefix('admin') -> group(function(){
    Route::get('/', function(){
        return redirect()->route('admin.dunyo.index');
    })->name('dashboard');
    //Yangiliklar
    Route::resource('mahalla', 'MahallaController');  
    Route::resource('sport', 'SportController');
    Route::resource('dunyo', 'DunyoController');
    Route::resource('texnologiya', 'TexnologiyaController');
    //Profile
    Route::get('/profil', 'ProfilController@index')->name('profil.index');
    Route::put('/profil/update', 'ProfilController@update')->name('profile.update');
    Route::put('/profil/password', 'ProfilController@password')->name('profile.password');
    //Feedback routes
    Route::get('feedback', 'FeedbackController@index')->name('feedbacks.index');
    Route::get('feedback/{id}/show', 'FeedbackController@show')->name('feedbacks.show');
    Route::delete('feedback/{id}/delete', 'FeedbackController@delete')->name('feedbacks.delete');
});
Auth::routes([
    'register' => false
]);


// Route::get('/home', 'HomeController@index')->name('home');
