<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\NinjaController;


Route::get('/', function () {
    return view('ninja');
});

Route::get('/slayer', [NinjaController::class, 'index'])->name("slayer.index")->middleware("auth");
Route::get('/slayer/create',[NinjaController::class, 'create'] )->name("slayer.create");
Route::get('/slayer/{id}',[NinjaController::class, 'show'])->name("slayer.show")->middleware("auth");
Route::post('/slayer',[NinjaController::class,'store']);
Route::get('/slayer/{id}/edit', [NinjaController::class,'edit'])->name("slayer.edit")->middleware("auth");
Route::put('/slayer/{id}', [NinjaController::class,'update'])->name("slayer.update");
Route::delete('/slayer/{id}',[NinjaController::class,'destroy'])->name("slayer.destroy")->middleware("auth");

Auth::routes([
    // 'register'=>false/*to disable registration */
]); 
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


