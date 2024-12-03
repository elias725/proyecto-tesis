<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientesController;
use Illuminate\Support\Facades\Auth;


/*Ruta base para el inicio de la pagina*/ 
Route::get('/', function () {
    return view('auth.login');
})->name('login');

/*Rutas para el lado del administrador */
Route::controller(HomeController::class)->group(function(){
    Route::get('/home', 'index')->name('index');
    Route::get('/home/registro', 'CreateUser')->name('CreateUser');
    Route::post('/home/registrar','registrar')->name('registrar');
    Route::get('/home/vista-usuarios','vistaUser')->name('vista');
});

/**Rutas para el lado del contador */

Route::controller(ClientesController::class)->group(function(){
    Route::get('/Clientes','index')->name('IndexContador');
    Route::get('/Clientes/view','view')->name('view');
});

auth::routes();

/*pruebas*/
Route::get('/home/prueba', function () {
    return view('prueba');
});



Route::view('/nosotros','nosotros')->name('nosotros');





