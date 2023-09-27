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

Route::get('user', array('as' => 'user.index', 'uses' => 'App\Http\Controllers\UserController@index'));
Route::get('user/register', array('as' => 'user.register', 'uses' => 'App\Http\Controllers\UserController@register'));
Route::post('user/store', array('as' => 'user.store', 'uses' => 'App\Http\Controllers\UserController@store'));
Route::get('user/login', array('as' => 'user.login', 'uses' => 'App\Http\Controllers\UserController@login'));
Route::post('user/authenticate', array('as' => 'user.authenticate', 'uses' => 'App\Http\Controllers\UserController@authenticate'));
Route::get('user/logout', array('as' => 'user.logout', 'uses' => 'App\Http\Controllers\UserController@logout'));
Route::get('user/account', array('as' => 'user.account', 'uses' => 'App\Http\Controllers\UserController@account'))->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
