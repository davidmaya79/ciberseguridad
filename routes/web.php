<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\AuditoriaController;
use App\Http\Controllers\HallazgoController;
use App\Http\Controllers\AccionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmailController;
use App\Models\Hallazgo;

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
// Route::resource('clientes', ClienteController::class);
Auth::routes();

Route::get('/auditorias/index', [App\Http\Controllers\AuditoriaController::class, 'index'])->name('auditorias.index');
 

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/clientes/index', [App\Http\Controllers\ClienteController::class, 'index'])->name('clientes.index');
 


 
// Route::get('/', function () {
//     return redirect('/clientes');
// });

 
 

 
 
 
// Route::get('clientes/pdf/{id}', [App\Http\Controllers\ClienteController::class, 'pdf'])->name('clientes.pdf');
Route::get('auditorias/pdf/{id}', [App\Http\Controllers\AuditoriaController::class, 'pdf'])->name('auditorias.pdf');


// Route::get('/clientes/pdf/{id}', 'ClienteController@pdf')->name('clientes.pdf');

Route::resource('clientes', ClienteController::class);
Route::resource('empleados', EmpleadoController::class);
Route::resource('auditorias', AuditoriaController::class);
Route::resource('hallazgos', HallazgoController::class);
Route::resource('acciones', AccionController::class);

// Route::put('clientes/{id}/restore', [ClienteController::class, 'restore'])->name('clientes.restore');
// Route::delete('clientes/{id}/forceDelete', [ClienteController::class, 'forceDelete'])->name('clientes.forceDelete');

// Route::delete('/clientes/{cliente}', [ClienteController::class, 'destroy'])->name('clientes.destroy');

// Route::get('clientes/eliminados', [App\Http\Controllers\ClienteController::class, 'eliminados'])->name('clientes.eliminados');