<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CursoController;
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
    return view('home');
})->name('welcome');
 
 
 
Route::get('cursos', function () {
    $personal=array(
        array('id'=>0,'nombre'=>'Marisol','edad'=>'23'),
        array('id'=>1,'nombre'=>'Saul','edad'=>'4'),
    );
    //$recetas=['Recetas Pizza', 'Recetas Hamburguesa','Recetas Tacos'];
    return view('cursos.index', compact('personal'));
})->name('cursos.index');
 
/*Route::post('cursos', function (Request $request) {
    return "Nombre:".$request->nombre." Edad:".$request->edad." ";
  })->name('cursos.store');*/

  Route::post('cursos',[CursoController::class, 'store'] )->name('cursos.store');



Route::get('cursos/create', function () {
    return view('cursos.create');
})->name('cursos.create');
 
Route::post('cursosfetch', function (Request $request) {
    $nombre = $request->input('nombre');
    $edad = $request->input('edad');
    $message = "Nombre:".$nombre." Edad:".$edad." ";
    echo json_encode($message);
 })->name('cursos.storefetch');
