<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Mail\MainMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\ChatController;

Route::get('/send-email', function () {
    $data = ['message' => 'Thank You, we will respond accordingly!'];
    Mail::to('recipient@example.com')->send(new MainMail($data));
    return 'Email sent successfully!';
});

Route::get('/', function () {
    return view('welcome');
});



Route::get('/chat', [ChatController::class, 'index']);
Route::post('/send', [ChatController::class, 'send']);
Route::get('/stream', [ChatController::class, 'stream']);

Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/demo', [HomeController::class, 'demo'])->name('demo');
Route::get('/signup', [HomeController::class, 'signup'])->name('signup');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/about', [HomeController::class, 'about'])->name('about');
