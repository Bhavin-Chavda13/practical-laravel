<?php

use App\Http\Controllers\Auth\CustomerRegisterController;
use App\Http\Controllers\Auth\AdminRegisterController;
use App\Http\Controllers\Auth\AdminLoginController;

Route::get('/', function () {
    return view('auth.admin-login');
});

Route::get('/customer/register', [CustomerRegisterController::class, 'showRegistrationForm'])->name('customer.register');
Route::post('/customer/register', [CustomerRegisterController::class, 'register']);

Route::get('/admin/register', [AdminRegisterController::class, 'showRegistrationForm'])->name('admin.register');
Route::post('/admin/register', [AdminRegisterController::class, 'register']);

Route::get('/admin/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminLoginController::class, 'login']);

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

Route::get('/admin/dashboard', function () {
    return view('admin-dashboard');
})->name('admin.dashboard');

