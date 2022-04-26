<?php

use App\Http\Controllers\CantanteController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Routing\RouteGroup;
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

Route::get('/', [CantanteController::class, 'index'])->name('aprobaciones');

Route::resource('cantante', CantanteController::class);
