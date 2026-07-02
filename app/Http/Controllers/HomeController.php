<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function HomePage(){
        return view('pages.home-page');
    }
    public function LoginPage(){
        return view('pages.Login-page');
    }
    public function VarifyPage(){
        return view('page.vartify-Page');
    }
}
