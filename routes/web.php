<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FluentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PaginationController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UploadController;
use App\PaymentGateway\Payment;

/*Route::get('/{locale}', function ($locale) {
    App::setLocale($locale);
    return view('lang');
});*/

Route::get('/', [ProductController::class, 'index'])->name('product.name');
Route::get('/inicio/{name?}', [HomeController::class, 'index'])->name('start.inicio');
Route::get('/user', [UserController::class, 'index'])->name('start.user');
Route::get('/posts', [ClientController::class, 'getAllPost'])->name('start.posts');
Route::get('/posts/{id}', [ClientController::class, 'getAllPostId'])->name('start.postid');
Route::get('/post-add', [ClientController::class, 'addPost'])->name('add.post');
Route::get('/post-update', [ClientController::class, 'updatePost'])->name('update.post');
Route::get('/post-delete/{id}', [ClientController::class, 'deletePost'])->name('delete.post');
Route::get('/fluente-string', [FluentController::class, 'index'])->name('fluent.index');
Route::get('/login', [LoginController::class, 'index'])->name('login.index')->middleware('checkuser');
Route::post('/login', [LoginController::class, 'loginSubmit'])->name('login.submit');
Route::get('/session/get', [SessionController::class, 'getSessionData'])->name('session.get');
Route::get('/session/set', [SessionController::class, 'storeSessionData'])->name('session.store');
Route::get('/session/delete', [SessionController::class, 'deleteSessionData'])->name('session.delete');
Route::get('/posts', [PostController::class, 'getAllPost'])->name('post.getallpost');
Route::get('/posts-add', [PostController::class, 'addPost'])->name('post.addpost');
Route::post('/post-submit', [PostController::class, 'addPostSubmit'])->name('post.addsubmit');
Route::get('/post-id/{id}', [PostController::class, 'getPostById'])->name('post.getbyid');
Route::get('/post-delete/{id}', [PostController::class, 'deletePost'])->name('post.delete');
Route::get('/post-edit/{id}', [PostController::class, 'editPost'])->name('post.edit');
Route::post('/post-update', [PostController::class, 'updatePost'])->name('post.update');
Route::get('/inner-join', [PostController::class, 'innerJoinCaluse'])->name('post.innerjoin');
Route::get('/left-join', [PostController::class, 'leftJoinCaluse'])->name('post.leftjoin');
Route::get('/right-join', [PostController::class, 'rightJoinCaluse'])->name('post.rightjoin');
Route::get('/posts-all', [PostController::class, 'getAllPostUsingModel'])->name('post.all');
Route::get('/users-page', [PaginationController::class, 'allUsers'])->name('users.all');
Route::get('/upload', [UploadController::class, 'uploadForm']);
Route::post('/upload', [UploadController::class, 'uploadFile'])->name('upload.file');

Route::get('/test', function () {
    return view('test');
});

Route::get('/home', function () {
    return view('site.index');
});

Route::get('/contact', function () {
    return view('site.contact');
});

Route::get('/about', function () {
    return view('site.about');
});

Route::get('/payment', function () {
    return Payment::process();
});

//Route::get('/send_email', [MailController::class, 'sendEmail']);

Route::get('/contact-us', [MailController::class, 'contact']);

Route::post('/send-message', [MailController::class, 'sendEmail'])->name('contact.send');
