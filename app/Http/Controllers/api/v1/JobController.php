<?php

namespace App\Http\Controllers\api\v1;

use App\Models\Candidate;
use App\Models\JobApplication;
use App\Models\JobPage;
use Exception;
use App\Models\Job;
use App\Helper\JWTToken;
use Illuminate\View\View;
use App\Models\JobCategory;
use Illuminate\Http\Request;
use App\Helper\ResponseHelper;
use App\Http\Controllers\Controller;

class JobController extends Controller
{

    // frontend
    function index(){ 
        $jobcat = JobCategory::withCount('jobs')
        ->where('status','active')
        ->get();
        // $job = JobPage::latest()->first();
        $job = JobPage::where('user_id', 1)->first();
        // dd($job);
        return view('pages.jobs', compact('jobcat', 'job'));
    }
    function jobPage():View{
        return view('pages.company.dashboard.job-page');
    }

    // single job view
    function jobView(Request $request, $id){
        $company_id=$request->header('company_id');
        $job = Job::with('applications')
        ->withCount('applications')
        ->Where('id',$id)
        ->Where('company_id',$company_id)
        ->first();
        
       
        // dd($job);
        
        return view('pages.company.dashboard.single-job-view', compact('job'));
    }
        // show all  job candidate list againts particular job
    function appliedCandidateView(Request $request, $id){
        // dd($id);
            $company_id=$request->header('company_id');
            // dd($company_id);
            // $job = Job::with(['applications.candidate'])
            // ->Where('id',$id)
            // ->Where('company_id',$company_id)
            // ->first();

            $job = Job::with(['applications.candidate'])
            ->Where('id',$id)
            ->Where('company_id',$company_id)
            ->get();
            
           
            // dd($job);
            // foreach ($job->applications as $item) {
            //     return $item;
            // }
            
            return view('pages.company.dashboard.job-applied-page', compact('job'));
        }

