<?php

use App\Http\Controllers\Web\Reference\JabatanController;
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

Route::name('jabatan.')->prefix('jabatan')->group(function () {
    Route::get('/', [JabatanController::class, 'index'])->name('index');
    Route::get('datatables', [JabatanController::class, 'datatables'])->name('datatables');
    Route::get('create', [JabatanController::class, 'create'])->name('create');
    Route::post('store', [JabatanController::class, 'store'])->name('store');
    Route::get('{id}', [JabatanController::class, 'show'])->name('show');
    Route::delete('{id}', [JabatanController::class, 'delete'])->name('delete');

    Route::get('edit/{id}', [JabatanController::class, 'edit'])->name('edit');
    Route::post('update/{id}', [JabatanController::class, 'update'])->name('update');
});
