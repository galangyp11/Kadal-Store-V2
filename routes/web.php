<?php

use App\Http\Controllers\AplController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Livewire\ModalPesan;

//Route::get('/',[HomeController::class,'home']);
Route::get('/',[AplController::class,'index'])->name('home');
// Route::resource('/', AplController::class);
Route::get('/Top-Up/{id}', [AplController::class,'show'])->name('apl.viewapl');
// Route::get('/note/{id}', [NoteController::class,'show'])->name('note.show');
//Route::get('/Top-Up/{id}', ModalPesan::class);
