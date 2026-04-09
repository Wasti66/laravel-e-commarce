<?php

namespace App\Http\Controllers;

use App\Helper\ResponseHelper;
use App\Models\Product;
use App\Models\ProductDetails;
use App\Models\ProductReview;
use App\Models\ProductSlider;
use App\Models\CustomerProfile;
use App\Models\ProductCart;
use App\Models\ProductWish;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //ListProductByCategory
    public function ListProductByCategory(Request $request):JsonResponse{
        $data = Product::where('category_id', $request->id)->with('brand','category')->get();
        return ResponseHelper::Out('Success', $data, 200);
    }
    //ListProductByRemark
    public function ListProductByRemark(Request $request):JsonResponse{
        $data = Product::where('remark', $request->remark)->with('brand','category')->get();
        return ResponseHelper::Out('Success', $data, 200);
    }
    //ListProductByBrand
    public function ListProductByBrand(Request $request):JsonResponse{
        $data = Product::where('brand_id', $request->id)->with('brand','category')->get();
        return ResponseHelper::Out('Success', $data, 200);
    }
    //ListProductSlider
    public function ListProductSlider():JsonResponse{
        $data = ProductSlider::all();
        return ResponseHelper::Out('Success', $data, 200);
    }
    //ProductDetailsById
    public function ProductDetailsById(Request $request):JsonResponse{
        $data = ProductDetails::where('product_id', $request->id)->with('product','product.brand','product.category')->get();
        return ResponseHelper::Out('Success', $data, 200);
    }
    //ListReviewByProduct
    public function ListReviewByProduct(Request $request):JsonResponse{
            $data=ProductReview::where('product_id',$request->product_id)
            ->with(['profile'=>function($query){
                $query->select('id','cus_name');
            }])->get();
        return ResponseHelper::Out('Success',$data, 200);    
    }
    //Create Product Review
    public function CreateProductReview(Request $request):JsonResponse{
        try{
            $user_id = $request->header('id');
            $profile = CustomerProfile::where('user_id', $user_id)->first();
            if($profile){
                $request->merge(['customer_id' => $profile->id]);
                $data = ProductReview::updateOrCreate(
                    ['customer_id' => $profile->id, 'product_id'=>$request->input('product_id')],
                    $request->input()
                );
                return ResponseHelper::Out('success',$data, 200);
            }else{
                return ResponseHelper::Out('fail','Customer Profile required', 200);
            }
        }catch(Exception $e){
            return ResponseHelper::Out('fail',$e->getMessage(), 400);
        }
        
    }

    //Create wish List
    public function CreateWishList(Request $request):JsonResponse{
        try{
            $user_id = $request->header('id');
            $product = Product::where('id', $request->product_id)->first();
            if($product){
                 $data = ProductWish::updateOrCreate(
                    ['user_id'=>$user_id, 'product_id'=>$request->product_id],
                    ['user_id'=>$user_id, 'product_id'=>$request->product_id]
                 );
                return ResponseHelper::Out('success',$data, 200);
            }else{
                return ResponseHelper::Out('fail',"This product does not exist", 401);
            }
           
        }catch(Exception $e){
            return ResponseHelper::Out('fail',$e->getMessage(), 401);
        }
        
    }
    //product wish list
    public function ProductWishList(Request $request):JsonResponse{
        $user_id = $request->header('id');
        $data = ProductWish::where('user_id', $user_id)->with('product')->get();
        return ResponseHelper::Out('success', $data, 200);
    }
    //Remove Product Wish
    public function RemoveProductWhsi(Request $request):JsonResponse{
        $user_id = $request->header('id');
        $data = ProductWish::where([
                'user_id'=> $user_id, 
                'product_id'=>$request->product_id
            ])->delete();
            return ResponseHelper::Out('success',$data, 200);
    }

    //Create Cart List
    public function CreateCartList(Request $request):JsonResponse{
        try{
            $user_id = $request->header('id');
            $product_id = $request->input('product_id');
            $color = $request->input('color');
            $size = $request->input('size');
            $qty = $request->input('qty');

            $UnitPrice = 0;

            $productDetails = Product::where('id','=',$product_id)->first();

            if($productDetails->discount==1){
                $UnitPrice = $productDetails->discount_price;
            }else{
                $UnitPrice = $productDetails->price;
            }
            $totalPrice = $qty*$UnitPrice;

            $data = ProductCart::updateOrCreate(
                ['user_id'=>$user_id, 'product_id'=>$product_id],
                [
                    'user_id'=>$user_id,
                    'product_id'=>$product_id,
                    'color'=>$color,
                    'size'=>$size,
                    'qty'=>$qty,
                    'price'=>$totalPrice
                ]
            );
            return ResponseHelper::Out('success', $data, 200);
        }catch(Exception $e){
            return ResponseHelper::Out('fail', $e->getMessage(), 401);
        }
        
    }

}
