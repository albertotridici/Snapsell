<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PublicController::class, 'home'])->name('home');
Route::get('/category/{category}', [PublicController::class, 'categoryShow'])->name('category.show');
Route::get('/announcement/show/{announcement}', [AnnouncementController::class, 'show'])->name('announcement.show');
Route::get('/announcement/index', [AnnouncementController::class, 'index'])->name('announcement.index');





Route::middleware(['auth'])->group(function(){
    Route::get('/announcement/create', [AnnouncementController::class, 'create'])->name('announcement.create');
});
