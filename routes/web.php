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

#===========================================================#
### PUBLIC ROUTES START ###
#===========================================================#


Auth::routes();

### PUBLIC ROUTES END ###
#===========================================================#

#===========================================================#
### AUTHENTICATED ROUTES START ###
#===========================================================#
Route::group(['middleware' => 'web'],
    function () {

        Route::group(['middleware' => 'admin'], function () {
            Route::get('/', 'AdminController@adminPanel');
            Route::get('/admin_panel', 'AdminController@adminPanel')->name('admin_panel');
        });

        Route::group(['middleware' => 'client'], function () {
            Route::get('/', 'UserController@dashboard');
            Route::get('/dashboard', 'UserController@dashboard')->name('dashboard');
        });


    });

Route::group(['middleware' => 'XSSProtection'], function () {


});

#===========================================================#
### AUTHENTICATED ROUTES END ###
#===========================================================#






