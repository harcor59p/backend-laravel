<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\PersonaController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::prefix('v1/personas')->group(function () {
//    Route::get('/',[PersonaController::class, 'get']);
// });

 Route::prefix('v1/personas')->group(function () {
    Route::get('/',[PersonaController::class, 'get']);
    Route::get('/{id}',[PersonaController::class, 'getById']);
    Route::put('/{id}',[PersonaController::class, 'update']);
    Route::delete('/{id}',[PersonaController::class, 'delete']);
    Route::post('/',[PersonaController::class, 'create']);
 });
