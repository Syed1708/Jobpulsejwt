<?php

namespace App\Http\Controllers\api\v1\candidate;

use App\Models\CandidateTraining;
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

class CandidateTrainingController extends Controller
{
   
    public function TrainingPage(){
        return view('pages.candidate.dashboard.training-page');
    }
    public function createTraining(Request $request)
    {
        try{
            $candidate_id=$request->header('candidate_id');
            $candidate = CandidateProfile::where('candidate_id',$candidate_id)
            ->first();

            if($candidate){

            
            // dd($request->all());
            $request->validate([
                'tariningName' => 'required|max:255',
                'instituteName' => 'required|',
                'passingYear' => 'required',
            ]);
            $training = CandidateTraining::create([
                'tariningName' => $request->input('tariningName'),
                'instituteName' => $request->input('instituteName'),
                'passingYear' => $request->input('passingYear'),
                'candidate_id' => $candidate_id,
            ]);

            return ResponseHelper::Response(
                'success',
                "Training created successfully.",
                $training,
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

    public function trainingListCandidate(Request $request)
    {
        $candidate_id=$request->header('candidate_id');
        // dd($candidate_id);
        if($candidate_id){
            $cats = CandidateTraining::Where('candidate_id',$candidate_id)
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

    public function trainingByID(Request $request)
    { 


        try{
            $candidate_id=$request->header('candidate_id');
            
            $candidate = CandidateTraining::where('candidate_id',$candidate_id)
            ->first();

            if($candidate){
                $id=$request->input('id');
                $candidate_id=$request->header('candidate_id');
                $candidate_training = CandidateTraining::where('id',$id)
                ->where('candidate_id',$candidate_id)
                ->first();
                return ResponseHelper::Response(
                    'success',
                    "Candidate Training by id successfully.",
                    $candidate_training,
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

    public function updateTraining(Request $request)
    {
        try{
            $candidate_id=$request->header('candidate_id');
            $id=$request->input('id');
            $candidate = CandidateTraining::where('id',$id)
            ->first();
            // dd($candidate);

            if($candidate){

            
            // dd($request->all());
            $request->validate([
                'tariningName' => 'required|max:255',
                'instituteName' => 'required|',
                'passingYear' => 'required',
            ]);
            
            $training = CandidateTraining::where('id',$id)
            ->where('candidate_id',$candidate_id)
            ->update([
                'tariningName' => $request->input('tariningName'),
                'instituteName' => $request->input('instituteName'),
                'passingYear' => $request->input('passingYear'),
                'candidate_id' => $candidate_id,
            ]);

            return ResponseHelper::Response(
                'success',
                "Training Updated successfully.",
                $training,
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
    
    public function deleteTraining(Request $request){

        $id=$request->input('id');
        $candidate_id=$request->header('candidate_id');
        // dd($candidate_id);
        $candidate_training = CandidateTraining::where('id',$id)
        ->where('candidate_id',$candidate_id)
        ->first();
 
        
        if($candidate_training){

           
            $candidate_training->delete();
            return ResponseHelper::Out(
                'success',
                "Candidate training Deleted successfully.",
                200);
        }else{
            return ResponseHelper::Response(
                'Fail',
                "No Candidate training found!",
                '',
                200);
        }
       
    }



}
