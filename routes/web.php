<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AfiliadosController;
use App\Http\Controllers\CentrosTrabajoController;
use App\Http\Controllers\CoordinacionesController;
use App\Http\Controllers\UsuariosController;


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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/home', [AfiliadosController::class,'mostrarAfiliados'])->name('home');

Route::get('/',[AfiliadosController::class,'mostrarAfiliados']);

Route::get('/agregarafiliado',[AfiliadosController::class,'agregarAfiliado'])->name('afiliado.agregar'); //Vista para capturar datos de nuevo afiliado

Route::post('/insertarAfiliado',[AfiliadosController::class,'insertarAfiliado'])->name('afiliado.insertar'); //Inserta el afiliado nuevo a la base de datos.

Route::get('/verAfiliados',[AfiliadosController::class,'mostrarAfiliados'])->name('afiliados.mostrar'); //Inserta el afiliado nuevo a la base de datos.

Route::delete('/eliminarAfiliado/{id}', [AfiliadosController::class,'eliminarAfiliado'])->name('afiliado.eliminar');

Route::get('/editarAfiliado/{id}', [AfiliadosController::class,'editarAfiliado'])->name('afiliado.editar');

Route::put('/editarAfiliado/{id}', [AfiliadosController::class,'updateAfiliado'])->name('afiliado.update');


//Centros Trabajo
Route::get('/agregarCentroTrabajo',[CentrosTrabajoController::class,'agregarCentroTrabajo'])->name('centroTrabajo.agregar');

Route::post('/insertarCentroTrabajo',[CentrosTrabajoController::class,'insertarCentroTrabajo'])->name('centroTrabajo.insertar'); //Inserta el afiliado nuevo a la base de datos.

Route::get('/verCentrosTrabajo',[CentrosTrabajoController::class,'mostrarCentrosTrabajo'])->name('centrosTrabajo.mostrar'); //Inserta el afiliado nuevo a la base de datos.

Route::delete('/eliminarCentroTrabajo/{id}', [CentrosTrabajoController::class,'eliminarCentroTrabajo'])->name('centroTrabajo.eliminar');

Route::get('/editarCentroTrabajo/{id}', [CentrosTrabajoController::class,'editarCentroTrabajo'])->name('centroTrabajo.editar');

Route::put('/editarCentroTrabajo/{id}', [CentrosTrabajoController::class,'updateCentroTrabajo'])->name('centroTrabajo.update');


//Coordinaciones

Route::get('/agregarCoordinacion',[CoordinacionesController::class,'agregarCoordinacion'])->name('coordinacion.agregar');

Route::post('/insertarCoordinacion',[CoordinacionesController::class,'insertarCoordinacion'])->name('coordinacion.insertar'); //Inserta el afiliado nuevo a la base de datos.

Route::get('/verCoordinaciones',[CoordinacionesController::class,'mostrarCoordinaciones'])->name('coordinaciones.mostrar'); //Inserta el afiliado nuevo a la base de datos.

Route::delete('/eliminarCoordinacion/{id}', [CoordinacionesController::class,'eliminarCoordinacion'])->name('coordinacion.eliminar');

Route::get('/editarCoordinacion/{id}', [CoordinacionesController::class,'editarCoordinacion'])->name('coordinacion.editar');

Route::put('/editarCoordinacion/{id}', [CoordinacionesController::class,'updateCoordinacion'])->name('coordinacion.update');


//Usuarios

Route::get('/verUsuario', [UsuariosController::class,'mostrarUsuarios'])->name('usuario.mostrar');
//Agregar usuario
Route::get('/agregarUsuario',[UsuariosController::class,'agregarUsuario'])->name('usuario.agregar');


//Insertar Usuario
Route::post('/insertarUsuario',[UsuariosController::class,'insertarUsuario'])->name('usuario.insertar');

Route::delete('/eliminarUsuario/{id}', [UsuariosController::class,'eliminarUsuarios'])->name('usuario.eliminar');

Route::get('/editarUsuario/{id}', [UsuariosController::class,'editarUsuarios'])->name('usuario.editar');
