<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubsidiBbmController;

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


Route::get('/', [SubsidiBbmController::class, 'index'])->name('subsidiBbm.index');
Route::get('/export', [SubsidiBbmController::class, 'export'])->name('subsidiBbm.export');
Route::post('/import', [SubsidiBbmController::class, 'import'])->name('subsidiBbm.import');
