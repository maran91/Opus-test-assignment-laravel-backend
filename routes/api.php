<?php

use App\Http\Controllers\Api\AnagramController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\WordbaseController;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/words/import', [WordbaseController::class, 'import']);
    Route::get('/anagrams/{word}', [AnagramController::class, 'show']);
});

Route::post('/signup', [AuthController::class, 'signup']);
Route::post('/login', ['as' => 'login', AuthController::class, 'login']);
