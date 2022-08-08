<?php

use App\Http\Controllers\sachController;
use App\Http\Controllers\tacgiaController;
use App\Http\Controllers\theloaiController;
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
Route::prefix('sach')->group(function () {
    Route::get('/', [sachController::class, 'index'])->name('sach.index');
    Route::get('create', [sachController::class, 'create'])->name('sach.create');
    Route::post('store', [sachController::class, 'store'])->name('sach.store');
    Route::get('{id}/edit', [sachController::class, 'edit'])->name('sach.edit');
    Route::put('{id}/update', [sachController::class, 'update'])->name('sach.update');
    Route::delete('{id}/delete', [sachController::class, 'destroy'])->name('sach.delete');
});
Route::prefix('tacgia')->group(function () {
    Route::get('/', [tacgiaController::class, 'index'])->name('tacgia.index');
    Route::get('create', [tacgiaController::class, 'create'])->name('tacgia.create');
    Route::post('store', [tacgiaController::class, 'store'])->name('tacgia.store');
});
Route::prefix('theloai')->group(function () {
    Route::get('/', [theloaiController::class, 'index'])->name('theloai.index');
    Route::get('create', [theloaiController::class, 'create'])->name('theloai.create');
    Route::post('store', [theloaiController::class, 'store'])->name('theloai.store');
});
