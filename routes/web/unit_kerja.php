<?php

use App\Http\Controllers\Web\Reference\UnitKerjaController;
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

Route::name('unit_kerja.')->prefix('unit-kerja')->group(function () {
    Route::get('/', [UnitKerjaController::class, 'index'])->name('index');
    Route::get('datatables', [UnitKerjaController::class, 'datatables'])->name('datatables');
    Route::get('create', [UnitKerjaController::class, 'create'])->name('create');
    Route::post('store', [UnitKerjaController::class, 'store'])->name('store');
    Route::get('{id}', [UnitKerjaController::class, 'show'])->name('show');
    Route::delete('{id}', [UnitKerjaController::class, 'delete'])->name('delete');

    Route::get('edit/{id}', [UnitKerjaController::class, 'edit'])->name('edit');
    Route::post('update/{id}', [UnitKerjaController::class, 'update'])->name('update');
});
