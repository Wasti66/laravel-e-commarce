<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\TokenAuthenticate;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//brand List show
Route::get('/BrandList',[BrandController::class, 'BrandList']);
//Category List show
Route::get('/CategoryList',[CategoryController::class,'CategoryList']);
//product List
Route::get('/ListProductByCategory/{id}', [ProductController::class,'ListProductByCategory']);
Route::get('/ListProductByBrand/{id}', [ProductController::class,'ListProductByBrand']);
Route::get('/ListProductByRemark/{remark}',[ProductController::class,'ListProductByRemark']);
//Slider
Route::get('/ListProductSlider',[ProductController::class,'ListProductSlider']);
//ProductDetails
Route::get('/ProductDetailsById/{id}',[ProductController::class,'ProductDetailsById']);
Route::get('/ListReviewByProduct/{product_id}',[ProductController::class,'ListReviewByProduct']);
//Policy
Route::get('/PolicyByType/{type}',[PolicyController::class,'PolicyByType']);

//User
Route::get('/UserLogin/{UserEmail}',[UserController::class,'UserLogin']);
Route::get('/VerifyLogin/{UserEmail}/{OTP}',[UserController::class,'VerifyLogin']);

//user profile create
Route::post('/CreateProfile',[ProfileController::class,'CreateProfile'])->middleware([TokenAuthenticate::class]);
//user profile read
Route::get('/ReadProfile', [ProfileController::class,'ReadProfile'])->middleware([TokenAuthenticate::class]);


//Create product review
Route::post('/CreateProductReview', [ProductController::class,'CreateProductReview'])->middleware([TokenAuthenticate::class]);

//Create Product wishes
Route::get('/CreateWishList/{product_id}',[ProductController::class,'CreateWishList'])->middleware([TokenAuthenticate::class]);