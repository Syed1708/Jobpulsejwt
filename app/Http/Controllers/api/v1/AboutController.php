<?php

namespace App\Http\Controllers\api\v1;

use Exception;
use App\Models\About;
use Illuminate\Http\Request;
use App\Helper\ResponseHelper;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class AboutController extends Controller
{

    // backend
    public function aboutPage(){
        return view('pages.company.dashboard.about-page');
    }
    function UserAbout(Request $request){
        
        // $company_id=$request->header('company_id');
        $user_id=$request->header('user_id');
        // $user=About::where('company_id', '=', $company_id)
        // ->where('user_id', '=', $user_id)
        // ->first();
        $user=About::where('user_id', '=', $user_id)
        ->first();
        return response()->json([
            'status' => 'success',
            'message' => 'Request Successful',
            'data' => $user
        ],200);
    }
    public function updateAbout(Request $request)
    {
        try{
            // $company_id=$request->header('company_id');
            $user_id=$request->header('user_id');
            // dd($request->all());
            $request->validate([
                'title' => 'required|max:255',
                'history' => 'required',
                'vision' => 'required',
                // 'banner' => 'required',
                'banner' => 'sometimes', 
                
            ]);


            if($request->hasFile('banner')){

                $image = $request->file('banner');
                $img_name = 'about_image_'.md5((uniqid())).time().'.'.$image->getClientOriginalExtension();
                
                $img_url="uploads/about/{$img_name}";
                // upload file
                $image->move(public_path('uploads/about'), $img_name);

                // Delete Old File
                $filePath=$request->input('file_path');
                File::delete($filePath);

                $about = About::where('user_id', '=', $user_id)->update([
                   'user_id'=> $user_id,
                   'title'=> $request->input('title'),
                   'history'=> $request->input('history'),
                   'vision'=> $request->input('vision'),
                   'banner'=> $img_url,
               ]);

               return ResponseHelper::Response(
                'success',
                "About Page updted successfully with banner.",
                $about,
                200);

            }else{
                $about = About::where('user_id', '=', $user_id)->update([

                   'user_id'=> $user_id,
                   'title'=> $request->input('title'),
                   'history'=> $request->input('history'),
                   'vision'=> $request->input('vision'),
               ]);

               return ResponseHelper::Response(
                'success',
                "About Page updted successfully.",
                $about,
                200);
            }
            


        } catch (Exception $e) {
           
            return ResponseHelper::exception('Fail',$e->getMessage(),200);
           

        }



    }


}
