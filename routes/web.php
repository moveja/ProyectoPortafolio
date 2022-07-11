<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
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
/*
Route::get('/', function () {
    return view('auth.login');
});
Route::get('/empleado', function () {
    return view('empleado.index');
});

Route::get('/empleado/create', [EmpleadoController::class,'create']);
*/

/*
Route::get('/home', [EmpleadoController::class, 'index'])->name('home');
Route::group(['middleware' => 'auth'], function (){
    Route::get('/', [EmpleadoController::class, 'index'])->name('home');
});
*/
Route::get('/', [App\Http\Controllers\PortafolioController::class, 'index']);
Auth::routes();

Route::resource('empleado', EmpleadoController::class)->middleware('auth');
Auth::routes(['reset'=>false]);

Route::resource('/productos',App\Http\Controllers\ProductoController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

