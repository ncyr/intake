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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/company_setup', 'HomeController@company_setup')->name('company_setup');

Route::get('/add_ons', 'HomeController@add_ons')->name('add_on_setup');
Route::get('/company_contacts', 'HomeController@company_contacts')->name('company_contacts');
Route::get('/store_settings', 'HomeController@store_settings')->name('store_settings');

Route::get('/logout', 'Auth\LoginController@logout');
Route::resource('companys', 'CompanysController')->middleware('auth');
Route::resource('stores', "StoresController")->middleware('auth');
Route::resource('contacts', "ContactsController")->middleware('auth');
Route::resource('storecontacts', "StoreContactsController")->middleware('auth');
Route::resource('companystores', "CompanyStoresController")->middleware('auth');
Route::resource('userroles', "UserRolesController")->middleware('auth');