<?php

namespace App\Http\Middleware;
use App\Helper\JWTToken;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TokenAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //return $next($request);
        $token = $request->cookie('token');
        $result = JWTToken::ReadToken($token);
        if($result=='Unauthorized'){
            //return redirect('/UserLoginPage');
            return response()->json(['error'=>'Unauthorized'], 401);
        }else{
            $request->headers->set('email', $result->UserEmail);
            $request->headers->set('id', $result->UserID);
            return $next($request);
        }
    }
}
