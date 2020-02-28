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
    return view('index');
})->name('index');
Route::get('/about','AboutController@about')->name('about.us');
Route::get('/services','AboutController@services')->name('services');
Route::get('/portfolio','PortfolioController@portfolio')->name('portfolio');
Route::get('/evnt--mngr/dashboard','PortfolioController@dashboard')->middleware('auth')->name('dashboard');
Route::get('/evnt--mngr/dashboard/photo-upload','PortfolioController@upload')->middleware('auth')->name('photo.upload');
Route::post('/evnt--mngr/dashboard/photo-upload/submit','PortfolioController@uploaded')->name('photo.uploaded');
Route::get('/evnt--mngr/dashboard/admin-panel','PortfolioController@adminpanel')->middleware('auth')->name('admin.panel.view');
Route::post('/evnt--mngr/dashboard/photo-upload/delete/{id}','PortfolioController@delete')->name('images.delete');
Route::get('/search','PortfolioController@search')->name('search');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
