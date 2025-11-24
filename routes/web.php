<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;

//Rotas Públicas 

Route::get('/', function () {
    return view('home');
})->name('home');

Route::resource('categories', CategoryController::class);

Route::get('/sobre', function () {
    return view('sobre');
})->name('sobre');

Route::get('/aplicacao', function () {
    return view('aplicacao');
})->name('aplicacao');

Route::get('/equipe', function () {
    return view('equipe');
})->name('equipe');

Route::get('/contato', function () {
    return view('contato');
})->name('contato');

Route::post('/contato/enviar', [ContactController::class, 'store'])->name('contato.store');
Route::get('/contato/categorias', [ContactController::class, 'porCategoria'])->name('contato.categorias');
Route::get('/contato/categorias/{categoria}', [ContactController::class, 'verCategoria'])->name('contato.ver');

//Rotas Protegidas — Somente usuários logados (ADM)

Route::middleware(['auth'])->group(function () {

    // Página com o resultado dos formulários – SOMENTE ADM LOGADO
    Route::get('/resultado-formulario', function () {
        return view('resultado');
    })->name('resultado.formulario');

    // Rotas padrões do Breeze
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['verified'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Rotas do Breeze (login, register, etc)
require __DIR__.'/auth.php';
