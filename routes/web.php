<?php
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;
use APP\Http\Controllers\AboutController;


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
Route::get('/mahasiswa',[MahasiswaController::class,'index']);
Route::get('/mahasiswa/tambahData',[MahasiswaController::class,'tambahData']);
Route::post('/mahasiswa/simpan',[MahasiswaController::class,'simpan']);
Route::get('/mahasiswa/{id}/edit',[MahasiswaController::class,'edit']);
Route::put('/mahasiswa/{id}',[MahasiswaController::class,'update']);
Route::delete('/mahasiswa/{id}',[MahasiswaController::class,'delete']);