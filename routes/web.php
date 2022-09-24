<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PagesController::class,'index']);
Route::get('/About', [PagesController::class,'About']);
Route::get('/Students', [StudentsController::class,'index']);
// Route::delete('/Students/delete', [StudentsController::class,'delete']);
// Route::post('/Students/store', [StudentsController::class,'store']);


