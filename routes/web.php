<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\CodeController;
use App\Http\Controllers\Site\CategoryController;
use App\Http\Controllers\Site\PostController;
use App\Http\Controllers\Site\PageController;
use App\Http\Controllers\Site\FaqController;
use App\Http\Controllers\Site\AuthController;

// جميع المسارات تعمل مع اللغة المخزنة في الجلسة (en بشكل افتراضي)

// الصفحة الرئيسية
Route::get('/', [HomeController::class, 'index'])->name('site.home');

// البحث عن الأكواد
Route::get('/codes', [CodeController::class, 'index'])->name('site.codes');
Route::get('/code/{code}', [CodeController::class, 'show'])->name('site.code.show');

// التصنيفات
Route::get('/categories', [CategoryController::class, 'index'])->name('site.categories');
Route::get('/category/{slug}', [CategoryController::class, 'show'])->name('site.category.show');

// المقالات
Route::get('/posts', [PostController::class, 'index'])->name('site.posts');
Route::get('/post/{slug}', [PostController::class, 'show'])->name('site.post.show');

// الصفحات الثابتة
Route::get('/page/{slug}', [PageController::class, 'show'])->name('site.page.show');

// الأسئلة الشائعة
Route::get('/faq', [FaqController::class, 'index'])->name('site.faq');

// تسجيل الدخول والتسجيل
Route::get('/login', function() {
    return view('site.auth.login');
})->name('site.login.form');
Route::post('/login', [\App\Http\Controllers\Site\AuthController::class, 'login'])->name('site.login');
Route::post('/register', [\App\Http\Controllers\Site\AuthController::class, 'register'])->name('site.register');
Route::post('/logout', [\App\Http\Controllers\Site\AuthController::class, 'logout'])->name('site.logout');
// تسجيل الدخول عبر الشبكات الاجتماعية
Route::get('/auth/{provider}', [AuthController::class, 'redirectToProvider'])->name('site.social.redirect');
Route::get('/auth/{provider}/callback', [AuthController::class, 'handleProviderCallback'])->name('site.social.callback');

// تبديل اللغة
Route::get('/lang/{locale}', function ($locale) {
    session(['locale' => $locale]);
    return back();
})->name('site.language.switch');













