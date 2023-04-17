<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsertypeController;
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

Route::get('/type',[UsertypeController::class,'index'])->name('types_index');
Route::get('/create-type',[UsertypeController::class,'create'])->name('types_create');
Route::post('/save-type',[UsertypeController::class,'save'])->name('save_types');
Route::get('/edit-type/{id}',[UsertypeController::class,'edit'])->name('edit_types');
Route::get('/delete-type/{id}',[UsertypeController::class,'delete'])->name('delete_types');
Route::post('/update-type',[UsertypeController::class,'update'])->name('update_types');