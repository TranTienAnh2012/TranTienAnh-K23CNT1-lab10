<?php
use App\Http\Controllers\ttaNhaccController;
use App\Http\Controllers\ttaVattucontroller;
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

Route::get('/', function () {
    return view('welcome');
});
   
Route::get('/ttalist', [ttaNhaccController::class, 'list'])->name('Nhacc.list');
   
Route::get('/ttavattulist', [ttaVattucontroller::class, 'list'])->name('vattu.list');
