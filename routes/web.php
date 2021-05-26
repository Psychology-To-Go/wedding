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
Route::get('/en', function () {
    return view('english');
})->name('en');
Route::get('/de', function () {
    return view('deutsch');
})->name('de');
Route::get('/bg', function () {
    return view('bulgarisch');
})->name('bg');
