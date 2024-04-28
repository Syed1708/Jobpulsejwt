<?php

namespace App\Http\Middleware;

use Closure;
use App\Helper\JWTToken;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CompanyResetPasswordMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $token = $request->cookie('companytoken');
        $result=JWTToken::VerifyToken($token);
        // dd($token);
        if($result=="unauthorized"){
            return redirect('/company/userLogin');
        }
        else{
            // if found cookie then set user email and id with encrypted token
            $request->headers->set('email',$result->userEmail);
            return $next($request);
        }
    }
}
