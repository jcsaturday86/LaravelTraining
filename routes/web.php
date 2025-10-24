<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

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

    Route::get('/students', [StudentController::class, 'index'])->name('students');
    Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');  

    Route::get('/test-mail', function () {
        Mail::to('your-email@example.com')->send(new TestMail());
        return '✅ Test email sent successfully!';
    });
});

require __DIR__.'/auth.php';
