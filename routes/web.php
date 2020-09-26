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

Route::get('/', 'UsersController@loginView')->name('users.login-view');
Route::get('/register', 'UsersController@registerView')->name('users.register-view');
Route::get('/forgot-password', 'UsersController@forgotPasswordView')->name('users.forgot-password-view');
Route::get('/change-password', 'UsersController@changePasswordView')->name('users.change-password-view');
Route::get('/home', 'HomeController@index')->name('home.index');
