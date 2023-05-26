<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

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


 

 

Route::resource('clientes', ClienteController::class);