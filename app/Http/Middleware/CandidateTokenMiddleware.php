<?php

namespace App\Http\Middleware;

use Closure;
use App\Helper\JWTToken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Symfony\Component\HttpFoundation\Response;

class CandidateTokenMiddleware
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
        $token = $request->cookie('candidatetoken');
        // dd($token);

        // Log::info("Token from middleware: $token");
        
        $result=JWTToken::VerifyToken($token);
        // dd($result);
        if($result=="unauthorized"){
            return redirect('/');
        }
        else{
            // if found cookie then set user email and id with encrypted token
            $request->headers->set('email',$result->userEmail);
            $request->headers->set('candidate_id',$result->userID);
            return $next($request);
        }
    }
}
