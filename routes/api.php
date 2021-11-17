<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\clienteController;

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

Route::get('cliente',[clienteController::class,'index']);
Route::post('cliente',[clienteController::class,'store']);
Route::put('cliente/{cliente}',[clienteController::class,'update']);
Route::get('cliente/{cliente}',[clienteController::class,'show']);
Route::delete('cliente/{cliente}',[clienteController::class,'destroy']);