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
    return view('pages.home');
});


Route::get('/talkshow/{any}', function () {
    return view('pages.home');
});

Route::get('/workshop/{any}', function () {
    return view('pages.home');
});

Route::get('/competition/{any}', function () {
    return view('pages.home');
});

Route::group(['prefix' => 'admin'], function () {

    Route::group(['namespace' => 'Auth'], function () {
        Route::get('login', 'LoginController@showLoginForm');
        Route::post('login', 'LoginController@login')->name('login');
        Route::post('logout', 'LoginController@logout')->name('logout');
    });

    Route::group(['namespace' => 'Admin'], function () {
        Route::get('dashboard', 'DashboardController@index');
    });
});
