<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\FaqController;

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
    return view('mainpage');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



Route::get('/events', [EventController::class, 'index'])->name('events.index');
Route::get('/concerts', [EventController::class, 'showConcerts'])->name('events.concerts');
Route::get('/partner', [PartnerController::class, 'partner'])->name('partenaires.index');
Route::get('/faq', [FaqController::class, 'faq'])->name('faq.index');



Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/events/{id}/delete', [EventController::class, 'delete'])->name('events.delete');
    Route::delete('/events/{id}', [EventController::class, 'destroy'])->name('events.destroy');
    Route::get('/events/{id}/edit', [EventController::class, 'edit'])->name('events.edit');
    Route::put('/events/{id}', [EventController::class, 'update'])->name('events.update');
    Route::get('/events/create', [EventController::class, 'create'])->name('events.create');
    Route::post('/events', [EventController::class, 'store'])->name('events.store');
    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');


    Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('/categories/{id}/delete', [CategoryController::class, 'delete'])->name('categories.delete');
    Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');


    Route::get('/concerts/create', [EventController::class, 'createConcerts'])->name('events.concertsCreate');
    
    Route::get('/notifications/create', [EventController::class, 'createNotification'])->name('notifications.create');
    Route::post('/notifications', [EventController::class, 'storeNotification'])->name('notifications.store');
});

