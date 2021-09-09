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


Route::resource('visitantes', 'VisitantesController');
Route::post('visitantes/buscar', 'VisitantesController@buscar');
Route::get('adicionar-visitantes', 'VisitantesController@create');
Route::get('visitantes/{id}/editar', 'VisitantesController@edit');
Route::get('visitantes/{id}/detalhes', 'VisitantesController@show');
