<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BenuaController;
use App\Http\Controllers\Api\DirjenController;
use App\Http\Controllers\Api\KawasanController;
use App\Http\Controllers\Api\KawasanSatkerController;
use App\Models\KawasanSatker;
use App\Http\Controllers\Api\NegaraController;

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

Route::middleware('api')->group(function () {
    Route::get('/benua', [BenuaController::class, 'index']);
    Route::get('/dirjen', [DirjenController::class, 'index']);
    Route::get('/kawasan', [KawasanController::class, 'index']);
    Route::get('/kawasansatker', [KawasanSatkerController::class, 'index']);
    Route::get('/negara', [NegaraController::class, 'index']);
});
