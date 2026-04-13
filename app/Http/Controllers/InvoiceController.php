<?php

namespace App\Http\Controllers;

use App\Models\CustomerProfile;
use App\Models\Invoice;
use App\Models\ProductCart;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;

class InvoiceController extends Controller
{
    public function CreateInvoic(Request $request):JsonResponse{
        $user_id = $request->header('id');
        $user_email = $request->header('email');
        $vat_rate = $request->input('vat');

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

        $vat = ($total*$vat_rate)/100;
        $payble = $total + $vat;

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

    }
}
