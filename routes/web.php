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

// Mikrotik API functions
Route::group(['prefix' => 'mikrotik'], function () {
    Route::get('', 'Mikrotik@index');
    Route::get('dhcpleases', 'Mikrotik@dhcpleases');
    Route::get('dnscache', 'Mikrotik@dnscache');
    Route::get('dnsstatic', 'Mikrotik@dnsstatic');
    Route::get('interface', 'Mikrotik@interface');
    Route::get('queue', 'Mikrotik@queue');
    Route::get('thedudemap', 'Mikrotik@thedudemap');
});
