<?php

namespace App\Http\Controllers\api\v1;

use App\Models\Blog;
use App\Models\Candidate;
use App\Models\Company;
use App\Models\Job;
use App\Models\JobApplication;
use App\Models\User;
use Exception;
use App\Models\About;
use Illuminate\Http\Request;
use App\Helper\ResponseHelper;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class   DashboardController extends Controller
{
    function SummaryForAdmin(Request $request):array{
 
        $user_id=$request->header('user_id');
  
        $user= User::all()->count();
        $company= Company::all()->count();
        $candidate= Candidate::all()->count();
        $job= Job::all()->count();
        $jobapplication= JobApplication::all()->count();
        $blog= Blog::all()->count();

        return[
            'user'=> $user,
            'company'=> $company,
            'candidate'=> $candidate,
            'job'=> $job,
            'blog'=> $blog,
            'jobapplication'=> $jobapplication,
        ];




    }

    function SummaryForCompany(Request $request):array{
 
        $company_id=$request->header('company_id');
  

        $job= Job::where('company_id', $company_id)->count();
        $jobapplication= Job::with('applications')
        ->withCount('applications')
        ->Where('company_id',$company_id)
        ->first();

        // dd($jobapplication);
        // if($jobapplication == null){
        //     return 0;
        // }else{

        // }
        
        $blog= Blog::where('company_id', $company_id)->count();

        return[
           
            'job'=> $job,
            'blog'=> $blog,
            'jobapplication'=> $jobapplication ? $jobapplication->applications_count : 0,
        ];



        
    }

    function SummaryForCandidate(Request $request):array{
 
        $candidate_id=$request->header('candidate_id');
        // dd($candidate_id);

        $job= Job::all()->count();
        $jobapplication= JobApplication::where('candidate_id', $candidate_id)
        ->count();

        return[
            'job'=> $job,
            'jobapplication'=> $jobapplication,
        ];



        
    }


}
