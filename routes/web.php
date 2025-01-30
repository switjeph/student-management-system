<?php
use App\Http\Controllers\studentcontroller;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [studentcontroller::class, 'index'])->name('index');
Route::get('/create', [studentcontroller::class, 'create'])->name('create');
Route::post('/', [studentcontroller::class, 'store'])->name('store');
Route::get('/{id}/edit', [studentcontroller::class, 'edit'])->name('edit');
Route::put('/{id}', [studentcontroller::class, 'update'])->name('update');
Route::delete('/{id}', [studentcontroller::class, 'destroy'])->name('destroy');
