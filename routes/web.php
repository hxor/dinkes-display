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

Route::get('/', 'HomeController@index')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth', 'role:admin']], function () {
    Route::resource('user', 'UserController');
    Route::resource('setting', 'SettingController', ['only' => ['index', 'store']]);
    Route::resource('graha', 'GrahaController');
});

Route::group(['prefix' => 'user', 'as' => 'user.', 'middleware' => ['auth']], function () {
    Route::resource('schedule', 'ScheduleController');
    Route::resource('playlist', 'PlaylistController');
    Route::resource('runtext', 'RuntextController');

    Route::get('/profile', 'ProfileController@index')->name('profile.index');
    Route::put('/profile/update', 'ProfileController@update')->name('profile.update');
});


Route::group(['prefix' => 'table', 'as' => 'table.', 'middleware' => ['auth']], function () {
    Route::get('user', 'UserController@dataTable')->name('user');
    Route::get('graha', 'GrahaController@dataTable')->name('graha');
    Route::get('schedule', 'ScheduleController@dataTable')->name('schedule');
    Route::get('playlist', 'PlaylistController@dataTable')->name('playlist');
    Route::get('runtext', 'RuntextController@dataTable')->name('runtext');
});

/**
 * Example Role Middleware
 */
Route::get('/admin', function () {
    return 'admin';
})->middleware(['auth', 'role:admin']);
 Route::get('/user', function () {
    return 'user';
})->middleware(['auth', 'role:user']);
