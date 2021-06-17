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
*/

Route::redirect('/', 'home');

Auth::routes(['verify' => true]);

Route::get('home', 'HomeController@index')->middleware('verified');

Route::resource('users', 'UserController')->middleware('auth');
Route::resource('products', 'ProductController')->middleware('verified');
Route::resource('movements', 'ProductMovementController')->middleware('verified');
Route::get('download-movements', 'ProductMovementController@download')->middleware('verified');
Route::get('/search', 'ProductController@selectSearch');



 Route::middleware(['verified'])->group(function() {
  //  Roles
     Route::post('roles/store', 'RoleController@store')->name('roles.store');
     Route::get('roles', 'RoleController@index')->name('roles.index');
     Route::get('roles/create', 'RoleController@create')->name('roles.create');
     Route::put('roles/{role}', 'RoleController@update')->name('roles.update');
     Route::get('roles/{role}', 'RoleController@show')->name('roles.show');
     Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy');
     Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit');
 });

 Route::resource('users', 'UserController')->middleware('auth');
