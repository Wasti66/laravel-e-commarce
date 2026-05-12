<?php

namespace App\Http\Controllers;

use App\Models\Policy;
use Illuminate\Http\Request;

class PolicyController extends Controller
{
    public function PolicyPage(){
        return view('pages.by-policy-page');
    }
    public function PolicyByType(Request $request){
        $policy = Policy::where('type',$request->type)->first();
        return response()->json($policy);
    }
}
