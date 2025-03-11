<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

Auth::routes(['reset' => false, 'verify' => false, 'confirm' => false]);

Route::any('/', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('admin');
Route::any('/admin/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('admin.login');
Route::any('/check/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::any('/admin/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('admin.logout');


Route::middleware(['admin'])->prefix('admin')->group(function () {
    Route::get('/home', [DashboardController::class, 'index'])->name('admin.home');

    // staff
    Route::get('/users', [App\Http\Controllers\Admin\UsersController::class, 'index'])->name('admin.users');
    Route::post('/userslist', [App\Http\Controllers\Admin\UsersController::class, 'userslist'])->name('admin.userslist');
    Route::post('/users/save', [App\Http\Controllers\Admin\UsersController::class, 'save'])->name('save.users');
    Route::get('/users/edit', [App\Http\Controllers\Admin\UsersController::class, 'edit'])->name('edit.users');
    Route::post('/users/delete', [App\Http\Controllers\Admin\UsersController::class, 'delete'])->name('delete.users');

    // staff
    Route::get('/course', [App\Http\Controllers\Admin\CourseController::class, 'index'])->name('admin.course');
    Route::post('/courselist', [App\Http\Controllers\Admin\CourseController::class, 'courselist'])->name('admin.courselist');
    Route::post('/course/save', [App\Http\Controllers\Admin\CourseController::class, 'save'])->name('save.course');
    Route::get('/course/edit', [App\Http\Controllers\Admin\CourseController::class, 'edit'])->name('edit.course');
    Route::post('/course/delete', [App\Http\Controllers\Admin\CourseController::class, 'delete'])->name('delete.course');
});
