<?php

namespace App\Http\Controllers\api\v1\company;

use App\Models\Job;
use Exception;
use App\Mail\OTPMail;
use App\Models\About;
use App\Models\Company;
use App\Models\JobPage;
use App\Helper\JWTToken;
use App\Models\ContactPage;
use Illuminate\Http\Request;
use App\Helper\ResponseHelper;
use App\Models\CompanyProfile;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class CompanyUserController extends Controller
{
    
    public function jobApplicationsList(Request $request, $job_id){
        $company_id=$request->header('company_id');
        // dd($job_id);

        $jobApplications = Job::with('applications.candidate')
        ->Where('id',$job_id)
        ->Where('company_id',$company_id)
        ->first();
        // dd($company_id);
        if($jobApplications){
            return ResponseHelper::Response(
                'success',
                "Job application successfully.",
                $jobApplications,
                200);
        }else{
            return ResponseHelper::Response(
                'fail',
                "Job Applications not found.",
                $jobApplications,
                200);

        }


        // return view('pages.candidate.dashboard.job-applications', compact('jobApplications'));
    } 
    function CompanyRegistration(Request $request){
        
        DB::beginTransaction();

        try {

            $request->validate([
                'name' => 'required|string|max:50',
                'firstName' => 'required|string|max:50',
                'lastName' => 'required|string|max:50',
                'email' => 'required|string|email|max:50|unique:companies,email',
                'password' => 'required|string|min:3|confirmed',
            ]);

            // dd('ok');

            // create company
            $company = Company::create([
                'name' => $request->input('name'),
                'firstName' => $request->input('firstName'),
                'lastName' => $request->input('lastName'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
            ]);
            
            // then create copmany profile
            $companyID=$company->id;
            // dd($companyID);
            $companyname=$company->name;

            CompanyProfile::create([
                'company_id' => $companyID,
                'name' => $companyname,
            ]);

            About::create([
                'company_id' => $companyID,
                'title' => "Company Title",
            ]);
            ContactPage::create([
                'company_id' => $companyID,
            ]);
            JobPage::create([
                'company_id' => $companyID,
            ]);
 
         DB::commit();

        return ResponseHelper::Out('success',"Company Registration Successfully",200);
          
 
        } catch (Exception $e) {
            DB::rollBack();
            return ResponseHelper::exception('Fail',$e->getMessage(),200);
           

        }
    }

    function CompanyLogin(Request $request){

        $request->validate([
            
            'email' => 'required|string|email',
            'password' => 'required|string|min:3',
        ]);
        // dd($request->all());
        $email = $request->input('email');
 
            $user = Company::where('email', $email)->first();
            // dd($user);
            // dd($user->id);

        if (!$user || !Hash::check($request->input('password'), $user->password)) {
            return ResponseHelper::Out(
                'faild',
                "Company Not Found",
                200);
        }else{
            $token=JWTToken::CreateToken($email,$user->id);
            

             return response()->json([
                'status' => 'success',
                'message' => 'Company Login Successful',
                'token' => $token
            ],200)->cookie('companytoken', $token, 60 * 24 * 30);
        }


    }

    function SendOTPCode(Request $request){

        $request->validate([
            
            'email' => 'required|string|email',
        ]);

        $email=$request->input('email');
        $otp=rand(1000,9999);
        $count=Company::where('email','=',$email)->count();

        if($count==1){
            // OTP Email Address
            Mail::to($email)->send(new OTPMail($otp));
            // OTO Code Table Update
            Company::where('email','=',$email)->update(['otp'=>$otp]);

            return ResponseHelper::Out(
                'success',
                "4 Digit OTP Code has been send to your email !",
                200);
            
        }
        else{
            return ResponseHelper::Out(
                'faild',
                "unauthorized",
                200);
           
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

        $user=Company::where('email','=',$email)
            ->where('otp','=',$otp)->first();
        
        // dd($user);

        if($user){
            // Database OTP Update
            Company::where('email','=',$email)->update(['otp'=>'0']);

            // Pass Reset Token Issue
            $token=JWTToken::CreateTokenForSetPassword($request->input('email'));
            return ResponseHelper::Out(
                'success',
                "OTP Verification Successful!",
                200)->cookie('companytoken',$token,60*24*30);


        }
        else{
            return ResponseHelper::Out(
                'faild',
                "OTP Not valid",
                200);

        }
    }

    function ResetPassword(Request $request){
        try{
            $request->validate([
                'password' => 'required|string|min:3|confirmed',
            ]);
            $email=$request->header('email');
            $password=Hash::make($request->input('password'));
            Company::where('email','=',$email)->update([
                'password'=>$password
            ]);
            return ResponseHelper::Out(
                'success',
                "Password update Successfully",
                200);


        }catch (Exception $e){
            return ResponseHelper::exception('Fail',$e->getMessage(),200);

        }
    }

    function CompanyLogout(){

        return redirect('/')->cookie('companytoken','',-1);
    }


    // Show data in the profile page
    function CompanyProfile(Request $request){
        $company_id=$request->header('company_id');
        // dd($email);
        $company=CompanyProfile::where('company_id',$company_id)->first();
        // dd($company);
        return ResponseHelper::Response(
            'success',
            "Request Successful",
            $company,
            200);
       
    }

    // update profile page
    function UpdateProfile(Request $request){
        
        try{
            $request->validate([
                'name' => 'required|string|max:50',
                'logo' => 'sometimes', 
            ]);

            
            if($request->hasFile('logo')){

                $image = $request->file('logo');
                $img_name = 'company_image_'.md5((uniqid())).time().'.'.$image->getClientOriginalExtension();
                
                $img_url="uploads/company/{$img_name}";
                // upload file
                $image->move(public_path('uploads/company'), $img_name);

                // Delete Old File
                $filePath=$request->input('file_path');
                File::delete($filePath);


                $name=$request->input('name');
                $description=$request->input('description');
                $mobile=$request->input('mobile');
                $email=$request->input('email');
    
                $company_id=$request->header('company_id');
    
                $company= CompanyProfile::where('company_id',$company_id)->update([
                    'name'=>$name,
                    'description'=>$description,
                    'logo'=>$img_url,
                    'mobile'=>$mobile,
                    'email'=>$email,
                ]);
    
                return ResponseHelper::Response(
                    'success',
                    "Company Profile updated Successfully with image",
                    $company,
                    200);

            }else{
                $name=$request->input('name');
                $description=$request->input('description');
                $mobile=$request->input('mobile');
                $email=$request->input('email');
    
                $company_id=$request->header('company_id');
                $company= CompanyProfile::where('company_id',$company_id)->update([
                    'name'=>$name,
                    'description'=>$description,
                    'mobile'=>$mobile,
                    'email'=>$email,
                ]);
    
                return ResponseHelper::Response(
                    'success',
                    "Company Profile updated Successfully",
                    $company,
                    200);
            }


            
 
        }catch (Exception $e){
            return ResponseHelper::exception('Fail',$e->getMessage(),200);
            
        }
    }
    
}
