<?php

namespace App\Http\Controllers\api\v1;

use App\Models\Candidate;
use App\Models\JobApplication;
use Exception;
use App\Models\Job;
use App\Models\Company;
use App\Helper\JWTToken;
use Illuminate\View\View;
use App\Models\JobCategory;
use Illuminate\Http\Request;
use App\Helper\ResponseHelper;
use App\Http\Controllers\Controller;

class JobApplicationController extends Controller
{
    function index():View{
        return view('pages.company.dashboard.job-page');
    }

    function jobPreView($jobId){
        // $company_id=$request->header('company_id');
        $job = Job::findOrFail($jobId);
        // dd($job);
        return view('pages.candidate.dashboard.job-preview', compact('job'));
    }

    // to show recent post in the recent post component with a ajax call
    //this will be a get request
    function jobDetails(Request $request, $id){
        $candidatetoken = $request->cookie('candidatetoken');

        if ($candidatetoken) {
            $result = JWTToken::VerifyToken($candidatetoken);
            $candidate_id = $result->userID;
        } else {
           
            $candidate_id = null; 
        }

        $job = Job::findOrFail($id);

        $applications = JobApplication::where('job_id', $id)
        ->where('candidate_id', $candidate_id)
        ->first();
        
        return view('pages.jobdetails', compact('job','applications','candidate_id'));
    }

    function applyJob(Request $request, $jobId){
        $candidatetoken = $request->cookie('candidatetoken');
        $result=JWTToken::VerifyToken($candidatetoken);
        $candidate_id=$result->userID;
        // dd($candidate_id);
        if ($candidatetoken) {
           
            JobApplication::create([
                'job_id' => $jobId,
                'candidate_id' => $candidate_id
            ]);

        }

        
        return redirect('/candidate/dashboard')->with('success', 'Job apply Successfully');
    }
  

    // preview cv
    public function profilePreview(Request $request)
    { 

        
        
        try{

        // need to add middleware then we can request header
            $candidate_id=$request->header('candidate_id');
    
            $cv = Candidate::with('profile','educations','jobExpriences','trainings')->where('id',$candidate_id)
            ->first();
            // dd($cv);
            if($cv){
                return ResponseHelper::Response(
                    'Success',
                    "Candidate Found!!",
                    $cv,
                    200);  
            }else {
                return ResponseHelper::Response(
                    'fail',
                    "No Job Found!!",
                    '',
                    200);  
            }
         
  
            
            
            
        }catch (Exception $e) {
           
            return ResponseHelper::exception('Fail',$e->getMessage(),200);
           
        }
        

    }

    function createCV(){
        
    }


}
