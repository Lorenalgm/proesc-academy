<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursosFasesController;
use App\Http\Controllers\CursosFasesAulasController;
use App\Http\Controllers\CursosController;
<<<<<<< HEAD
use App\Http\Controllers\SetoresController;

=======
use App\Http\Controllers\CursosFasesAulasController;
>>>>>>> d68306574caf1032e2fcb6765449f955abc816cb
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */

Route::prefix('v1')->group(function () {
    Route::apiResource('cursos_fases', CursosFasesController::class);
<<<<<<< HEAD
    Route::get('/setores', [SetoresController::class, 'index']);
=======
    Route::get('/setores', 'SetoresController@index');
>>>>>>> d68306574caf1032e2fcb6765449f955abc816cb
    Route::apiResource('cursos', CursosController::class);
    Route::apiResource('cursos_fases_aulas', CursosFasesAulasController::class);
});
