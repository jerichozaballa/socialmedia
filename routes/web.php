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

Route::view('/', 'welcome');



// Route::view('/fb', 'fb');

Route::get('account', 'AccountsController@index')->name('accounts.index');
Route::get('account/create', 'AccountsController@create')->name('accounts.create');
Route::post('account', 'AccountsController@store')->name('accounts.store');
Route::get('account/{account}', 'AccountsController@show')->name('accounts.show');
Route::get('account/{account}/edit', 'AccountsController@edit')->name('accounts.edit');
Route::patch('account/{account}', 'AccountsController@update')->name('accounts.update');
Route::delete('account/{account}', 'AccountsController@destroy')->name('accounts.destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('home/{home}/edit', 'HomeController@edit')->name('homes.edit');
Route::patch('home/{home}', 'HomeController@update')->name('homes.update');

Route::get('pass/{pass}/edit', 'Changepass@edit')->name('pass.edit');
Route::patch('pass/{pass}', 'Changepass@update')->name('pass.update');
