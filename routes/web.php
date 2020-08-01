<?php

use Illuminate\Support\Facades\Route;

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
Route::group(['middleware' => 'auth'], function(){


    Route::group(['middleware' => 'is_admin'], function(){
        Route::get('/admin/dashboard', 'admin\dashboardController@index')->name('admin_dash');
    });

    Route::get('/lawyer/dashboard', 'lawyer\dashboardController@index')->name('lawyer_dash');



});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

