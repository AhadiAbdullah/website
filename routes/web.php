<?php

use Illuminate\Support\Facades\Route;



// website
Route::get('/', [App\Http\Controllers\website\HomeController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\website\AboutController::class, 'index'])->name('about');
Route::get('/projects', [App\Http\Controllers\website\CauseController::class, 'index'])->name('cause');
Route::get('/project/{id}', [App\Http\Controllers\website\CauseController::class, 'singleCause'])->name('project');

Route::get('/events-list', [App\Http\Controllers\website\EventController::class, 'index'])->name('events');
Route::get('/past-events-list', [App\Http\Controllers\website\EventController::class, 'pastEvents'])->name('pastevents');
Route::get('/singlevent/{id}', [App\Http\Controllers\website\EventController::class, 'singleEvent'])->name('singlevent');

Route::get('/staff-list', [App\Http\Controllers\website\StaffController::class, 'index'])->name('staff');
Route::get('/staff/{id}', [App\Http\Controllers\website\StaffController::class, 'singleStaff'])->name('singlestaff');

Route::get('/contact', [App\Http\Controllers\website\ContactController::class, 'index'])->name('contact');
// Send Email
Route::post('/contact-form', [App\Http\Controllers\website\ContactController::class, 'storeForm'])->name('contact.save');



// Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

// Authentication
Route::get('/register',[App\Http\Controllers\Auth\RegisterController::class,'index'])->name('register');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class,'store']);
Route::get('/register-user', [App\Http\Controllers\Auth\RegisterController::class,'create'])->name('user.register');
Route::get('/register/{id}', [App\Http\Controllers\Auth\RegisterController::class,'edit'])->name('user.edit');
Route::get('/delete-user/{id}', [App\Http\Controllers\Auth\RegisterController::class,'destroy'])->name('user.delete');
Route::post('/update-user/{id}', [App\Http\Controllers\Auth\RegisterController::class,'update'])->name('user.update');

Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'index'])->name('login');
Route::get('/user-login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('user-login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'store'])->name('login.store');
Route::get('/logout', [App\Http\Controllers\Auth\LogoutController::class, 'index'])->name('logout');

// admin panel
Route::get('/news', [App\Http\Controllers\NewsController::class, 'index'])->name('news.index');
Route::get('/create-news', [App\Http\Controllers\NewsController::class, 'create'])->name('news.create');
Route::post('/store-news', [App\Http\Controllers\NewsController::class, 'store'])->name('news.store');
Route::post('/update-news/{id}', [App\Http\Controllers\NewsController::class, 'update'])->name('news.update');
Route::get('/edit-news/{id}', [App\Http\Controllers\NewsController::class, 'edit'])->name('news.edit');
Route::get('/delete-news/{id}', [App\Http\Controllers\NewsController::class, 'destroy'])->name('news.delete');

Route::get('/events', [App\Http\Controllers\EventController::class, 'index'])->name('event.index');
Route::get('/create-event', [App\Http\Controllers\EventController::class, 'create'])->name('event.create');
Route::post('/store-event', [App\Http\Controllers\EventController::class, 'store'])->name('event.store');
Route::post('/update-event/{id}', [App\Http\Controllers\EventController::class, 'update'])->name('event.update');
Route::get('/edit-event/{id}', [App\Http\Controllers\EventController::class, 'edit'])->name('event.edit');
Route::get('/delete-event/{id}', [App\Http\Controllers\EventController::class, 'destroy'])->name('event.delete');

Route::get('/sliders', [App\Http\Controllers\SliderController::class, 'index'])->name('slider.index');
Route::get('/create-slider', [App\Http\Controllers\SliderController::class, 'create'])->name('slider.create');
Route::post('/store-slider', [App\Http\Controllers\SliderController::class, 'store'])->name('slider.store');
Route::post('/update-slider/{id}', [App\Http\Controllers\SliderController::class, 'update'])->name('slider.update');
Route::get('/edit-slider/{id}', [App\Http\Controllers\SliderController::class, 'edit'])->name('slider.edit');
Route::get('/delete-slider/{id}', [App\Http\Controllers\SliderController::class, 'destroy'])->name('slider.delete');

Route::get('/staff', [App\Http\Controllers\StaffController::class, 'index'])->name('staff.index');
Route::get('/create-staff', [App\Http\Controllers\StaffController::class, 'create'])->name('staff.create');
Route::post('/store-staff', [App\Http\Controllers\StaffController::class, 'store'])->name('staff.store');
Route::post('/update-staff/{id}', [App\Http\Controllers\StaffController::class, 'update'])->name('staff.update');
Route::get('/edit-staff/{id}', [App\Http\Controllers\StaffController::class, 'edit'])->name('staff.edit');
Route::get('/delete-staff/{id}', [App\Http\Controllers\StaffController::class, 'destroy'])->name('staff.delete');

Route::get('/message', [App\Http\Controllers\MessageController::class, 'index'])->name('message.index');
Route::get('/create-message', [App\Http\Controllers\MessageController::class, 'create'])->name('message.create');
Route::post('/store-message', [App\Http\Controllers\MessageController::class, 'store'])->name('message.store');
Route::post('/update-message/{id}', [App\Http\Controllers\MessageController::class, 'update'])->name('message.update');
Route::get('/edit-message/{id}', [App\Http\Controllers\MessageController::class, 'edit'])->name('message.edit');
Route::get('/delete-message/{id}', [App\Http\Controllers\MessageController::class, 'destroy'])->name('message.delete');

// PAYMENT
Route::post('/payment', [App\Http\Controllers\PaymentController::class, 'paymentPost'])->name('payment.post');
