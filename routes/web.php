<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PertandinganController;

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

Route::get('/', [PertandinganController::class, 'index']);
Route::post('/', [PertandinganController::class, 'create']);
Route::patch('/', [PertandinganController::class, 'update']);
