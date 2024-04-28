<?php

namespace App\Http\Middleware;

use Closure;
use App\Helper\JWTToken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class TokenVerificationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    { 

        // $token=$request->cookie('admintoken');
        $token = $request->cookie('token');
        $result=JWTToken::VerifyToken($token);
        // dd($token);
        if($result=="unauthorized"){
            return redirect('/');
        }
        else{
            // if found cookie then set user email and id with encrypted token
            $request->headers->set('email',$result->userEmail);
            $request->headers->set('user_id',$result->userID);
            return $next($request);
        }


    }
}
