<?php

namespace App\Http\Controllers\api\v1;

use Exception;
use App\Models\JobPage;
use Illuminate\Http\Request;
use App\Helper\ResponseHelper;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class JobPageController extends Controller
{
    public function jobPage(){
        return view('pages.company.dashboard.job-page-page');
    }
    function jobDetails(Request $request){
        
        $id=$request->input('id');
        $company_id=$request->header('company_id');
        $user_id=$request->header('user_id');
        $user=JobPage::where('company_id', '=', $company_id)
        ->where('user_id', '=', $user_id)
        ->first();
        return response()->json([
            'status' => 'success',
            'message' => 'Request Successful',
            'data' => $user
        ],200);
    }
    public function updateJobDetails(Request $request)
    {
        try{
            $company_id=$request->header('company_id');
            $user_id=$request->header('user_id');
            // dd($request->all());
            $request->validate([
                'banner' => 'sometimes',
                
            ]);


            if($request->hasFile('banner')){

                $image = $request->file('banner');
                $img_name = 'job_image_'.md5((uniqid())).time().'.'.$image->getClientOriginalExtension();
                
                $img_url="uploads/job/{$img_name}"; 
                // upload file
                $image->move(public_path('uploads/job'), $img_name);

                // Delete Old File
                $filePath=$request->input('file_path');
                File::delete($filePath);

                $job = JobPage::where('company_id','=',$company_id)
                ->where('user_id', '=', $user_id)->update([
                   'company_id'=> $company_id,
                   'user_id'=> $user_id,
                   'banner'=> $img_url,
               ]);

               return ResponseHelper::Response(
                'success',
                "job Page updted successfully with banner.",
                $job,
                200);

            }
            


        } catch (Exception $e) {
           
            return ResponseHelper::exception('Fail',$e->getMessage(),200);
           

        }



    }
}
