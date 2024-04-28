<?php

namespace App\Http\Controllers\api\v1\admin;

use Exception;
use App\Models\User;
use App\Mail\OTPMail;
use App\Models\About;
use App\Models\JobPage;
use App\Helper\JWTToken;
use App\Models\ContactPage;
use Illuminate\Http\Request;
use App\Helper\ResponseHelper;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AdminUserController extends Controller
{
    
    function UserRegistration(Request $request){
        DB::beginTransaction();
        try { 

            $request->validate([
                'name' => 'required|string|max:50',
                'firstName' => 'required|string|max:50',
                'lastName' => 'required|string|max:50',
                'email' => 'required|string|email|max:50|unique:users,email',
                'password' => 'required|string|min:3|confirmed',
            ]);

            $user = User::create([
                'name' => $request->input('name'),
                'firstName' => $request->input('firstName'),
                'lastName' => $request->input('lastName'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
            ]);
            $userID=$user->id;
            About::create([
                'user_id' => $userID,
                'title' => "Company Title",
            ]);
            ContactPage::create([
                'user_id' => $userID,
            ]);
            JobPage::create([
                'user_id' => $userID,
            ]);
 
         DB::commit();

            return ResponseHelper::Out('success',"User Registration Successfully",200);
            
 
        } catch (Exception $e) {
            DB::rollBack();
            return ResponseHelper::exception('Fail',$e->getMessage(),200);
           

        }
    }

    function UserLogin(Request $request){

        $request->validate([
            
            'email' => 'required|string|email',
            'password' => 'required|string|min:3',
        ]);
        // dd($request->all());
        $email = $request->input('email');
        // $password = $request->input('password');
        // $password = Hash::make($request->input('password'));
        // dd($password);


    //    $user = User::where('email','=',$email)
    //         ->where('password','=',$password)
    //         ->first();
            $user = User::where('email', $email)->first();
            // dd($user);
            // dd($user->id);

        if (!$user || !Hash::check($request->input('password'), $user->password)) {
            return ResponseHelper::Out(
                'faild',
                "User Not Found",
                200);
        }else{
            $token=JWTToken::CreateToken($email,$user->id);
            

             return response()->json([
                'status' => 'success',
                'message' => 'User Login Successful',
                'token' => $token
            ],200)->cookie('token', $token, 60 * 24 * 30);
        }


    }

    function SendOTPCode(Request $request){

        $request->validate([
            
            'email' => 'required|string|email',
        ]);

        $email=$request->input('email');
        $otp=rand(1000,9999);
        $count=User::where('email','=',$email)->count();

        if($count==1){
            // OTP Email Address
            Mail::to($email)->send(new OTPMail($otp));
            // OTO Code Table Update
            User::where('email','=',$email)->update(['otp'=>$otp]);

            return ResponseHelper::Out(
                'success',
                "4 Digit OTP Code has been send to your email !",
                200);
            // return response()->json([
            //     'status' => 'success',
            //     'message' => '4 Digit OTP Code has been send to your email !'
            // ],200); 
        }
        else{
            return ResponseHelper::Out(
                'faild',
                "unauthorized",
                200);
            // return response()->json([
            //     'status' => 'failed',
            //     'message' => 'unauthorized'
            // ]);
        }
    }

    function VerifyOTP(Request $request){

        $request->validate([
            
            'email' => 'required|string|email',
            // 'otp' => 'required|min:4',
        ]);

        $email=$request->input('email');
        $otp=$request->input('otp');
        // dd($otp);

        $user=User::where('email','=',$email)
            ->where('otp','=',$otp)->first();
        
        // dd($user);

        if($user){
            // Database OTP Update
            User::where('email','=',$email)->update(['otp'=>'0']);

            // Pass Reset Token Issue
            $token=JWTToken::CreateTokenForSetPassword($request->input('email'));
            return ResponseHelper::Out(
                'success',
                "OTP Verification Successful!",
                200)->cookie('token',$token,60*24*30);
            // return response()->json([
            //     'status' => 'success',
            //     'message' => 'OTP Verification Successful',
            // ],200)->cookie('token',$token,60*24*30);

        }
        else{
            return ResponseHelper::Out(
                'faild',
                "OTP Not valid",
                200);
            // return response()->json([
            //     'status' => 'failed',
            //     'message' => 'unauthorized'
            // ],200);
        }
    }

    function ResetPassword(Request $request){
        try{
            $request->validate([
                'password' => 'required|string|min:3|confirmed',
            ]);
            $email=$request->header('email');
            $password=Hash::make($request->input('password'));
            User::where('email','=',$email)->update([
                'password'=>$password
            ]);
            return ResponseHelper::Out(
                'success',
                "Password update Successfully",
                200);
            // return response()->json([
            //     'status' => 'success',
            //     'message' => 'Password update Successfully',
            // ],200);

        }catch (Exception $e){
            return ResponseHelper::exception('Fail',$e->getMessage(),200);
            // return response()->json([
            //     'status' => 'fail',
            //     'message' => 'Something Went Wrong',
            // ],200);
        }
    }

    function UserLogout(){

        return redirect('/')->cookie('token','',-1);
    }


    // Show data in the profile page
    function UserProfile(Request $request){
        $email=$request->header('email');
        // dd($email);
        $user=User::where('email','=',$email)->first();

        return ResponseHelper::Response(
            'success',
            "Request Successful",
            $user,
            200);
        // return response()->json([
        //     'status' => 'success',
        //     'message' => 'Request Successful',
        //     'data' => $user
        // ],200);
    }

    // update profile page
    function UpdateProfile(Request $request){
        
        try{
            $request->validate([
                'name' => 'required|string|max:50',
                'firstName' => 'required|string|max:50',
                'lastName' => 'required|string|max:50',
                'password' => 'required|string|min:3',
            ]);

            $name=$request->input('name');
            $firstName=$request->input('firstName');
            $lastName=$request->input('lastName');
            $email=$request->header('email');
            $password=$request->input('password');

            User::where('email','=',$email)->update([
                'name'=>$name,
                'firstName'=>$firstName,
                'lastName'=>$lastName,
                'password'=>Hash::make($password),
            ]);

            return ResponseHelper::Out(
                'success',
                "User Profile updated Successfully",
                200);
            // return response()->json([
            //     'status' => 'success',
            //     'message' => 'User Profile updated Successfully',
            // ],200);

        }catch (Exception $e){
            return ResponseHelper::exception('Fail',$e->getMessage(),200);
            // return response()->json([
            //     'status' => 'fail',
            //     'message' => 'Something Went Wrong',
            // ],200);
        }
    }
    
}
