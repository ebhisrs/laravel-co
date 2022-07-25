<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get('/', 'App\Http\Controllers\PagesController@index');
Route::get('/about', 'App\Http\Controllers\PagesController@about');
Route::get('/services', 'App\Http\Controllers\PagesController@services');
Route::get('/contact', 'App\Http\Controllers\PagesController@contact');
Route::get('/careers', 'App\Http\Controllers\PagesController@careers');
Route::get('/account-forms', 'App\Http\Controllers\PagesController@accountforms');
Route::get('/trading', 'App\Http\Controllers\PagesController@trading');
Route::get('/metals', 'App\Http\Controllers\PagesController@metals');
Route::get('/cfds', 'App\Http\Controllers\PagesController@cfds');
Route::get('/cryptocurrencies', 'App\Http\Controllers\PagesController@cryptocurrencies');
Route::get('/accounts', 'App\Http\Controllers\PagesController@accounts');
Route::get('/open-a-corporate-account', 'App\Http\Controllers\PagesController@openaccount');
Route::get('/gold', 'App\Http\Controllers\PagesController@gold');
Route::get('/calculator', 'App\Http\Controllers\PagesController@calculator');
Route::get('/vps', 'App\Http\Controllers\PagesController@vps');
Route::get('/trading-guides', 'App\Http\Controllers\PagesController@tradingguides');
Route::get('/metatrader4', 'App\Http\Controllers\PagesController@metatrader4');
Route::get('/metatrader5', 'App\Http\Controllers\PagesController@metatrader5');
Route::get('/webtrader', 'App\Http\Controllers\PagesController@webtrader');
Route::get('/mirror-trader', 'App\Http\Controllers\PagesController@mirrortrader');
Route::get('/fxddmena-mobile', 'App\Http\Controllers\PagesController@fxddmenamobile');
Route::get('/faq', 'App\Http\Controllers\PagesController@faq');
Route::get('/glossary', 'App\Http\Controllers\PagesController@glossary');
Route::get('/economic-calendar', 'App\Http\Controllers\PagesController@economiccalendar');
Route::get('/mt4-one-minute-data', 'App\Http\Controllers\PagesController@mt4one');
Route::get('/platforms', 'App\Http\Controllers\PagesController@platforms');
Route::get('/daily-analysis', 'App\Http\Controllers\PagesController@dailyanalysis');


Route::get('/contact-us', [ContactController::class,'contact']);
Route::get('/send-message', [ContactController::class,'sendEmail'])->name('contact.send');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('posts','App\Http\Controllers\PostsController');
Route::resource('latest', 'App\Http\Controllers\LatestController');
