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
//Feedback
Route::get('/feedback', 'SiteController@aloqa')->name('aloqa');
Route::post('/feedback', 'SiteController@feedbackStore')->name('contact.store');
//Admin routes
Route::namespace('Admin')->middleware('auth')->name('admin.')->prefix('admin') -> group(function(){
    Route::get('/', function(){
        return redirect()->route('admin.dunyo.index');
    })->name('dashboard');
    Route::resource('mahalla', 'MahallaController');  
    Route::resource('sport', 'SportController');
    Route::resource('dunyo', 'MahallaController');
    Route::resource('texnologiya', 'TexnologiyaController');
    //Feedback routes
    Route::get('feedback', 'FeedbackController@index')->name('feedbacks.index');
    Route::get('feedback/{id}/show', 'FeedbackController@show')->name('feedbacks.show');
    Route::delete('feedback/{id}/delete', 'FeedbackController@delete')->name('feedbacks.delete');
});
Auth::routes([
    'register' => false
]);


// Route::get('/home', 'HomeController@index')->name('home');
