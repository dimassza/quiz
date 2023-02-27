<?php

use App\Http\Controllers\GuruController;
use App\Http\Controllers\MapelController;
use Illuminate\Support\Facades\Route;

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

Route::get('/crudguru', [GuruController::class, 'index']);

Route::get('/crudguru/gurutambah', [GuruController::class, 'tambah']);

Route::post('/crudguru/proses', [GuruController::class], 'proses');

Route::get('/', function(){
    return view('home');
});
?>