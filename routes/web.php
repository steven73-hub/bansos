<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SeleksiController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\PenerimaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
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
Route::get('/', function () {
    return redirect('/login');
});
Route::post('login', [LoginController::class, 'authenticate'])->name('authenticate');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');



Route::get('/register', function () {
    return view('pages.register');
});

Route::get('/admin', [DashboardController::class, 'homeuser'])->name('homeuser');
Route::get('/user', [DashboardController::class, 'homeuser'])->name('homeuser');

Route::get('users', [UserController::class, 'index'])->name('users');
Route::get('editusers', [UserController::class, 'edit'])->name('editusers');


Route::get('kriteria', [KriteriaController::class, 'index'])->name('kriteria');
Route::post('createkriteria', [KriteriaController::class, 'create'])->name('createkriteria');
Route::get('/addkriteria', [KriteriaController::class, 'add'])->name('addkriteria');
Route::get('editkriteria', [KriteriaController::class, 'edit'])->name('editkriteria');




Route::get('penerima', [PenerimaController::class, 'index'])->name('penerima');
Route::get('tambahpenerima', [PenerimaController::class, 'add'])->name('tambahpenerima');
Route::get('editpenerima', [PenerimaController::class, 'edit'])->name('editpenerima');


Route::get('seleksi', [SeleksiController::class, 'index'])->name('seleksi');
Route::get('addseleksi', [SeleksiController::class, 'add'])->name('addseleksi');
Route::get('editseleksi', [SeleksiController::class, 'edit'])->name('editseleksi');

// Route::get('users', [UserController::class, 'index'])->name('users');



// Route::get('users', [UserController::class, 'index'])->name('users');


Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);


Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);