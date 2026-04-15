<?php

namespace App\Http\Controllers;

use App\Helper\ResponseHelper;
use App\Helper\SSLCommarze;
use App\Models\CustomerProfile;
use App\Models\Invoice;
use App\Models\InvoiceProduct;
use App\Models\ProductCart;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;
use Illuminate\Support\Facades\DB;
class InvoiceController extends Controller
{
    public function CreateInvoic(Request $request):JsonResponse{
        DB::beginTransaction();
        try{
            $user_id = $request->header('id');
            $user_email = $request->header('email');
            $vat_rate = (float) $request->input('vat', 0);

            $tran_id = uniqid();
            $payment_status = "pending";
            $delevary_status = "pending";

            $Profile = CustomerProfile::where('user_id',"=", $user_id)->first();
            $cus_details = "Name : $Profile->cus_name, Address : $Profile->cus_add, City : $Profile->cus_city, Phone : $Profile->cus_phone";
            $ship_details = "Name : $Profile->ship_name, Address : $Profile->ship_add, City : $Profile->ship_city, Phone : $Profile->cus_phone";

            //payable calculation
            $total =0;
            $CartList = ProductCart::where('user_id', '=', $user_id)->get();
            foreach($CartList as $cartItem){
                $total = $total + $cartItem->price;
            }

            $vat = round(($total * $vat_rate) / 100, 2);
            $payble  = round($total + $vat, 2);

            $Invoice = Invoice::create([
                'total' => $total,
                'vat' => $vat,
                'payble' => $payble,
                'cus_details' => $cus_details,
                'ship_details' => $ship_details,
                'tran_id' => $tran_id,
                'payment_status' => $payment_status,
                'delevary_status' => $delevary_status,
                'user_id' => $user_id,
            ]);

            $InvoiceID = $Invoice->id;
            foreach($CartList as $EachProduct){
                InvoiceProduct::create([
                    'invoice_id'=>$InvoiceID,
                    'product_id'=> $EachProduct['product_id'],
                    'user_id'=> $user_id,
                    'qty'=> $EachProduct['qty'],
                    'sale_price'=>$EachProduct['price']
                ]);
            }

            $paymentMethod = SSLCommarze::InitiatePayment($Profile, $payble, $tran_id,$user_email);

            DB::commit();

            return ResponseHelper::Out("success", array([
                'paymentMethod'=>$paymentMethod, 
                'payble'=> $payble, 
                'vat'=>$vat, 
                'totla'=>$total
            ]), 200);


        }catch(Exception $e){
            DB::rollBack();
            return ResponseHelper::Out('fail', $e->getMessage(), 402);
        }
        
    }
    public function ListInvoice(Request $request){
        $user_id = $request->header('id');
        return Invoice::where('user_id', $user_id)->get();
        
    }
}
