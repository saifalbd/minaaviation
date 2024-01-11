<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\ProfileController;
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






Route::controller(Controller::class)->group(function(){
    Route::get('/','landing')->name('home'); 
Route::get('/contact-us','contact')->name('contact'); 
Route::get('/about-us','about')->name('about');
Route::get('/package-show/{package}','showPack')->name('package.show');
});


Route::middleware(['auth', 'verified'])->group(function(){

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('/admin/packages', PackageController::class)->names('admin.package');


});





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
