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

 

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/clientes/index', [App\Http\Controllers\ClienteController::class, 'index'])->name('clientes.index');
 


// Route::get('/', function () {
//     return view('clientes.index');
// });

Route::get('/', function () {
    return redirect('/clientes');
});

// Route::get('/', function () {
//     return redirect('/empleados');
// });

 

 
// Route::post('/enviarcorreo', [App\Http\Controllers\EmailController::class, 'enviarcorreo'])->name('enviarcorreo');
Route::get('clientes/pdf', [App\Http\Controllers\ClienteController::class, 'pdf'])->name('clientes.pdf');
Route::resource('clientes', ClienteController::class);
Route::resource('empleados', EmpleadoController::class);
Route::resource('auditorias', AuditoriaController::class);
Route::resource('hallazgos', HallazgoController::class);
Route::resource('acciones', AccionController::class);
// Route::resource('acciones/{accione}', AccionController::class); 
// Route::get('acciones/{accione}', [AccionController::class, 'show'])->name('acciones.show');
// Route::put('acciones/{accione}', [AccionController::class, 'update'])->name('acciones.update');
// Route::patch('acciones/{accione}', [AccionController::class, 'update']);
// Route::resource('acciones', AccionController::class)->parameters([
//     'acciones' => 'accione' // Aquí usamos 'accione' como el nombre del parámetro en singular
// ]);
