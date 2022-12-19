<?php

use Illuminate\Support\Facades\Route;
use App\Facades\UserPermissions;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\FaceBookController;

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

<<<<<<< HEAD
//ROTA INICIAL, ONDE TEM O CALENDARIO 0
=======
//ROTA INICIAL, ONDE TEM O CALENDARIO
>>>>>>> 8901100d233846ba00e77aae3813f483f3fe4b3c
Route::get('/dashboard', function () {
    return view('templates.dashboard')->with('titulo', "");
})->middleware(['auth'])->name('dashboard');

<<<<<<< HEAD
//ROTA INICIAL, ONDE TEM O CALENDARIO 1
Route::get('/calendario1', function () {
    return view('templates.calendario1')->with('titulo', "");
})->middleware(['auth'])->name('calendario1');

//ROTA INICIAL, ONDE TEM O CALENDARIO 2
Route::get('/calendario0', function () {
    return view('templates.calendario0')->with('titulo', "");
})->middleware(['auth'])->name('dashboard');

//ROTA INICIAL, ONDE TEM O CALENDARIO 3
Route::get('/calendario3', function () {
    return view('templates.calendario3')->with('titulo', "");
})->middleware(['auth'])->name('dashboard');



Route::get('/testfacade', function () {
    return UserPermissions::test();
});


=======


Route::get('/testfacade', function () {
    return UserPermissions::test();
});


>>>>>>> 8901100d233846ba00e77aae3813f483f3fe4b3c

//ROTAS BARBEARIA
Route::resource('/clientes', '\App\Http\Controllers\ClienteController')->middleware(['auth']);
Route::resource('/servicos', '\App\Http\Controllers\ServicosController')->middleware(['auth']);
Route::resource('/evento', '\App\Http\Controllers\EventoController')->middleware(['auth']);



// Google Login
Route::get('auth/google', [GoogleAuthController::class, 'redirect'])->name('google-auth');
Route::get('auth/google/call-back', [GoogleAuthController::class, 'callbackGoogle']);


// Facebook Login
Route::get('auth/facebook', [FaceBookController::class, 'redirect'])->name('facebook-auth');
Route::get('auth/facebook/call-back', [FaceBookController::class, 'callbackFacebook']);

//Rota calendario
Route::get('/evento', [\App\Http\Controllers\EventoController::class, 'index']);

Route::post('/event-store', '\App\Http\Controllers\EventoController@store')->name('routeEventStore');
Route::resource('/tarefas', '\App\Http\Controllers\TarefasController');

//Rota para carregar os eventos no calendario
Route::get('/load-events', '\App\Http\Controllers\EventoController@loadEvents')->name('routeLoadEvents');



Route::get('/testfacade', function () {
    return UserPermissions::test();
});

require __DIR__ . '/auth.php';
