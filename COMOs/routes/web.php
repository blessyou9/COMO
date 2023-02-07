<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorPaginas;


Route ::get('/',[ControladorPaginas::class,'flogin'])->name('Nlogin');
Route ::get('/producto',[ControladorPaginas::class,'fProducto'])->name('NProducto');
#Route::get('/contact', [ControladorPaginas::class,'fContact'])->name('NContact');
#Route::post('/contact_post', [ControladorPaginas::class,'contact_post']);

