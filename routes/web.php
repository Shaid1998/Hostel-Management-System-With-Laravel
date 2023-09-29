<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\WorkerController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('userPart.user_Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



/// Admin Dashboard

Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');

Route::middleware(['auth','role:admin'])->group(function() {
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashobard');
    Route::get('/admin/logout', [AdminController::class, 'AdminDestroy'])->name('admin.logout');
    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
    Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');
    Route::get('/admin/change/password', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password');
    Route::post('/admin/update/password', [AdminController::class, 'AdminUpdatePassword'])->name('update.password');
    Route::get('/all/user/information', [AdminController::class, 'UserInformation'])->name('all.user.information');
    Route::get('/admin/user/information/edit/{id}', [AdminController::class, 'EditUser'])->name('user.information.edit');
    Route::post('/admin/user/information/update', [AdminController::class, 'UpdateUser'])->name('admin.update.user');

});


/// Worker Dashboard

Route::get('/user/login', [UserController::class, 'UserLogin'])->name('user.login');

Route::middleware(['auth','role:user'])->group(function() {
    Route::get('/user/dashboard', [UserController::class, 'UserDashboard'])->name('user.dashobard');
    Route::get('/user/logout', [UserController::class, 'UserDestroy'])->name('user.logout');
    Route::get('/user/profile', [UserController::class, 'UserProfile'])->name('user.profile');
    Route::post('/user/profile/store', [UserController::class, 'UserProfileStore'])->name('user.profile.store');
    Route::get('/user/change/password', [UserController::class, 'UserChangePassword'])->name('user.change.password');
    Route::post('/user/update/password', [UserController::class, 'UserUpdatePassword'])->name('user.update.password');
    Route::get('/user/information', [UserController::class, 'UserInformation'])->name('user.information');

});




/// User Dashboard

Route::get('/worker/login', [WorkerController::class, 'WorkerLogin'])->name('worker.login');

Route::middleware(['auth','role:worker'])->group(function() {
    Route::get('/worker/dashboard', [WorkerController::class, 'WorkerDashboard'])->name('worker.dashobard');
    Route::get('/worker/logout', [WorkerController::class, 'WorkerDestroy'])->name('worker.logout');
    Route::get('/worker/profile', [WorkerController::class, 'WorkerProfile'])->name('worker.profile');
    Route::post('/worker/profile/store', [WorkerController::class, 'WorkerProfileStore'])->name('worker.profile.store');
    Route::get('/worker/change/password', [WorkerController::class, 'WorkerChangePassword'])->name('worker.change.password');
    Route::post('/worker/update/password', [WorkerController::class, 'WorkerUpdatePassword'])->name('worker.update.password');
    Route::get('/important/contact', [WorkerController::class, 'ImportantContact'])->name('important.contact');

});

