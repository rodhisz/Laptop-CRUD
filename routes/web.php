<?php

use App\Http\Controllers\LaptopController;
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


Route::get('/', [LaptopController::class, 'index']);

//Create
Route::get('/add', [LaptopController::class, 'create']); //ini view
Route::post('/add-laptop', [LaptopController::class, 'store']); //ini proses

//Read
//project ini tidak memakai halaman detail

//Update
Route::get('/edit/{id}', [LaptopController::class, 'edit']); //ini view
Route::put('/edit-laptop/{id}', [LaptopController::class, 'update']); //ini proses

//Delete
Route::delete('/delete-laptop/{id}', [LaptopController::class, 'destroy']); //ini proses
