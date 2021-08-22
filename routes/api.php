<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AnnotationController;



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

Route::get('/annotations', [AnnotationController::class, 'index']);
Route::post('/annotations', [AnnotationController::class, 'store']);
Route::put('annotations/{id}', [AnnotationController::class, 'update']);
Route::delete('annotations/{id}', [AnnotationController::class, 'destroy']);
Route::get('/annotations/today', [AnnotationController::class, 'todayAnnotations']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
