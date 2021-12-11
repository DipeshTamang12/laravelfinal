<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

route::get('/redirect',[HomeController::class,'redirect']);

route::get('/',[HomeController::class,'index']);

route::get('/about',[HomeController::class,'about']);

route::get('/jewelry',[HomeController::class,'jewelry']);

route::get('/contact',[HomeController::class,'contact']);

route::get('/product',[AdminController::class,'product']);

route::get('/showproduct',[AdminController::class,'showproduct']);

route::post('/sendcontact',[ContactController::class,'sendcontact']);

route::get('/showcontact',[AdminController::class,'showcontact']);

route::get('/deleteproduct/{id}',[AdminController::class,'deleteproduct']);

route::get('/updateproduct/{id}',[AdminController::class,'updateproduct']);

route::post('/uploadproduct',[AdminController::class,'uploadproduct']);

route::post('/updateproduct/{id}',[AdminController::class,'updateproductfinalize']);

route::get('/deletecontact/{id}',[AdminController::class,'deletecontact']);

route::post('/postimages',[GalleryController::class,'postimages']);

route::get('/gallery',[GalleryController::class,'showgallery']);

route::get('/showimages',[AdminController::class,'showimages']);