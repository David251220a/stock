<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\PadronController;
use App\Http\Controllers\PaisController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/logout', [LoginController::class, 'logout']);

Route::group([
    'middleware' => 'auth',
], function(){
    Route::get('/home', [InicioController::class, 'index'])->name('home');
    Route::get('/pais', [PaisController::class, 'index'])->name('secundaria.pais.index');
    Route::get('/padron', [PadronController::class, 'index'])->name('padron.index');

});

