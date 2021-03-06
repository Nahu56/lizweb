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
Route::get('', ['uses' => 'App\Http\Controllers\controller@index']);

/* --------------------------------- TABLEAUX --------------------------------- */
Route::get('tableaux', ['uses' => 'App\Http\Controllers\controller@tableaux']);

/* ----------------------------- PAGE CONNEXION ----------------------------- */
Route::get('connexion', ['uses' => 'App\Http\Controllers\controller@connexion']);

/* --------------------------------- AUTH -------------------------------- */
Route::post('auth', ['uses' => 'App\Http\Controllers\controller@auth']);


/* ------------------------------ PAGE ADMIN -------------------------------- */
Route::get('admin', ['uses' => 'App\Http\Controllers\controller@admin'])->name("admin");


 /* -------------------------------------------------------------------------- */
 /*                                EDIT TABLEAUX                               */
 /* -------------------------------------------------------------------------- */

/* ------------------------------- Page ajout ------------------------------- */
Route::get('create', function(){return view("create");});
Route::post('store', ['uses' => 'App\Http\Controllers\Controller@store']);

/* ---------------------------- Supprimer tableau --------------------------- */
Route::delete('accueil/{tableau}', ['uses' => 'App\Http\Controllers\controller@delete'])->name("tableau.delete");


