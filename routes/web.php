<?php

use App\Models\AcademicSession;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\AcademicYearController;
use App\Http\Controllers\Admin\AcademicSessionController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/admin/dashboard', function(){
    return view('backEnd.pages.dashboard');
})->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::resource('admin/academic-session', AcademicSessionController::class);
    Route::resource('admin/course', CourseController::class);
    Route::resource('admin/academic-year', AcademicYearController::class);
});