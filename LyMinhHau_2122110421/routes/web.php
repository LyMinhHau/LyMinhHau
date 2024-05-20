<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ProductController;
use App\Http\Controllers\frontend\ContactController;


Route::get('/', [HomeController::class,'index']); //Trang chủ
Route::get('san-pham', [ProductController::class,'index']); //Tất cả sản phẩm
Route::get('chi-tiet-san-pham/{slug}', [ProductController::class,'product_detail']); //chi tiết sản phẩm
Route::get('lien-he', [ContactController::class,'index']); //liên hệ