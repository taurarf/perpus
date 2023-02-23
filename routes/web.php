<?php

use App\Http\Controllers\tampilanController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [tampilanController::class, 'index'])->name('index');
Route::get('/buku', [tampilanController::class, 'buku'])->name('buku');
Route::get('/login', [tampilanController::class, 'login'])->name('login');
Route::get('/buku-tamu', [tampilanController::class, 'tamu'])->name('tamu');
Route::get('/kartini', [tampilanController::class, 'kartini'])->name('kartini');
