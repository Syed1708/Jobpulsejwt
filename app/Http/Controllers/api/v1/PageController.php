<?php

namespace App\Http\Controllers\api\v1;

use Exception;
use App\Models\Page;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Helper\ResponseHelper;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    function allPage():View{
        return view('pages.company.dashboard.all-page');
    }


    public function createPage(Request $request)
    {
        try{
            $company_id=$request->header('company_id');
            $com_employee_id=$request->header('com_employee_id');
            $user_id=$request->header('user_id');
            $employee_id=$request->header('employee_id');
            // dd($request->all());
            $request->validate([
                'name' => 'required|max:255|unique:pages,name',
                'description' => 'required|',
                
            ]);
    
            
            $page = Page::create([
                'user_id' => $user_id,
                'employee_id' => $employee_id,
                'company_id' => $company_id,
                'com_employee_id' => $com_employee_id,
                
                'name' => $request->input('name'),
                'description' => $request->input('description')
            ]);
            
            return ResponseHelper::Response(
                'success',
                "Page created successfully.",
                $page,
                201);

        } catch (Exception $e) {
           
            return ResponseHelper::exception('Fail',$e->getMessage(),200);
           

        }



    }

    public function pageList(Request $request)
    {

        $pages = Page::all();

        return response()->json([
            'status' => 'success',
            'data' => $pages
        ],200);

    }

    public function pageListCompany(Request $request)
    {
        $company_id=$request->header('company_id');
        
        if($company_id){
            $pages = Page::Where('company_id',$company_id)
            ->latest()->get();
            return response()->json([
                'status' => 'success',
                'data' => $pages
            ],200);

        }else{
            return response()->json([
                'status' => 'Fail',
                'data' => ""
            ],200);  
        }
        

    }
    public function pageListCompanyEmp(Request $request)
    {
        $company_id=$request->header('company_id');
        $com_employee_id=$request->header('com_employee_id');
    

        if($com_employee_id){
            $pages = Page::Where('company_id',$company_id)
            ->Where('com_employee_id',$com_employee_id)
            ->latest()->get();
            return response()->json([
                'status' => 'success',
                'data' => $pages
            ],200);
        }else{
            return response()->json([
                'status' => 'Fail',
                'data' => ""
            ],200);  
        }

    }

    
    public function pageListUser(Request $request)
    {
        $user_id=$request->header('user_id');
        // dd($user_id);
        if($user_id){
            $pages = Page::Where('user_id',$user_id)
            ->latest()->get();
            return response()->json([
                'status' => 'success',
                'data' => $pages
            ],200);
        }else{
            return response()->json([
                'status' => 'Fail',
                'data' => ""
            ],200);  
        }
       



    }

    public function pageListUserEmp(Request $request)
    {
        $user_id=$request->header('user_id');
        $employee_id=$request->header('employee_id');
    

        if($employee_id){
            $pages = Page::Where('user_id',$user_id)
            ->Where('employee_id',$employee_id)
            ->latest()->get();
            return response()->json([
                'status' => 'success',
                'data' => $pages
            ],200);
        }else{
            return response()->json([
                'status' => 'Fail',
                'data' => ""
            ],200);  
        }

    }

    public function pageByID(Request $request)
    { 

            

        
        try{
            $page_id=$request->input('id');
            $page = Page::where('id',$page_id)
            ->first();

            if($page){

                $company_id=$request->header('company_id');
                $com_employee_id=$request->header('com_employee_id');
                $user_id=$request->header('user_id');
                $employee_id=$request->header('employee_id');
                if($company_id){
                    $page = Page::where('id', $page_id)
                    ->where('company_id', $company_id)->first();
                    return ResponseHelper::Response(
                        'success',
                        " Page by id successfully.",
                        $page,
                        200);
                }elseif($com_employee_id){
                    $page = Page::where('id', $page_id)
                    ->where('company_id', $company_id)
                    ->where('com_employee_id', $com_employee_id)
                    ->first();
                    return ResponseHelper::Response(
                        'success',
                        " Page by id successfully.",
                        $page,
                        200);
                }
                elseif($user_id){
                    $page = Page::where('id', $page_id)
                    ->where('user_id', $user_id)
                    ->first();
                    return ResponseHelper::Response(
                        'success',
                        " Page by id successfully.",
                        $page,
                        200);
                }
                
                elseif($employee_id){
                    $page = Page::where('id', $page_id)
                    ->where('user_id', $user_id)
                    ->where('employee_id', $employee_id)
                    ->first();
                    return ResponseHelper::Response(
                        'success',
                        " Page by id successfully.",
                        $page,
                        200);
                }else{

                    return ResponseHelper::Response(
                        'Fail',
                        "No  Page Found!!",
                        '',
                        200);
                }
            }else{
              
                return ResponseHelper::Response(
                    'Fail',
                    "No  Pageegory Found!!",
                    '',
                    200);  
            }
        }catch (Exception $e) {
           
            return ResponseHelper::exception('Fail',$e->getMessage(),200);
           
        }
        

    }

    public function updatePage(Request $request)
    {
        try{
            $page_id=$request->input('id');
            $page = Page::where('id',$page_id)
            ->first();
            if($page){
                $company_id=$request->header('company_id');
                $com_employee_id=$request->header('com_employee_id');
                $user_id=$request->header('user_id');
                $employee_id=$request->header('employee_id');
                            // dd($request->all());
                $request->validate([
      
                    'name' => 'required|unique:pages,name,'.$page_id.'|max:255',
                    'description' => 'required',
                    
                ]);

                $page->company_id = $company_id;
                $page->com_employee_id = $com_employee_id;
                $page->user_id = $user_id;
                $page->employee_id = $employee_id;
                $page->name = $request->input('name');
                $page->description = $request->input('description');
                $page->update();
                
                return ResponseHelper::Response(
                    'success',
                    " Page Updated successfully.",
                    $page,
                    200);

            }else{
                return ResponseHelper::Response(
                    'Fail',
                    " Page not found !",
                    '',
                    200);
            }


        } catch (Exception $e) {
           
            return ResponseHelper::exception('Fail',$e->getMessage(),200);
           

        }


            

   


    }

    public function deletepage(Request $request)
    {
        $page_id=$request->input('id');
        $page = Page::where('id',$page_id)
        ->first();
        
        if($page){

            $page->delete();
            return ResponseHelper::Out(
                'success',
                "Page Deleted successfully.",
                200);
        }else{
            return ResponseHelper::Response(
                'Fail',
                "No  Page found!",
                '',
                200);
        }
        
    }
}
