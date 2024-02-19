<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\StudioController;

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

//admin routes---------------------------------------------------

// Route::get('/studioform',[StudioController::class,'create'])->name('studio.create');
// Route::post('/studioform',[StudioController::class,'store'])->name('studio.store');

// Route::get('/studioindex',[StudioController::class,'index'])->name('studio.index');
// Route::get('/studioedit',[StudioController::class,'edit'])->name('studio.edit');

// Route::post('/studioupdate',[StudioController::class,'update'])->name('studio.update');
// Route::post('/studiodelete',[StudioController::class,'destroy'])->name('studio.delete');
Route::resource('studio', StudioController::class);

