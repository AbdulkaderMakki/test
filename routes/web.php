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


Route::get('/', 'Home@index')->name('home');
Route::get('lang/{lang}','LocaleController@switch_language')->name('lang.switch');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
/**********************/
/**
 * Country & Towns routes
 */
Route::resource('country/country', 'Country\CountryController', ['names' => 'country.country']);
Route::post('/town/ajax_get','Country\TownController@')->name('town.ajax.get');
Route::resource('country/town', 'Country\TownController', ['names' => 'country.town']);
/**********************/
/**********************/
/**
 * Sponsor routes
 */
Route::resource('sponsor', 'SponsorController', ['names' => 'sponsor']);
/**********************/
