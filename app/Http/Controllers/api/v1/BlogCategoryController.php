<?php

namespace App\Http\Controllers\api\v1;

use Exception;
use Illuminate\View\View;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use App\Helper\ResponseHelper;
use App\Http\Controllers\Controller;

class BlogCategoryController extends Controller
{
    // company
    function blogCatPage():View{
        return view('pages.company.dashboard.blog-cat-page');
    }

    // admin
    function blogCatPageAdmin():View{
        return view('pages.admin.dashboard.blog-cat-page');
    }

   

    public function createCat(Request $request)
    {
        try{
            $company_id=$request->header('company_id');
            $com_employee_id=$request->header('com_employee_id');
            $user_id=$request->header('user_id');
            $employee_id=$request->header('employee_id');
            // dd($request->all());
            $request->validate([
                'name' => 'required|max:255|unique:blog_categories,name',
                
            ]);
    
            
            $cat = BlogCategory::create([
                'user_id' => $user_id,
                'employee_id' => $employee_id,
                'company_id' => $company_id,
                'com_employee_id' => $com_employee_id,
                
                'name' => $request->input('name')
            ]);
            
            return ResponseHelper::Response(
                'success',
                "Blog Category created successfully.",
                $cat,
                201);

        } catch (Exception $e) {
           
            return ResponseHelper::exception('Fail',$e->getMessage(),200);
           

        }



    }

    public function catList(Request $request)
    {

        $cats = BlogCategory::all();

        return response()->json([
            'status' => 'success',
            'data' => $cats
        ],200);

    }

    public function categoryListCompany(Request $request)
    { 
        $company_id=$request->header('company_id');
        
        if($company_id){
            $cats = BlogCategory::Where('company_id',$company_id)
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
    public function categoryListCompanyEmp(Request $request)
    {
        $company_id=$request->header('company_id');
        $com_employee_id=$request->header('com_employee_id');
    

        if($com_employee_id){
            $cats = BlogCategory::Where('company_id',$company_id)
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

    
    public function categoryListUser(Request $request)
    {
        $user_id=$request->header('user_id');
        // dd($user_id);
        if($user_id){
            $cats = BlogCategory::Where('user_id',$user_id)
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

    public function categoryListUserEmp(Request $request)
    {
        $user_id=$request->header('user_id');
        $employee_id=$request->header('employee_id');
    

        if($employee_id){
            $cats = BlogCategory::Where('user_id',$user_id)
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

    public function catByID(Request $request)
    { 

            

        
        try{
            $cat_id=$request->input('id');
            $cat = BlogCategory::where('id',$cat_id)
            ->first();

            if($cat){

                $company_id=$request->header('company_id');
                $com_employee_id=$request->header('com_employee_id');
                $user_id=$request->header('user_id');
                $employee_id=$request->header('employee_id');
                if($company_id){
                    $cat = BlogCategory::where('id', $cat_id)
                    ->where('company_id', $company_id)->first();
                    return ResponseHelper::Response(
                        'success',
                        "Blog Category by id successfully.",
                        $cat,
                        200);
                }elseif($com_employee_id){
                    $cat = BlogCategory::where('id', $cat_id)
                    ->where('company_id', $company_id)
                    ->where('com_employee_id', $com_employee_id)
                    ->first();
                    return ResponseHelper::Response(
                        'success',
                        "Blog Category by id successfully.",
                        $cat,
                        200);
                }
                elseif($user_id){
                    $cat = BlogCategory::where('id', $cat_id)
                    ->where('user_id', $user_id)
                    ->first();
                    return ResponseHelper::Response(
                        'success',
                        "Blog Category by id successfully.",
                        $cat,
                        200);
                }
                
                elseif($employee_id){
                    $cat = BlogCategory::where('id', $cat_id)
                    ->where('user_id', $user_id)
                    ->where('employee_id', $employee_id)
                    ->first();
                    return ResponseHelper::Response(
                        'success',
                        "Blog Category by id successfully.",
                        $cat,
                        200);
                }else{

                    return ResponseHelper::Response(
                        'Fail',
                        "No Blog Category Found!!",
                        '',
                        200);
                }
            }else{
              
                return ResponseHelper::Response(
                    'Fail',
                    "No Blog Category Found!!",
                    '',
                    200);  
            }
        }catch (Exception $e) {
           
            return ResponseHelper::exception('Fail',$e->getMessage(),200);
           
        }
        

    }

    public function updateCat(Request $request)
    {
        try{
            $cat_id=$request->input('id');
            $cat = BlogCategory::where('id',$cat_id)
            ->first();
            if($cat){
                $company_id=$request->header('company_id');
                $com_employee_id=$request->header('com_employee_id');
                $user_id=$request->header('user_id');
                $employee_id=$request->header('employee_id');
                            // dd($request->all());
                $request->validate([
                    // 'name' => ['required', 'name', Rule::unique('blog_categories')->ignore($cat_id)],
                    'name' => 'required|unique:blog_categories,name,'.$cat_id.'|max:255',

                    
                ]);

                $cat->company_id = $company_id;
                $cat->com_employee_id = $com_employee_id;
                $cat->user_id = $user_id;
                $cat->employee_id = $employee_id;
                $cat->name = $request->input('name');
                $cat->update();
                
                return ResponseHelper::Response(
                    'success',
                    "Blog Cat Updated successfully.",
                    $cat,
                    200);

            }else{
                return ResponseHelper::Response(
                    'Fail',
                    "Blog Cat not found !",
                    '',
                    200);
            }


        } catch (Exception $e) {
           
            return ResponseHelper::exception('Fail',$e->getMessage(),200);
           

        }


            

   


    }

    public function deletecat(Request $request)
    {
        $cat_id=$request->input('id');
        $cat = BlogCategory::where('id',$cat_id)
        ->first();
        
        if($cat){

            $cat->delete();
            return ResponseHelper::Out(
                'success',
                "Blog Deleted successfully.",
                200);
        }else{
            return ResponseHelper::Response(
                'Fail',
                "No Blog Category found!",
                '',
                200);
        }
        
    }

}
