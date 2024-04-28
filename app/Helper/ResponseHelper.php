<?php

namespace App\Helper;

use Illuminate\Http\JsonResponse;

class ResponseHelper
{
 public static function Out($status,$msg,$code):JsonResponse{
   return  response()->json([
    'status' => $status, 
    'message' => $msg, 
  ],$code);
 }

//  For erros handling
 public static function exception($status,$message,$code):JsonResponse{
  return  response()->json([
   'status' => $status, 
   'message' =>  $message
 ],$code);
}

//  modify to add status
 public static function Response($status,$msg, $data, $code): JsonResponse {
  $response = [
      'status' => $status,
      'message' => $msg,
      'data' => $data,
  ];


  return response()->json($response, $code);
  // return response()->json($response, $code, [], JSON_UNESCAPED_UNICODE);
}
//  modify to add status
public static function ResponseWithToken($status,$msg, $token, $code): JsonResponse {
  $response = [
      'status' => $status,
      'message' => $msg,
      'token' => $token,
  ];


  return response()->json($response, $code);
  // return response()->json($response, $code, [], JSON_UNESCAPED_UNICODE);
}

}
