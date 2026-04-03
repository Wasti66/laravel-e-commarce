<?php

namespace App\Http\Controllers;
use App\Helper\JWTToken;
use App\Helper\ResponseHelper;
use App\Mail\OTPMail;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpFoundation\JsonResponse;

class UserController extends Controller
{
    public function UserLogin(Request $request):JsonResponse{
        
        try{
            $UserEmail = $request->UserEmail;
            $OTP = rand(100000,999999);
            $detailes = ['code'=>$OTP];
            Mail::to($UserEmail)->send(new OTPMail($detailes));
            User::updateOrCreate(['email'=>$UserEmail], ['email'=>$UserEmail, 'otp'=>$OTP]);
            return ResponseHelper::Out('Success', "A 6 digit OPT code has been send you Email", 200);
        }catch(Exception $e){
            return ResponseHelper::out('fail', $e->getMessage(), 200);
        }
    }
    public function VerifyLogin(Request $request):JsonResponse
    {
            $UserEmail=$request->UserEmail;
            $OTP=$request->OTP;

            $verification= User::where('email',$UserEmail)->where('otp',$OTP)->first();

            if($verification){
                User::where('email',$UserEmail)->where('otp',$OTP)->update(['otp'=>'0']);
                $token=JWTToken::CreateToken($UserEmail,$verification->id);
                return  ResponseHelper::Out('success',"",200)->cookie('token',$token,60*24*30);
            }
            else{
                return  ResponseHelper::Out('fail',null,401);
            }
    }
}
