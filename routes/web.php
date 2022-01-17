<?php

use App\Http\Controllers\Admin\LecturerController;
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

Route::get('lecturer/create', [LecturerController::class, 'create']);
Route::post('lecturer/Store', [LecturerController::class, 'store'])->name("store-lecturer");