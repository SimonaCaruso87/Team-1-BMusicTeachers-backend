<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\RatingController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\SubjectController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\SponsorizationController;

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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')
    ->name('admin.')
    ->prefix('admin')
    ->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::resource('/messages', MessageController::class);
    Route::resource('/ratings', RatingController::class);
    Route::resource('/reviews', ReviewController::class);
    Route::resource('/sponsorizations', SponsorizationController::class);
    Route::resource('/subjects', SubjectController::class);
    Route::resource('/teachers', TeacherController::class);
});

require __DIR__.'/auth.php';
