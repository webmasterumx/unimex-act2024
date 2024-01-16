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
Route::get('/licenciatura/sua/{slug}', [UnimexController::class, 'getLicenciaturaSua'])->name('licenciatura.sua');
Route::get('/posgrado/{slug}', [UnimexController::class, 'getPosgrado'])->name('posgrado');
Route::get('/contacto', [UnimexController::class, 'contacto'])->name('contacto');
Route::get('/calcula-tu-cuota', [UnimexController::class, 'calculaTuCuota'])->name('calcula_tu_cuota');
Route::view('/examen-de-conocimientos', 'examen_de_conocimientos')->name('examen_de_conocimientos');
Route::view('/resutados-examen', 'resultadosExamenConocimientos')->name('resultados_examen_conocimientos');
Route::view('/calendarios-escolares', 'calendarios_escolares')->name('calendarios_escolares');
Route::view('/opciones-de-titulacion', 'opciones_titulacion')->name('opciones_de_titulacion');
Route::view('/aviso-de-privacidad', 'aviso-privacidad')->name('aviso_de_privacidad');

//? consumo de la api para formulario   
Route::get('getPlanteles', [ApiConsumoController::class, 'getPlanteles'])->name('get.planteles');
Route::post('getNiveles', [ApiConsumoController::class, 'getNiveles'])->name('get.niveles');
Route::post('getPeriodos', [ApiConsumoController::class, 'getPeriodos'])->name('get.periodos');
Route::post('getCarreras', [ApiConsumoController::class, 'getCarreras'])->name('get.carreras');
Route::post('getHorarios', [ApiConsumoController::class, 'getHorarios'])->name('get.horarios');
