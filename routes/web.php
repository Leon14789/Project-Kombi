<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\BudgetController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;




Route::get('/', [BannerController::class, 'index'])->name('home');


Route::get('/dashboard', [BudgetController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::post('/carrossel/banner/save', [BannerController::class, 'store'])->name('carrossel.save');

Route::post('/question/save', [QuestionController::class, 'store'])->name('question.save');

Route::post('/Budget/save', [BudgetController::class, 'store'])->name('budget.save');


require __DIR__.'/auth.php';
