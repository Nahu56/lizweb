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

/* --------------------------------- INDEX --------------------------------- */
Route::get('', ['uses' => 'App\Http\Controllers\controller@index'])->name("index");

/* ----------------------------- PAGE CONNEXION ----------------------------- */
Route::get('admin', ['uses' => 'App\Http\Controllers\controller@connexion'])->name("connexion");
