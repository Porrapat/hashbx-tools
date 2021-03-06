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

Route::get('/', 'SiteController@index');
Route::get('/token', 'SiteController@token');
Route::get('/cloudmining', 'SiteController@cloudmining');
Route::get('/whale-calculator', 'SiteController@whaleCalculator');

Route::get('/faq', 'SiteController@faq');
Route::get('/about-us', 'SiteController@aboutus');
Route::get('/tips-and-tricks', 'SiteController@tipsAndTricks');
Route::get('/votehashbx', 'SiteController@voteHashBX');