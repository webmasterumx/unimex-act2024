<?php

use App\Http\Controllers\ApiConsumoController;
use App\Http\Controllers\CalculadoraCuotasController;
use App\Http\Controllers\FormController;
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
Route::get('/App/Preinscripcion-online', [UnimexController::class, 'preinscripcionEnLinea'])->name('preinscripcion.linea');
Route::get('/preguntas-frecuentes', [UnimexController::class, 'preguntasFrecuentes'])->name('preguntas.frecuentes');
Route::get('/rvoes', [UnimexController::class, 'rvoe'])->name('rvoe');
Route::get('/investigacion', [UnimexController::class, 'investigacion'])->name('investigacion');
Route::view('/opciones-de-titulacion', 'opciones_titulacion')->name('opciones_de_titulacion');
Route::view('/examen-de-conocimientos', 'examen_de_conocimientos')->name('examen_de_conocimientos');
Route::view('/resutados-examen', 'resultadosExamenConocimientos')->name('resultados_examen_conocimientos');
Route::view('/servicio-social', 'servicioSocial')->name('servicio.social');
Route::view('/calendarios-escolares', 'calendarios_escolares')->name('calendarios_escolares');
Route::view('/aviso-de-privacidad', 'aviso-privacidad')->name('aviso_de_privacidad');

//? consumo de la api para formulario   
Route::get('/getPlanteles', [ApiConsumoController::class, 'getPlanteles'])->name('get.planteles');
Route::post('/getNiveles', [ApiConsumoController::class, 'getNiveles'])->name('get.niveles');
Route::post('/getPeriodos', [ApiConsumoController::class, 'getPeriodos'])->name('get.periodos');
Route::post('/getCarreras', [ApiConsumoController::class, 'getCarreras'])->name('get.carreras');
Route::post('/getHorarios', [ApiConsumoController::class, 'getHorarios'])->name('get.horarios');
Route::post('/get/horarios/calculadora', [ApiConsumoController::class, 'calculadoraHorarios'])->name('get.horarios.calculadora');
Route::post('/get/detalle/beca', [ApiConsumoController::class, 'calculaDetalleHorarios'])->name('get.detalle.horario');
Route::post('/valida/prospecto', [ApiConsumoController::class, 'verificaProspecto'])->name('valida.prospecto');
Route::get('/getMunicipios/{estado}', [ApiConsumoController::class, 'getMunicipios'])->name('get.municipios');

//* envio de formularios
Route::post('/contacto/prospecto', [FormController::class, 'contactoProspecto'])->name('contacto.prospecto');
Route::post('/form/servicio/alumno', [FormController::class, 'servicioAlumnos'])->name('form.servicio.alumno');
Route::post('/form/trabaja/unimex', [FormController::class, 'trabajaUnimex'])->name('form.trabaja.unimex');
Route::post('/form/quejas/sugerencias', [FormController::class, 'quejasYsugerencias'])->name('form.quejas.sugerencias');
Route::post('/form/empresas/occ', [FormController::class, 'empresasOCC'])->name('form.empresas.pcc');
//? peticiones de calculadora de cuotas
Route::post('/insertar/prospecto/calculadora', [CalculadoraCuotasController::class, 'insertarProspecto'])->name('paso.uno');
//* formulario de preinscripcion en linea
Route::post('/validacion/preinscripcion', [FormController::class, 'preinscripcionLineaValidacion'])->name('validacion.preinscripcion.linea');

//!testing
Route::get('testing', [FormController::class, 'testerEnvio'])->name('testing');