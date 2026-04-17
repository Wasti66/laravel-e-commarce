<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\InvoiceController;
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
//Product Wish List
Route::get('/ProductWishList', [ProductController::class,'ProductWishList'])->middleware([TokenAuthenticate::class]);
//Remove Product Whsi
Route::get('/RemoveProductWhsi/{product_id}', [ProductController::class, 'RemoveProductWhsi'])->middleware([TokenAuthenticate::class]);


//CreateCartList
Route::post('/CreateCartList', [ProductController::class, 'CreateCartList'])->middleware([TokenAuthenticate::class]);
//CartList
Route::get('/CartList',[ProductController::class, 'CartList'])->middleware([TokenAuthenticate::class]);
//DeleteCartList
Route::get('/DeleteCartList/{product_id}', [ProductController::class, 'DeleteCartList'])->middleware([TokenAuthenticate::class]);


// CreateInvoic
Route::post('/CreateInvoic', [InvoiceController::class, 'CreateInvoic'])->middleware([TokenAuthenticate::class]);
//InvoiceList
Route::get('/ListInvoice', [InvoiceController::class, 'ListInvoice'])->middleware([TokenAuthenticate::class]);
//InvoiceProductList
Route::get('/InvoiceProductList/{invoice_id}', [InvoiceController::class, 'InvoiceProductList'])->middleware([TokenAuthenticate::class]);


//PaymentSuccess
Route::post('/PaymentSuccess', [InvoiceController::class, 'PaymentSuccess']);
//PaymentCancle
Route::post('/PaymentCancel', [InvoiceController::class, 'PaymentCancel']);
//PaymentFail
Route::post('/PaymentFail', [InvoiceController::class, 'PaymentFail']);