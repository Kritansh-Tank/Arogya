<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/hp', [App\Http\Controllers\HpController::class, 'index'])->name('hp');

Route::get('/tl', [App\Http\Controllers\TlController::class, 'index'])->name('tl');

Route::get('/au', [App\Http\Controllers\AuController::class, 'index'])->name('au');

Route::get('/af', [App\Http\Controllers\AfController::class, 'index'])->name('af');

Route::get('/qf', [App\Http\Controllers\QfController::class, 'index'])->name('qf');

Route::get('/registration', [App\Http\Controllers\RegistrationController::class, 'index'])->name('registration');

Route::get('/patient', [App\Http\Controllers\PatientController::class, 'index'])->name('patient');

Route::get('/doctor', [App\Http\Controllers\DoctorController::class, 'index'])->name('doctor');

Route::get('/laboratory', [App\Http\Controllers\LaboratoryController::class, 'index'])->name('laboratory');

Route::get('/patdash', [App\Http\Controllers\PatDashController::class, 'index'])->name('patdash');

Route::get('/patdash1', [App\Http\Controllers\PatDash1Controller::class, 'index'])->name('patdash1');

Route::get('/patdash2', [App\Http\Controllers\PatDash2Controller::class, 'index'])->name('patdash2');

Route::get('/patdash3', [App\Http\Controllers\PatDash3Controller::class, 'index'])->name('patdash3');

Route::get('/docdash', [App\Http\Controllers\DocDashController::class, 'index'])->name('docdash');
