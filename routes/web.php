<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\WorkerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GuestController;
use App\Models\HomeTopic;
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
    $data = HomeTopic::all();
    return view('welcome',compact('data'));
});

Route::get('/dashboard', function () {
    return view('userPart.user_Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/hostel/information', [GuestController::class, 'HostelInformation'])->name('hostel.information');
Route::get('/hostel/home', [GuestController::class, 'HostelHome'])->name('hostel.home');
Route::get('/photo/gallary', [GuestController::class, 'PhotoGallary'])->name('photo.gallary');
Route::get('/hostel/contact', [GuestController::class, 'HostelContact'])->name('hostel.contact');
Route::get('/visitor/message/contact', [GuestController::class, 'VisitorMessageContact'])->name('visitor.message.contact');
Route::post('/visitor/message/contact/store', [GuestController::class, 'VisitorMessageContactStore'])->name('visitor.message.contact.store');

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
    Route::get('/all/user/information', [AdminController::class, 'AllUserInformation'])->name('all.user.information');
    Route::get('/admin/user/information/edit/{id}', [AdminController::class, 'EditUser'])->name('user.information.edit');
    Route::get('/admin/user/delete/{id}', [AdminController::class, 'DeleteUser'])->name('user.delete');
    Route::post('/admin/user/information/update', [AdminController::class, 'UpdateUser'])->name('admin.update.user');
    Route::get('/all/worker/information', [AdminController::class, 'WorkerInformation'])->name('all.worker.information');
    Route::get('/admin/worker/information/edit/{id}', [AdminController::class, 'EditWorker'])->name('worker.information.edit');
    Route::get('/admin/worker/delete/{id}', [AdminController::class, 'DeleteWorker'])->name('worker.delete');
    Route::get('/admin/add/new/user', [AdminController::class, 'AddNewUser'])->name('add.new.user');
    Route::post('/admin/add/new/user/store', [AdminController::class, 'NewUserStore'])->name('admin.add.new.user.store');
    Route::get('/admin/add/new/worker', [AdminController::class, 'AddNewWorker'])->name('add.new.worker');
    Route::post('/admin/add/new/worker/store', [AdminController::class, 'NewStoreWorker'])->name('admin.add.new.worker');
    Route::get('/admin/all/message', [AdminController::class, 'AllIncomingMessage'])->name('all.incomeing.messages');
    Route::get('/admin/message/delete/{id}', [AdminController::class, 'DeleteMessage'])->name('message.delete');
    Route::get('/admin/notice/delete/{id}', [AdminController::class, 'DeleteNotice'])->name('delete.notice');
    Route::get('/admin/notice/home', [AdminController::class, 'AdminNoticeHome'])->name('admin.notice.board');
    Route::get('/admin/add/notice', [AdminController::class, 'AdminAddNotice'])->name('add.new.notice');
    Route::post('/admin/add/new/notice/store', [AdminController::class, 'NewNoticeStore'])->name('admin.notice.store');
    Route::get('/admin/other/service/option', [AdminController::class, 'AdminOtherServiceOption'])->name('admin.other.service.option');
    Route::get('/admin/other/option', [AdminController::class, 'AdminOtherOption'])->name('admin.other.option');
    Route::get('/admin/add/service', [AdminController::class, 'AdminAddService'])->name('add.new.service');
    Route::post('/admin/add/new/service/store', [AdminController::class, 'NewServiceStore'])->name('admin.add.new.service.store');
    Route::get('/admin/service/information/edit/{id}', [AdminController::class, 'EditService'])->name('service.information.edit');
    Route::post('/admin/service/information/update', [AdminController::class, 'UpdateService'])->name('admin.update.service');
    Route::get('/admin/service/delete/{id}', [AdminController::class, 'DeleteService'])->name('service.delete');
    Route::get('/admin/gallary/photo/edit/{id}', [AdminController::class, 'EditGPhoto'])->name('photo.edit.gallary');
    Route::get('/admin/photo/gallary/delete/{id}', [AdminController::class, 'DeleteGPhoto'])->name('photo.delete.gallary');
    Route::post('/admin/gallary/photo/update', [AdminController::class, 'UpdateGPhoto'])->name('admin.edit.gallary.photo');
    Route::post('/admin/add/new/photo/store', [AdminController::class, 'NewPhotoStore'])->name('admin.add.new.photo.store');
    Route::get('/admin/add/photo', [AdminController::class, 'AdminAddPhoto'])->name('add.new.photo');
    Route::get('/admin/other/photo/option', [AdminController::class, 'AdminOtherPhotoOption'])->name('admin.other.photo.option');
    Route::get('/admin/other/contact/option', [AdminController::class, 'AdminOtherContactOption'])->name('admin.other.contact.option');
    Route::get('/admin/add/contact', [AdminController::class, 'AdminAddContact'])->name('add.new.contact');
    Route::post('/admin/add/new/contact/store', [AdminController::class, 'NewContactStore'])->name('admin.add.new.contact.store');
    Route::get('/admin/other/home/option', [AdminController::class, 'AdminOtherHomeOption'])->name('admin.other.home.option');
    Route::get('/admin/other/home/option/new', [AdminController::class, 'AdminOtherHomeOptionNew'])->name('add.new.homeTopic');
    Route::post('/admin/other/home/option/new/store', [AdminController::class, 'AdminOtherHomeOptionNewStore'])->name('admin.add.new.home.store');
    Route::post('/admin/other/home/option/update', [AdminController::class, 'AdminOtherHomeOptionUpdate'])->name('admin.update.home.text');
    Route::get('/admin/other/home/option/edit/{id}', [AdminController::class, 'AdminOtherHomeOptionEdit'])->name('admin.home.text.edit');
    Route::get('/admin/other/home/option/delete/{id}', [AdminController::class, 'AdminOtherHomeOptionDelete'])->name('admin.home.text.delete');
    Route::get('/admin/user/payment/list', [AdminController::class, 'AdminUserPaymentList'])->name('admin.user.payment');
    Route::get('/admin/user/payment/details', [AdminController::class, 'AdminUserPaymentDetails'])->name('add.user.payment.details');
    Route::post('/admin/new/user/payment/record/store', [AdminController::class, 'AdminNewUserPaymentRecordStore'])->name('admin.add.new.user.Payment.store');
    Route::get('/admin/user/payment/record/edit/{id}', [AdminController::class, 'AdminUserPaymentRecordEdit'])->name('user.payment.record.edit');
    Route::get('/admin/user/payment/record/delete/{id}', [AdminController::class, 'AdminUserPaymentRecordDelete'])->name('user.payment.record.delete');
    Route::get('/admin/private/message/delete/{id}', [AdminController::class, 'DeletePrivateMessage'])->name('p.message.delete');
    Route::post('/admin/user/payment/record/update', [AdminController::class, 'AdminUserPaymentRecordUpdate'])->name('user.payment.record.update');
    Route::get('/admin/worker/payment/list', [AdminController::class, 'AdminWorkerPaymentList'])->name('admin.worker.pay');
    Route::get('/admin/personal/message/list', [AdminController::class, 'AdminPersonalMessageList'])->name('private.message');
    Route::get('/admin/worker/pay/details', [AdminController::class, 'AdminWorkerPayDetails'])->name('add.worker.pay.details');
    Route::post('/admin/new/worker/pay/record/store', [AdminController::class, 'AdminNewWorkerPayRecordStore'])->name('admin.add.new.worker.pay.store');
    Route::get('/admin/worker/pay/record/edit/{id}', [AdminController::class, 'AdminWorkerPaymentRecordEdit'])->name('worker.pay.record.edit');
    Route::get('/admin/worker/pay/record/delete/{id}', [AdminController::class, 'AdminWorkerPayRecordDelete'])->name('worker.pay.record.delete');
    Route::post('/admin/worker/pay/record/update', [AdminController::class, 'AdminWorkerPayRecordUpdate'])->name('worker.pay.record.update');
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
    Route::get('/user/hostel/contact', [UserController::class, 'UserHostelContact'])->name('user.hostel.contact');
    Route::get('/user/notes/list', [UserController::class, 'UserNotesList'])->name('user.notes.list');
    Route::get('/user/add/note', [UserController::class, 'UserAddNote'])->name('user.add.note');
    Route::post('/user/note/store', [UserController::class, 'NoteStore'])->name('user.note.store');
    Route::get('/user/note/view/{id}', [UserController::class, 'UserNoteView'])->name('user.note.view');
    Route::get('/user/note/edit/{id}', [UserController::class, 'UserNoteEdit'])->name('user.note.edit');
    Route::get('/user/note/delete/{id}', [UserController::class, 'UserNoteDelete'])->name('user.note.delete');
    Route::post('/user/note/update', [UserController::class, 'NoteUpdate'])->name('user.note.update');
    Route::get('/user/own/photo/gallary', [UserController::class, 'UserOwnPhotoGallary'])->name('user.own.photo.galary');
    Route::get('/user/add/photo/gallary', [UserController::class, 'UserAddPhotoGallary'])->name('user.photo.gallary.add');
    Route::post('/user/add/photo/gallary/store', [UserController::class, 'UserAddPhotoGallaryStore'])->name('user.photo.gallary.store');
    Route::get('/user/photo/gallary/{id}', [UserController::class, 'UserPhotoGallaryEdit'])->name('user.photo.gallary.edit');
    Route::get('/user/photo/gallary/delete/{id}', [UserController::class, 'UserPhotoGallaryDelete'])->name('user.photo.gallary.delete');
    Route::post('/user/photo/gallary/update', [UserController::class, 'UserPhotoGallaryUpdate'])->name('user.photo.gallary.update');
    Route::get('/user/task/list', [UserController::class, 'UserTaskList'])->name('user.task.list');
    Route::get('/user/add/task', [UserController::class, 'UserAddTask'])->name('user.task.add');
    Route::post('/user/add/task/store', [UserController::class, 'UserAddTaskStore'])->name('user.task.store');
    Route::get('/user/task/{id}', [UserController::class, 'UserTaskEdit'])->name('user.task.edit');
    Route::get('/user/task/delete/{id}', [UserController::class, 'UserTaskDelete'])->name('user.task.delete');
    Route::post('/user/task/update', [UserController::class, 'UserTaskUpdate'])->name('user.task.update');
    Route::get('/user/task/view/{id}', [UserController::class, 'UserTaskView'])->name('user.task.view');
    Route::get('/user/notice/home', [UserController::class, 'UserNoticeHome'])->name('user.notice.board');
    Route::get('/user/send/message/home', [UserController::class, 'UserSendMessageHome'])->name('user.send.message.home');
    Route::get('/user/send/message', [UserController::class, 'UserSendMessage'])->name('user.message.send');
    Route::post('/user/send/message/store', [UserController::class, 'UserSendMessageStore'])->name('user.message.send.store');
    Route::get('/user/delete/message/{id}', [UserController::class, 'UserDeleteMessage'])->name('user.message.delete');

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
    Route::get('/worker/information', [WorkerController::class, 'WorkerInformation'])->name('worker.information');
    Route::get('/worker/task/list', [WorkerController::class, 'WorkerTaskList'])->name('worker.task.list');
    Route::get('/worker/add/task', [WorkerController::class, 'WorkerAddTask'])->name('worker.task.add');
    Route::post('/worker/add/task/store', [WorkerController::class, 'WorkerAddTaskStore'])->name('worker.task.store');
    Route::get('/worker/task/{id}', [WorkerController::class, 'WorkerTaskEdit'])->name('worker.task.edit');
    Route::get('/worker/task/delete/{id}', [WorkerController::class, 'WorkerTaskDelete'])->name('worker.task.delete');
    Route::post('/worker/task/update', [WorkerController::class, 'WorkerTaskUpdate'])->name('worker.task.update');
    Route::get('/worker/task/view/{id}', [WorkerController::class, 'WorkerTaskView'])->name('worker.task.view');
    Route::get('/worker/notice/home', [WorkerController::class, 'WorkerNoticeHome'])->name('worker.notice.board');
    Route::get('/worker/own/photo/gallary', [WorkerController::class, 'WorkerOwnPhotoGallary'])->name('worker.own.photo.galary');
    Route::get('/worker/add/photo/gallary', [WorkerController::class, 'WorkerAddPhotoGallary'])->name('worker.photo.gallary.add');
    Route::post('/worker/add/photo/gallary/store', [WorkerController::class, 'WorkerAddPhotoGallaryStore'])->name('worker.photo.gallary.store');
    Route::get('/worker/photo/gallary/{id}', [WorkerController::class, 'WorkerPhotoGallaryEdit'])->name('worker.photo.gallary.edit');
    Route::get('/worker/photo/gallary/delete/{id}', [WorkerController::class, 'WorkerPhotoGallaryDelete'])->name('worker.photo.gallary.delete');
    Route::post('/worker/photo/gallary/update', [WorkerController::class, 'WorkerPhotoGallaryUpdate'])->name('worker.photo.gallary.update');

    Route::get('/worker/send/message/home', [WorkerController::class, 'WorkerSendMessageHome'])->name('worker.send.message.home');
    Route::get('/worker/send/message', [WorkerController::class, 'WorkerSendMessage'])->name('worker.message.send');
    Route::post('/worker/send/message/store', [WorkerController::class, 'WorkerSendMessageStore'])->name('worker.message.send.store');
    Route::get('/worker/delete/message/{id}', [WorkerController::class, 'WorkerDeleteMessage'])->name('worker.message.delete');
});

