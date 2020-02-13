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

// Route::resource('/', function () {
//     return view('welcome');
// });

// Route::view('/', function() {
//     return view('layout.app');
// });
    

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::view('/', 'welcome');
Auth::routes();

Route::get('/login/member', 'Auth\LoginController@showMemberLoginForm');
Route::get('/register/member', 'Auth\RegisterController@showMemberRegisterForm');

Route::post('/login/member', 'Auth\LoginController@memberLogin')->name('login_member');
Route::post('/register/member', 'Auth\RegisterController@createMember');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', 'Auth\LoginController@memberLogout');
    // Route::view('/member', 'member');
