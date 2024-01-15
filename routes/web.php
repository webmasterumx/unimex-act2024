<?php

use App\Http\Controllers\ApiConsumoController;
use App\Http\Controllers\UnimexController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [UnimexController::class, 'inicio'])->name('inicio');

Route::get('/planteles/{slug}', [UnimexController::class, 'getPlanteles'])->name('plantel');
Route::get('/acerca-de-unimex/{alug}', [UnimexController::class, 'getAcercade'])->name('acercade');
Route::get('/licenciatura/{slug}', [UnimexController::class, 'getLicenciatura'])->name('licenciatura');

//? consumo de la api para formulario   
Route::get('getPlanteles', [ApiConsumoController::class, 'getPlanteles'])->name('get.planteles');
Route::post('getNiveles', [ApiConsumoController::class, 'getNiveles'])->name('get.niveles');
Route::post('getPeriodos', [ApiConsumoController::class, 'getPeriodos'])->name('get.periodos');
Route::post('getCarreras', [ApiConsumoController::class, 'getCarreras'])->name('get.carreras');
Route::post('getHorarios', [ApiConsumoController::class, 'getHorarios'])->name('get.horarios');
