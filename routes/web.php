<?php

use App\Http\Controllers\Admin\TaskController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Employee\TaskController as EmployeeTaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// authentication
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register-submit', [AuthController::class, 'register_submit'])->name('register_submit');
Route::post('/login-submit', [AuthController::class, 'login_submit'])->name('login_submit');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// manager routes
Route::middleware('auth', 'manager')->group(function () {
    Route::get('/admin/dashboard', [AuthController::class, 'admin_dashboard'])->name('admin_dashboard');
    Route::resource('/task',TaskController::class);

    Route::get('/pending',[TaskController::class,'task_pending'])->name('task_pending');
    Route::get('/sent',[TaskController::class, 'task_sent'])->name('task_sent');
    Route::get('/inprogress',[TaskController::class, 'task_inprogress'])->name('task_inprogress');
    Route::get('/finish',[TaskController::class, 'task_finish'])->name('task_finish');
});

// employee
Route::middleware('auth', 'employee')->group(function () {
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
    Route::get('/sent-task',[EmployeeTaskController::class,'sent_task'])->name('sent_task');
    Route::get('/inprogress-task',[EmployeeTaskController::class,'inprogress_task'])->name('inprogress_task');
    Route::get('/finish-task',[EmployeeTaskController::class,'finish_task'])->name('finish_task');
    Route::get('/edit-status/{id}',[EmployeeTaskController::class,'edit_status'])->name('edit_status');
    Route::post('/status-update/{id}',[EmployeeTaskController::class,'status_update'])->name('status.update');
});
