<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientesController;
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
})->name('login');

Route::controller(HomeController::class)->group(function(){
    Route::get('/home', 'index')->name('index');
    Route::get('/home/registro', 'CreateUser')->name('CreateUser');
    Route::post('/home/registrar','registrar')->name('registrar');
});

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





