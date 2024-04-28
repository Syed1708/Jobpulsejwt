<?php

namespace App\Http\Middleware;

use Closure;
use App\Helper\JWTToken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Symfony\Component\HttpFoundation\Response;

class CompanyEmpTokenMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        // dd($request->cookie());
        // $token = Cookie::get('token');
        $token = $request->cookie('companyEmptoken');
        // dd($token);

        // Log::info("Token from middleware: $token");
        
        $result=JWTToken::VerifyToken($token);
        // dd($result);
        if($result=="unauthorized"){
            return redirect('/company/employeeLogin');
        }
        else{
            // if found cookie then set user email and id with encrypted token
            $request->headers->set('email',$result->userEmail);
            $request->headers->set('company_id',$result->userID);
            $request->headers->set('com_employee_id',$result->employeeID);
            return $next($request);
        }
    }
}
