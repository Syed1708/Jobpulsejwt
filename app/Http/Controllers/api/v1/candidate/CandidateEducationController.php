<?php

namespace App\Http\Controllers\api\v1\candidate;

use App\Models\CandidateEducation;
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

class CandidateEducationController extends Controller
{
    public function educationPage(){
        return view('pages.candidate.dashboard.education-page');
    }
   
    public function createEducation(Request $request)
    {
        try{
            $candidate_id=$request->header('candidate_id');
            $candidate = CandidateProfile::where('candidate_id',$candidate_id)
            ->first();

            if($candidate){

            
            // dd($request->all());
            $request->validate([
                'degreeType' => 'required|max:255',
                'instituteName' => 'required|',
                'group' => 'required',
                'passingYear' => 'required',
                'marks' => 'required',
            ]);
            $education = CandidateEducation::create([
                'degreeType' => $request->input('degreeType'),
                'instituteName' => $request->input('instituteName'),
                'group' => $request->input('group'),
                'passingYear' => $request->input('passingYear'),
                'marks' => $request->input('marks'),
                'candidate_id' => $candidate_id,
            ]);

            return ResponseHelper::Response(
                'success',
                "Education created successfully.",
                $education,
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

    public function educationListCandidate(Request $request)
    {
        $candidate_id=$request->header('candidate_id');
        // dd($candidate_id);
        if($candidate_id){
            $cats = CandidateEducation::Where('candidate_id',$candidate_id)
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

    public function educationByID(Request $request)
    { 


        try{
            $candidate_id=$request->header('candidate_id');
            
            $candidate = CandidateEducation::where('candidate_id',$candidate_id)
            ->first();

            if($candidate){
                $id=$request->input('id');
                $candidate_id=$request->header('candidate_id');
                $candidate_education = CandidateEducation::where('id',$id)
                ->where('candidate_id',$candidate_id)
                ->first();
                return ResponseHelper::Response(
                    'success',
                    "Candidate Education by id successfully.",
                    $candidate_education,
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

    public function updateEduacation(Request $request)
    {
        try{
            $candidate_id=$request->header('candidate_id');
            $id=$request->input('id');
            $candidate = CandidateEducation::where('id',$id)
            ->first();
            // dd($candidate);

            if($candidate){

            
            // dd($request->all());
            $request->validate([
                'degreeType' => 'required|max:255',
                'instituteName' => 'required|',
                'group' => 'required',
                'passingYear' => 'required',
                'marks' => 'required',
            ]);
            
            $education = CandidateEducation::where('id',$id)
            ->where('candidate_id',$candidate_id)
            ->update([
                'degreeType' => $request->input('degreeType'),
                'instituteName' => $request->input('instituteName'),
                'group' => $request->input('group'),
                'passingYear' => $request->input('passingYear'),
                'marks' => $request->input('marks'),
                'candidate_id' => $candidate_id,
            ]);

            return ResponseHelper::Response(
                'success',
                "Education Updated successfully.",
                $education,
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
    
    public function deleteEducation(Request $request){

        $id=$request->input('id');
        $candidate_id=$request->header('candidate_id');
        // dd($candidate_id);
        $candidate_education = CandidateEducation::where('id',$id)
        ->where('candidate_id',$candidate_id)
        ->first();
 
        
        if($candidate_education){

           
            $candidate_education->delete();
            return ResponseHelper::Out(
                'success',
                "Candidate education Deleted successfully.",
                200);
        }else{
            return ResponseHelper::Response(
                'Fail',
                "No Candidate education found!",
                '',
                200);
        }
       
    }



}