        //company can see candidate  preview cv
        public function candidateprofilePreview($id)
        { 
    
            
            
            try{
    
        // dd($id);
                $cv = Candidate::with('profile','educations','jobExpriences','trainings')->where('id',$id)
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

        // when candidate will accepted by company
        public function candidateprofileSelected(Request $request)
        { 
    
            
            
            try{
                $id = $request->input('candidate_id');
                $jobid = $request->input('job_id');
                // dd($id);
                // dd($jobid);
                // $candidate_id = $request->id;
        // dd($id);
                $cv = JobApplication::where('candidate_id',$id)
                ->where('job_id',$jobid)
                ->first();
                // dd($cv); 
                if($cv){
                    $cv->update(['status'=>'accepted']);
                    return ResponseHelper::Response(
                        'Success',
                        "Candidate Found!!",
                        $cv,
                        200);  
                }else {
                    return ResponseHelper::Response(
                        'fail',
                        "No candidate Found!!",
                        '',
                        200);  
                }
             

                
            }catch (Exception $e) {
               
                return ResponseHelper::exception('Fail',$e->getMessage(),200);
               
            }
            
    
        }

                // when candidate will rejected by company
                public function candidateprofileRejected(Request $request)
                { 
            
                    
                    
                    try{
                        $id = $request->input('candidate_id');
                        $jobid = $request->input('job_id');
                        // dd($id);
                        // dd($jobid);
                        // $candidate_id = $request->id;
                // dd($id);
                        $cv = JobApplication::where('candidate_id',$id)
                        ->where('job_id',$jobid)
                        ->first();
                        // dd($cv); 
                        if($cv){
                            $cv->update(['status'=>'rejected']);
                            return ResponseHelper::Response(
                                'Success',
                                "Candidate Found!!",
                                $cv,
                                200);  
                        }else {
                            return ResponseHelper::Response(
                                'fail',
                                "No candidate Found!!",
                                '',
                                200);  
                        }
                     
        
                        
                    }catch (Exception $e) {
                       
                        return ResponseHelper::exception('Fail',$e->getMessage(),200);
                       
                    }
                    
            
                }

    // to show recent post in the recent post component with a ajax call
    //this will be a get request
    function recentJobPosts(Request $request){
        $candidatetoken = $request->cookie('candidatetoken');

        if ($candidatetoken) { 
            $result = JWTToken::VerifyToken($candidatetoken);
            $candidate_id = $result->userID;
        } else {
           
            $candidate_id = null; 
        }
        // dd($candidatetoken);
        $jobs = Job::with('category', 'applications')
        ->where('status','active')
        ->latest()
        ->paginate(10);

            if($jobs){
                return response()->json([
                    'status' => 'success',
                    'candidate_id' => $candidate_id,
                    'data' => $jobs,
                ], 200);
    
            }else{
                return ResponseHelper::Out(
                    'fail',
                    "No Job available.",
                    200);  
            } 
    }

    // fitering category listwise posts
    public function getJobsByCategory($categoryId) {
        $category = JobCategory::find($categoryId);
        if ($category) {
            $jobs = $category->jobs()->paginate(10);
            return response()->json([
                'status' => 'success',
                'data' => $jobs
            ]);
        } else {
            return response()->json([
                'status' => 'fail',
                'message' => 'Category not found'
            ]);
        }
    }
    
    public function createJob(Request $request)
    {
        try{
            $company_id=$request->header('company_id');
            $com_employee_id=$request->header('com_employee_id');
            $user_id=$request->header('user_id');
            $employee_id=$request->header('employee_id');
            // dd($request->all());
            $request->validate([
                'title' => 'required|max:255',
                'description' => 'nullable|string',
                'mode' => 'required',
                'category_id' => 'required',
                'type' => 'required',
                'location' => 'required',
                'salary' => 'required',
                'tags' => 'nullable|array',
                'benifits' => 'required',
                'deadline' => 'required|date',
                'status' => 'required',
                
            ]);
    
            
            $job = Job::create([
                'user_id' => $user_id,
                'employee_id' => $employee_id,
                'company_id' => $company_id,
                'com_employee_id' => $com_employee_id,
                
                'title' => $request->input('title'),
                'category_id' => $request->input('category_id'),
                'description' => $request->input('description'),
                'mode' => $request->input('mode'),
                'type' => $request->input('type'),
                'location' => $request->input('location'),
                'salary' => $request->input('salary'),
                'tags' => $request->input('tags'),
                'benifits' => $request->input('benifits'),
                'deadline' => $request->input('deadline'),
                'status' => $request->input('status'),
            ]); 
            
            return ResponseHelper::Response(
                'success',
                "Job created successfully.",
                $job,
                201);

        } catch (Exception $e) {
           
            return ResponseHelper::exception('Fail',$e->getMessage(),200);
           

        }



    }

    public function jobList(Request $request)
    {

        
        $jobs = Job::all();

        return response()->json([
            'status' => 'success',
            'data' => $jobs
        ],200);

    }
// just company job list
    public function jobListCompany(Request $request)
    {
        $company_id=$request->header('company_id');
        
        if($company_id){
            $cats = Job::with('category')->Where('company_id',$company_id)
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
    public function jobListCompanyEmp(Request $request)
    {
        $company_id=$request->header('company_id');
        $com_employee_id=$request->header('com_employee_id');
    

        if($com_employee_id){
            $cats = Job::Where('company_id',$company_id)
            ->Where('com_employee_id',$com_employee_id)
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

    public function jobListUser(Request $request)
    {
        $user_id=$request->header('user_id');
        // dd($user_id);
        if($user_id){
            $cats = Job::Where('user_id',$user_id)
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

    public function jobListUserEmp(Request $request)
    {
        $user_id=$request->header('user_id');
        $employee_id=$request->header('employee_id');
    

        if($employee_id){
            $cats = Job::Where('user_id',$user_id)
            ->Where('employee_id',$employee_id)
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
            $job_id=$request->input('id');
            $job = Job::where('id',$job_id)
            ->first();
            if($job){

                $company_id=$request->header('company_id');
                $com_employee_id=$request->header('com_employee_id');
                $user_id=$request->header('user_id');
                $employee_id=$request->header('employee_id');
                if($company_id){
                    $job = Job::where('id', $job_id)
                    ->where('company_id', $company_id)->first();
                    return ResponseHelper::Response(
                        'success',
                        "Job by id successfully.",
                        $job,
                        200);
                }elseif($com_employee_id){
                    $job = Job::where('id', $job_id)
                    ->where('company_id', $company_id)
                    ->where('com_employee_id', $com_employee_id)
                    ->first();
                    return ResponseHelper::Response(
                        'success',
                        "Job by id successfully.",
                        $job,
                        200);
                }
                elseif($user_id){
                    $job = Job::where('id', $job_id)
                    ->where('user_id', $user_id)
                    ->first();
                    return ResponseHelper::Response(
                        'success',
                        "Job by id successfully.",
                        $job,
                        200);
                }
                
                elseif($employee_id){
                    $job = Job::where('id', $job_id)
                    ->where('user_id', $user_id)
                    ->where('employee_id', $employee_id)
                    ->first();
                    return ResponseHelper::Response(
                        'success',
                        "Job by id successfully.",
                        $job,
                        200);
                }else{

                    return ResponseHelper::Response(
                        'Fail',
                        "No Job Found!!",
                        '',
                        200);
                }
            }else{
              
                return ResponseHelper::Response(
                    'Fail',
                    "No Job Found!!",
                    '',
                    200);  
            }
            // dd($com_employee_id);
            

    
            // $job = Job::where('id', $job_id)
            // ->where('company_id', $company_id)
            // ->where(function ($query) use ($com_employee_id) {
            //     $query->where('com_employee_id', $com_employee_id)
            //         ->orWhereNull('com_employee_id');
            // })
            // ->orWhere(function ($query) use ($job_id, $company_id, $com_employee_id) {
            //     $query->where('id', $job_id)
            //         ->where('company_id', $company_id)
            //         ->when($com_employee_id, function ($query) use ($com_employee_id) {
            //             $query->where('com_employee_id', $com_employee_id);
            //         });
            // })
            // ->first();
  
            
            
            
        }catch (Exception $e) {
           
            return ResponseHelper::exception('Fail',$e->getMessage(),200);
           
        }
        

    }

    public function updateJob(Request $request)
    {
        try{
            $job_id = $request->input('id');
            $job = Job::where('id',$job_id)
            ->first();

            if($job){
                $company_id=$request->header('company_id');
                $com_employee_id=$request->header('com_employee_id');
                $user_id=$request->header('user_id');
                $employee_id=$request->header('employee_id');
                            // dd($request->all());
                $request->validate([
                    
                    'title' => 'required|max:255',
                    'description' => 'nullable|string',
                    'mode' => 'required',
                    'type' => 'required',
                    'category_id' => 'required',
                    'location' => 'required',
                    'salary' => 'required',
                    'tags' => 'nullable|array',
                    'benifits' => 'required',
                    'deadline' => 'required|date',
                    'status' => 'required',
                    
                ]);

 
                $job->company_id = $company_id;
                $job->com_employee_id = $com_employee_id;
                $job->user_id = $user_id;
                $job->employee_id = $employee_id;
                $job->title = $request->input('title');
                $job->category_id = $request->input('category_id');
                $job->description = $request->input('description');
                $job->mode = $request->input('mode');
                $job->type = $request->input('type');
                $job->location = $request->input('location');
                $job->salary = $request->input('salary');
                $job->tags = $request->input('tags');
                $job->benifits = $request->input('benifits');
                $job->deadline = $request->input('deadline');
                $job->status = $request->input('status');
                $job->update();
                
                return ResponseHelper::Response(
                    'success',
                    "Job Updated successfully.",
                    $job,
                    200);

            }else{
                return ResponseHelper::Response(
                    'Fail',
                    "Job id is missing or wrong !",
                    '',
                    200);
            }



    
            


        } catch (Exception $e) {
           
            return ResponseHelper::exception('Fail',$e->getMessage(),200);
           

        }


    }

    public function deleteJob(Request $request)
    {
        $job_id=$request->input('id');
        // $company_id=$request->header('company_id');
        // $com_employee_id=$request->header('com_employee_id');
        // $user_id=$request->header('user_id');
        // $employee_id=$request->header('employee_id');
        $job = Job::where('id',$job_id)
            ->first();
        
        if($job){

           
            $job->delete();
            return ResponseHelper::Out(
                'success',
                "Job Deleted successfully.",
                200);
        }else{
            return ResponseHelper::Response(
                'Fail',
                "No job found!",
                '',
                200);
        }
        
    }
}
