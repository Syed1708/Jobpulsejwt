<?php

namespace App\Helper;

use Exception;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class JWTToken
{

    public static function CreateToken($userEmail,$userID,$employeeID=null):string{
        $key ="157635HGRTSKLMT";
        $payload=[
            'iss'=>'laravel-token',
            'iat'=>time(), 
            'exp'=>time()+60*60,
            'userEmail'=>$userEmail, 
            'userID'=>$userID,
            'employeeID'=>$employeeID,

        ];
       return JWT::encode($payload,$key,'HS256');
    }


    public static function CreateTokenForSetPassword($userEmail):string{
        $key ="157635HGRTSKLMT";
        $payload=[
            'iss'=>'laravel-token',
            'iat'=>time(),
            'exp'=>time()+60*20,
            'userEmail'=>$userEmail,
        ];
        return JWT::encode($payload,$key,'HS256');
    }



    public static function VerifyToken($token):string|object
    {
        try {
            if($token==null){
                return 'unauthorized';
            }
            else{
                $key ="157635HGRTSKLMT";
                $decode=JWT::decode($token,new Key($key,'HS256'));
                return $decode;
            }
        }
        catch (Exception $e){
            return 'unauthorized';
        }
    }

}
