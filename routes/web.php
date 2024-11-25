<?php

use App\Http\Controllers\Auth\LoginController;
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
    return view('welcome');
});

Route::controller(HomeController::class)->group(function(){
    Route::get('/home', 'index');
    Route::get('/home/UserCreation','CreateUser');
});

Route::controller(ClientesController::class)->group(function(){
    Route::get('/Clientes','index');
});

auth::routes();
/*Route::get('/home', function () {
    return view('home');
});*/


/*Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/

/*Auth::routes();*/



