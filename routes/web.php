<?php

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\TestSimpleController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\TestSuiteIterator;

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
Route::get('/testing',[TestSimpleController::class, 'testsimple']);

Route::get('/', function () {
    return view('welcome');
});
Route::get('/pruebnew', [TestController::class], 'indexa');

Route::get('hola', function () {
    return "hola";
});
//manda un post en la variable $id a la vista hola
Route::get('/redirigir/{numerox}', function ($id) {
    return view('hola', ['id' => $id]);
});//averiguar luego inyeccion de dependencias

//*********************************************** */
Route::get('/nuevo',[ProductoController::class,'nuevo']);

Route::redirect('/n','/nuevo');


Route::get('/all', [ProductoController::class,'todos'] );

Route::get('/1', [ProductoController::class,'primero'] );

Route::get('/where', [ProductoController::class,'where'] );

Route::get('/actualizar', [ProductoController::class,'update'] );

Route::get('/borrar', [ProductoController::class,'del'] );

//Route::get('/redirigir/{1}', [ProductoController::class,'del'] );

//***********************************

//Route::get('/prueba1', 'app\Http\Controllers\PruebaController@test');
//Route::get('/p', [PruebaController::class, 'hola']);


Route::get('/testsimple',[TestController::class, 'test']);


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
