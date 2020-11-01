<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\HomeController;


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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [ServicesController::class, 'index']);



Route::get('Sluzba/{id}', [ServicesController::class, 'show']);

Route::get('/Kontakt', [FormController::class, 'index']);

Route::post('/Kontakt/result', [FormController::class, 'store']);

Route::get('/odeslani', [MessageController::class, 'index']);

// Auth::routes();
Route::Auth();

Route::get('/Administrace', [HomeController::class, 'index']);
