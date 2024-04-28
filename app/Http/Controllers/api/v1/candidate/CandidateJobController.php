<?php

namespace App\Http\Controllers\api\v1\candidate;

use App\Models\CandidateJob;
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

class CandidateJobController extends Controller
{
   
    public function JobPage(){
        return view('pages.candidate.dashboard.job-page');
    }
    public function createJob(Request $request)
    {
        try{
            $candidate_id=$request->header('candidate_id');
            $candidate = CandidateProfile::where('candidate_id',$candidate_id)
            ->first();

            if($candidate){

            
            // dd($request->all());
            $request->validate([
                'company_name' => 'required|max:255',
                'designation' => 'required|',
                'joinin_date' => 'required',
                'depurture_date' => 'required',
            ]);
            $job = CandidateJob::create([
                'company_name' => $request->input('company_name'),
                'designation' => $request->input('designation'),
                'joinin_date' => $request->input('joinin_date'),
                'depurture_date' => $request->input('depurture_date'),
                'candidate_id' => $candidate_id,
            ]);

            return ResponseHelper::Response(
                'success',
                "Job created successfully.",
                $job,
                201);
            }else{
                return ResponseHelper::Response(
                    'Fail',
                    "Candidate id is missing or wrong !",
                    '',
                    200);
            }

        } catch (Exception $e) {
           
            return ResponseHelper::exception('Fail',$e->getMessage(),200);
           

        }



    }

    public function jobListCandidate(Request $request)
    {
        $candidate_id=$request->header('candidate_id');
        // dd($candidate_id);
        if($candidate_id){
            $cats = CandidateJob::Where('candidate_id',$candidate_id)
            ->latest()->get();
            return response()->json([
                'status' => 'success',
                'data' => $cats
            ],200);

        }else{
            return response()->json([
                'status' => 'Fail',
                'data' => ""
            ],200);  
        }

    }

    public function jobByID(Request $request)
    { 


        try{
            $candidate_id=$request->header('candidate_id');
            
            $candidate = CandidateJob::where('candidate_id',$candidate_id)
            ->first();

            if($candidate){
                $id=$request->input('id');
                $candidate_id=$request->header('candidate_id');
                $candidate_job = CandidateJob::where('id',$id)
                ->where('candidate_id',$candidate_id)
                ->first();
                return ResponseHelper::Response(
                    'success',
                    "Candidate Job by id successfully.",
                    $candidate_job,
                    200);
               
            
            }else{

                return ResponseHelper::Response(
                    'Fail',
                    "No Candidate Found!!",
                    '',
                    200);
            }
            
            
        }catch (Exception $e) {
           
            return ResponseHelper::exception('Fail',$e->getMessage(),200);
           
        }
        

    }

    public function updateJob(Request $request)
    {
        try{
            $candidate_id=$request->header('candidate_id');
            $id=$request->input('id');
            $candidate = CandidateJob::where('id',$id)
            ->first();
            // dd($candidate);

            if($candidate){

            
            // dd($request->all());
            $request->validate([
                'company_name' => 'required|max:255',
                'designation' => 'required|',
                'joinin_date' => 'required',
                'depurture_date' => 'required',
            ]);
            
            $job = CandidateJob::where('id',$id)
            ->where('candidate_id',$candidate_id)
            ->update([
                'company_name' => $request->input('company_name'),
                'designation' => $request->input('designation'),
                'joinin_date' => $request->input('joinin_date'),
                'depurture_date' => $request->input('depurture_date'),
                'candidate_id' => $candidate_id,
            ]);

            return ResponseHelper::Response(
                'success',
                "Job Updated successfully.",
                $job,
                200);
            }else{
                return ResponseHelper::Response(
                    'Fail',
                    "Candidate id is missing or wrong !",
                    '',
                    200);
            }

        } catch (Exception $e) {
           
            return ResponseHelper::exception('Fail',$e->getMessage(),200);
           

        }



    } 
    
    public function deleteJob(Request $request){

        $id=$request->input('id');
        $candidate_id=$request->header('candidate_id');
        // dd($candidate_id);
        $candidate_job = CandidateJob::where('id',$id)
        ->where('candidate_id',$candidate_id)
        ->first();
 
        
        if($candidate_job){

           
            $candidate_job->delete();
            return ResponseHelper::Out(
                'success',
                "Candidate job Deleted successfully.",
                200);
        }else{
            return ResponseHelper::Response(
                'Fail',
                "No Candidate job found!",
                '',
                200);
        }
       
    }



}
