<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
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

Route::get('/', [StudentController::class,'insert_form']);
Route::post('/', [StudentController::class,'insert']);
Route::get('/', [StudentController::class,'list']);
Route::get('edit/{id}', [StudentController::class,'edit']);
Route::post('update/{id}', [StudentController::class,'update']);
Route::get('delete/{id}', [StudentController::class,'delete']);
