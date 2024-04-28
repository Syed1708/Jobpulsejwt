<?php

namespace App\Http\Middleware;

use Closure;
use Exception;
use App\Helper\JWTToken;
use Illuminate\Http\Request;
use App\Helper\ResponseHelper;
use Illuminate\Support\Facades\Cookie;
use Symfony\Component\HttpFoundation\Response;

class CommonTokenMiddleware
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
        
            $companytoken = $request->cookie('companytoken');
            $companyEmptoken = $request->cookie('companyEmptoken');
            $usertoken = $request->cookie('token');
            $candidatetoken = $request->cookie('candidatetoken');
            // $empployeetoken = $request->cookie('token');
            // dd($token);
    
            // Log::info("Token from middleware: $token");
            if($companyEmptoken){
    
                $result=JWTToken::VerifyToken($companyEmptoken);
                if($result=="unauthorized"){
                    return redirect('/company/employeeLogin');
                }
                else{
                    // if found cookie then set user email and id with encrypted token
                    $request->headers->set('email',$result->userEmail);
                    $request->headers->set('company_id',$result->userID);
                    $request->headers->set('com_employee_id',$result->employeeID);
                   
                }
            }else if($companytoken){
         
                $result=JWTToken::VerifyToken($companytoken);
                // dd($result);
                if($result=="unauthorized"){
                    return redirect('/company/companyLogin');
                }
                else{
                    // if found cookie then set user email and id with encrypted token
                    $request->headers->set('email',$result->userEmail);
                    $request->headers->set('company_id',$result->userID);
                    
                }
            }
            else if($usertoken){
         
                $result=JWTToken::VerifyToken($usertoken);
                // dd($token);
                if($result=="unauthorized"){
                    return redirect('/');
                }
                else{
                    // if found cookie then set user email and id with encrypted token
                    $request->headers->set('email',$result->userEmail);
                    $request->headers->set('user_id',$result->userID);
                   
                }
            }
            else if($candidatetoken){
         
                $result=JWTToken::VerifyToken($candidatetoken);
                // dd($token);
                if($result=="unauthorized"){
                    return redirect('/candidate/candidateLogin');
                }
                else{
                    // if found cookie then set user email and id with encrypted token
                    $request->headers->set('email',$result->userEmail);
                    $request->headers->set('candidate_id',$result->userID);
                   
                }
            }
            else{
                return redirect('/');
            }
    
            return $next($request);
       

        // dd($result);

    }
}
