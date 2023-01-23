<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorPaginas;


Route ::get('/',[ControladorPaginas::class,'fInicio'])->name('NInicio');
Route::get('/contact', [ControladorPaginas::class,'fContact'])->name('NContact');
Route::post('/contact_post', [ControladorPaginas::class,'contact_post']);
//Route::post('/contact_post', 'HomeController@contact_post');
