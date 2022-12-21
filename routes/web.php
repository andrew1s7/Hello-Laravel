<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

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

Route::get('hola', function () {
    return "hola";
});

//*********************************************** */
Route::get('/nuevo',[ProductoController::class,'nuevo']);

Route::redirect('/n','/nuevo');


Route::get('/all', [ProductoController::class,'todos'] );

Route::get('/1', [ProductoController::class,'primero'] );

Route::get('/where', [ProductoController::class,'where'] );

Route::get('/actualizar', [ProductoController::class,'update'] );

Route::get('/borrar', [ProductoController::class,'del'] );

//Route::get('/redirigir/{1}', [ProductoController::class,'del'] );

//manda un post en la variable $id a la vista hola
Route::get('/redirigir/{numerox}', function ($id) {
    return view('hola', ['id' => $id]);
});//averiguar luego inyeccion de dependencias






//************************************************* */


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
