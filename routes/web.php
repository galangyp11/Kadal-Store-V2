<?php

use App\Http\Controllers\AplController;
use App\Models\Payments;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\HomeController;
use App\Livewire\ModalPesan;

//Route::get('/',[HomeController::class,'home']);
Route::get('/',[AplController::class,'index'])->name('home');
// Route::resource('/', AplController::class);
Route::get('/Top-Up/{id}', [AplController::class,'show'])->name('apl.viewapl');
//Route::post('/modal-pesan',[ModalPesan::class, 'render'])->name('livewire.modal-pesan');
//Route::get('/Top-Up/{id}', [PaymentsController::class,'show'])->name('apl.viewapl');
//Route::post('/Top-Up/{id}',[NoteController::class, 'store'])->name('note.store');
// Route::get('/note/{id}', [NoteController::class,'show'])->name('note.show');
//Route::get('/Top-Up/{id}', ModalPesan::class);
