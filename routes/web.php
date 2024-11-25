<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserCreateController;
use Illuminate\Support\Facades\Auth;
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

/*Route::get('/', LoginController::class );*/

/*Route::get('CreateUser', UserCreateController::class );

Route::get('Clientes', ClientesController::class );*/




Route::get('/', function () {
    return view('auth.login');
});

Route::controller(HomeController::class)->group(function(){
    Route::get('/home', 'index')->name('index');
    Route::post('/home/UserCreation','registrar')->name('CreateUser');
});

Route::controller(ClientesController::class)->group(function(){
    Route::get('/Clientes','index')->name('index');
    Route::get('/Clientes/view','view')->name('view');
});

auth::routes();

/*pruebas*/
Route::get('/home/prueba', function () {
    return view('prueba');
});



Route::view('/nosotros','nosotros')->name('nosotros');





