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


Route::get('/', function () {
    return view('welcome');
});

*/

Route::get('/master', function()
{
    return View::make('master.index');
});

Route::get('/t', function()
{
    return View::make('lab.index');
});

Route::get('/', function()
{
    return View::make('Admin.index');
});

