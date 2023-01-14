<?php

use App\Http\Controllers\KaryawanController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/karyawan', [KaryawanController::class, 'index']); // mengarahkan ke halaman index
Route::get('/karyawan/create', [KaryawanController::class, 'create']);  // url untuk menginitialize row baru
Route::post('/karyawan', [KaryawanController::class, 'store']); // url untuk store data
Route::delete('/karyawan/delete/{id}', [KaryawanController::class, 'destroy']); // url untuk delete row data
Route::get('/karyawan/edit/{id}', [KaryawanController::class, 'edit']);
Route::put('/karyawan/update/{id}', [KaryawanController::class, 'update']);
Auth::routes();

Route::get('/home', [KaryawanController::class, 'index'])->name('home'); // url untuk redirect ke index
