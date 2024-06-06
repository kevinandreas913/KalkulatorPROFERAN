<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\kalkulator;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get("/", [kalkulator::class, 'home']);
Route::get("/kalkulator", [kalkulator::class, 'kalkulator1']);
Route::get("/kalkulator2", [kalkulator::class, 'kalkulator2']);
Route::get("/coba", [kalkulator::class, 'coba']);
Route::get("/coba1", [kalkulator::class, 'coba1']);