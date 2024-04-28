<?php

namespace App\Http\Controllers\api\v1\candidate;

use App\Models\Job;
use App\Models\JobApplication;
use Exception;
use App\Mail\OTPMail;
use App\Helper\JWTToken;
use App\Models\Candidate;
use Illuminate\Http\Request;
use App\Helper\ResponseHelper;
use App\Models\CandidateProfile;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class CandidateUserController extends Controller
{
    //All candidate pages
    public function LoginPage(){

        return view('pages.candidate.auth.login-page');
    }

    public function RegistrationPage(){
 
        return view('pages.candidate.auth.registration-page');
    }

    public function SendOtpPage(){

        return view('pages.candidate.auth.send-otp-page');
    }

    public function VerifyOTPPage(){

        return view('pages.candidate.auth.verify-otp-page');
    }

    public function ResetPasswordPage(){

        return view('pages.candidate.auth.reset-pass-page');
    }

    public function DashboardPage(){

        return view('pages.candidate.dashboard.dashboard');
    }

    public function ProfilePage(){

        return view('pages.candidate.dashboard.profile-page');
    }

    public function jobapplicationPage(){

        return view('pages.candidate.dashboard.job-applications');
    }
    public function jobapplication(Request $request){
        $candidate_id=$request->header('candidate_id');
        $jobApplications = JobApplication::with('job')
        ->Where('candidate_id',$candidate_id)
        ->get();
        // dd($jobApplications);
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

    function CandidateRegistration(Request $request){
        
        DB::beginTransaction();

        try {

            $request->validate([
                'name' => 'required|string|max:50',
                'firstName' => 'required|string|max:50',
                'lastName' => 'required|string|max:50',
                'email' => 'required|string|email|max:50|unique:candidates,email',
                'password' => 'required|string|min:3|confirmed',
            ]);

            // dd('ok');

            // create candidate
            $candidate = Candidate::create([
                'name' => $request->input('name'),
                'firstName' => $request->input('firstName'),
                'lastName' => $request->input('lastName'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
            ]);
            // then create copmany profile
            $candidateID=$candidate->id;
            // dd($candidateID);
            $candidatename=$candidate->name;

            CandidateProfile::create([
                'candidate_id' => $candidateID,
                'fullName' => $candidatename,
            ]);


 
         DB::commit();

        return ResponseHelper::Out('success',"Candidate Registration Successfully",200);
          
 
        } catch (Exception $e) {
            DB::rollBack();
            return ResponseHelper::exception('Fail',$e->getMessage(),200);
           

        }
    }

    function CandidateLogin(Request $request){

        $request->validate([
            
            'email' => 'required|string|email',
            'password' => 'required|string|min:3',
        ]);
        // dd($request->all());
        $email = $request->input('email');
 
            $user = Candidate::where('email', $email)->first();
            // dd($user);
            // dd($user->id);

        if (!$user || !Hash::check($request->input('password'), $user->password)) {
            return ResponseHelper::Out(
                'faild',
                "Candidate Not Found",
                200);
        }else{
            $token=JWTToken::CreateToken($email,$user->id);
            

             return response()->json([
                'status' => 'success',
                'message' => 'Candidate Login Successful',
                'token' => $token
            ],200)->cookie('candidatetoken', $token, 60 * 24 * 30);
        }


    }

    function SendOTPCode(Request $request){

        $request->validate([
            
            'email' => 'required|string|email',
        ]);

        $email=$request->input('email');
        $otp=rand(1000,9999);
        $count=Candidate::where('email','=',$email)->count();

        if($count==1){
            // OTP Email Address
            Mail::to($email)->send(new OTPMail($otp));
            // OTO Code Table Update
            Candidate::where('email','=',$email)->update(['otp'=>$otp]);

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

        $user=Candidate::where('email','=',$email)
            ->where('otp','=',$otp)->first();
        
        // dd($user);

        if($user){
            // Database OTP Update
            Candidate::where('email','=',$email)->update(['otp'=>'0']);

            // Pass Reset Token Issue
            $token=JWTToken::CreateTokenForSetPassword($request->input('email'));
            return ResponseHelper::Out(
                'success',
                "OTP Verification Successful!",
                200)->cookie('candidatetoken',$token,60*24*30);


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
            Candidate::where('email','=',$email)->update([
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

    function CandidateLogout(){
        
        return redirect('/')->cookie('candidatetoken','',-1);
    }

    // Show data in the profile page
    function CandidateProfile(Request $request){
        $candidate_id=$request->header('candidate_id');
        // dd($email);
        $candidate=CandidateProfile::where('candidate_id',$candidate_id)->first();
        // dd($company);
        return ResponseHelper::Response(
            'success',
            "Request Successful",
            $candidate,
            200);
        
    }
    
    // update profile page
    function UpdateProfile(Request $request){
        
        try{
            $request->validate([
                'fullName' => 'required|string|max:50',
                'motherName' => 'required|string|max:50',
                'fatherName' => 'required|string|max:50',
                'mobile' => 'required|',
                'email' => 'required|email',
                'bloodGroup' => 'required|',
                'nid' => 'required|',
                'facebook' => 'required|',
                'linkdin' => 'required|',
                'skills' => 'required|',
                'currentSalary' => 'required|',
                'expectedSalary' => 'required|',
                'photo' => 'sometimes', 
            ]);

            $fullName=$request->input('fullName');
            $fatherName=$request->input('fatherName');
            $motherName=$request->input('motherName');
            $mobile=$request->input('mobile');
            $email=$request->input('email');
            $bloodGroup=$request->input('bloodGroup');
            $nid=$request->input('nid');
            $facebook=$request->input('facebook');
            $linkdin=$request->input('linkdin');
            $skills=$request->input('skills');
            $currentSalary=$request->input('currentSalary');
            $expectedSalary=$request->input('expectedSalary');
             
            $id=$request->header('candidate_id');

            if($request->hasFile('photo')){

                $image = $request->file('photo');
                $img_name = 'cprofile_image_'.md5((uniqid())).time().'.'.$image->getClientOriginalExtension();
                
                $img_url="uploads/cprofile/{$img_name}";
                // upload file
                $image->move(public_path('uploads/cprofile'), $img_name);

                // Delete Old File
                $filePath=$request->input('file_path');
                File::delete($filePath);

                CandidateProfile::where('candidate_id','=',$id)->update([
                    'fullName'=>$fullName,
                    'fatherName'=>$fatherName,
                    'motherName'=>$motherName,
                    'mobile'=>$mobile,
                    'email'=>$email,
                    'bloodGroup'=>$bloodGroup,
                    'photo'=>$img_url,
                    'nid'=>$nid,
                    'facebook'=>$facebook,
                    'linkdin'=>$linkdin,
                    'skills'=>$skills,
                    'currentSalary'=>$currentSalary,
                    'expectedSalary'=>$expectedSalary,
                ]);
    
                return ResponseHelper::Out(
                    'success',
                    "Candidate Profile updated Successfully with image",
                    200);

            }else {
                CandidateProfile::where('candidate_id','=',$id)->update([
                    'fullName'=>$fullName,
                    'fatherName'=>$fatherName,
                    'motherName'=>$motherName,
                    'mobile'=>$mobile,
                    'email'=>$email,
                    'bloodGroup'=>$bloodGroup,
                    'nid'=>$nid,
                    'facebook'=>$facebook,
                    'linkdin'=>$linkdin,
                    'skills'=>$skills,
                    'currentSalary'=>$currentSalary,
                    'expectedSalary'=>$expectedSalary,
                ]);
    
                return ResponseHelper::Out(
                    'success',
                    "Candidate Profile updated Successfully",
                    200);
            }
  
            

        }catch (Exception $e){
            return ResponseHelper::exception('Fail',$e->getMessage(),200);
            
        }
    }
        

}
