<?php

use App\Http\Controllers\CountryController;
use Illuminate\Http\Request;
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

Route::get('/country', [CountryController::class, 'index']);
Route::post('/country', [CountryController::class, 'store']);
Route::get('/country/{country}', [CountryController::class, 'show']);
Route::patch('/country/{country}', [CountryController::class, 'update']);
Route::delete('/country/{country}', [CountryController::class, 'destroy']);
