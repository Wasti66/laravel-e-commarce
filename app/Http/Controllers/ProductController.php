<?php

namespace App\Http\Controllers;

use App\Helper\ResponseHelper;
use App\Models\Product;
use App\Models\ProductDetails;
use App\Models\ProductReview;
use App\Models\ProductSlider;
use App\Models\CustomerProfile;
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
}
