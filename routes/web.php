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