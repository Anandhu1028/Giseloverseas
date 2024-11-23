<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Admin\DashboardContoller;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\NewsandblogContoller;
use App\Http\Controllers\Admin\ServiceContoller;
use App\Http\Controllers\Auth\LoginController;




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

Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/service', [FrontendController::class, 'service'])->name('service');
Route::get('/news', [FrontendController::class, 'news'])->name('news');
Route::get('/gallery', [FrontendController::class, 'gallery'])->name('gallery');
Route::get('/contact-us', [FrontendController::class, 'contact'])->name('contact');
Route::get('/tracking', [FrontendController::class, 'tracking'])->name('tracking');




Route::prefix('admin')->group(function () {

        Route::get('/', [DashboardContoller::class, 'dashboard'])->name('dashboard');
        Route::prefix('/gallery')->group(function () {
            Route::get('/',[GalleryController::class,'index'])->name('admin.gallery');
            Route::get('/create',[GalleryController::class,'create'])->name('admin.create_gallery');
            Route::post('/store',[GalleryController::class,'store'])->name('admin.gallery_store');
            Route::get('/edit/{id}',[GalleryController::class,'edit'])->name('admin.gallery_edit');
            Route::post('/update/{id}',[GalleryController::class,'update'])->name('admin.gallery_update');
            Route::get('/delete/{id}',[GalleryController::class,'delete'])->name('admin.gallery_delete');

        });
        Route::prefix('/news')->group(function () {
            Route::get('/',[NewsandblogContoller::class,'index'])->name('admin.news');
            Route::get('/create',[NewsandblogContoller::class,'create'])->name('admin.create_news');
            Route::post('/store',[NewsandblogContoller::class,'store'])->name('admin.news_store');
            Route::get('/edit/{id}',[NewsandblogContoller::class,'edit'])->name('admin.news_edit');
            Route::post('/update/{id}',[NewsandblogContoller::class,'update'])->name('admin.news_update');
            Route::get('/delete/{id}',[NewsandblogContoller::class,'delete'])->name('admin.news_delete');
        

        });
        Route::prefix('/service')->group(function () {
            Route::get('/',[ServiceContoller::class,'index'])->name('admin.service');
            Route::get('/create',[ServiceContoller::class,'create'])->name('admin.create_service');
            Route::post('/store',[ServiceContoller::class,'store'])->name('admin.service_store');
            Route::get('/edit/{id}',[ServiceContoller::class,'edit'])->name('admin.service_edit');
            Route::post('/update/{id}',[ServiceContoller::class,'update'])->name('admin.service_update');
            Route::get('/delete/{id}',[ServiceContoller::class,'delete'])->name('admin.service_delete');
        });
});

// Route::get('/login',[LoginController::class,'login'])->name('login');
// Route::post('/do-login',[LoginController::class,'dologin'])->name('do_login');