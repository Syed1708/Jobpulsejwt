<?php

namespace App\Http\Controllers\api\v1;

use App\Models\BlogCategory;
use App\Models\BlogPage;
use Exception;
use App\Models\Blog;
use App\Helper\JWTToken;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Helper\ResponseHelper;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{

    // frontend
    function index(){ 
        $blogcat = BlogCategory::withCount('blogs')
        ->where('status','active')
        ->get();
        $blog_banner = BlogPage::latest()->first(); 
        return view('pages.blogs', compact('blogcat', 'blog_banner'));
    }

    function blogDetails(Request $request, $id){

        $blog = Blog::findOrFail($id);
        $blog_banner = BlogPage::latest()->first();
        return view('pages.blogdetails', compact('blog', 'blog_banner'));
    }

            // to show recent post in the recent post component with a ajax call
    //this will be a get request
    function recentBlogPosts(Request $request){

        $blogs = Blog::with('category')
        ->where('status','active')
        ->latest()
        ->paginate(10);

            if($blogs){
                return response()->json([
                    'status' => 'success',
                    'data' => $blogs,
                ], 200);
    
            }else{
                return ResponseHelper::Out(
                    'fail',
                    "No blog available.",
                    200);  
            }
    }

        // fitering category listwise posts
        public function getBlogsByCategory($categoryId) {
            $category = BlogCategory::find($categoryId);
            if ($category) {
                $blogs = $category->blogs()->paginate(10);
                return response()->json([
                    'status' => 'success',
                    'data' => $blogs
                ]);
            } else {
                return response()->json([
                    'status' => 'fail',
                    'message' => 'Category not found'
                ]);
            }
        }
    function blogPage():View{
        return view('pages.company.dashboard.blog-page');
    }

    function blogPageAdmin():View{
        return view('pages.admin.dashboard.blog-page');
    }

    public function createBlog(Request $request){
        try{

            // dd($company_id);
            // dd($request->header());
            $request->validate([
                'title' => 'required',
                'description' => 'nullable|string',
                'category' => 'required|string|exists:blog_categories,id',
                'tags' => 'nullable',
                'status' => 'required|string',
                 
                'featured_image' => 'required',
            ]);
    
            
        //Image Upload
        if($request->hasFile('featured_image')){

            $image = $request->file('featured_image');
            $img_name = 'post_image_'.md5((uniqid())).time().'.'.$image->getClientOriginalExtension();
            
            // $img_url="uploads/blog/{$img_name}";
            $img_url = env('APP_URL') . '/uploads/blog/' . $img_name;
            // upload file
            $image->move(public_path('uploads/blog'), $img_name);
            
        }


        $company_id=$request->header('company_id');
        $com_employee_id=$request->header('com_employee_id');
        $user_id=$request->header('user_id');
        $employee_id=$request->header('employee_id');

        //Blog Save
        $blog = Blog::create([
            'company_id' => $company_id,
            'com_employee_id' => $com_employee_id,
            'user_id'=> $user_id,
            'employee_id' => $employee_id,
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'category' => $request->input('category'),
            'tags' => $request->input('tags'),
            'status' => $request->input('status'),
            'featured_image' =>  $img_url,
        ]);
            
            return ResponseHelper::Response(
                'success',
                "Blog created successfully.",
                $blog,
                201);

        } catch (Exception $e) {
           
            return ResponseHelper::exception('Fail',$e->getMessage(),200);
           

        }


 
    }

    public function blogList(Request $request)
    {

        
        $blogs = Blog::all();

        return response()->json([
            'status' => 'success',
            'data' => $blogs
        ],200);

    }
// just company blog list
    public function blogListCompany(Request $request)
    {
        $company_id=$request->header('company_id');
        
        if($company_id){
            $cats = Blog::Where('company_id',$company_id)
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
    public function blogListCompanyEmp(Request $request)
    {
        $company_id=$request->header('company_id');
        $com_employee_id=$request->header('com_employee_id');
    

        if($com_employee_id){
            $cats = Blog::Where('company_id',$company_id)
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

    public function blogListUser(Request $request)
    {
        $user_id=$request->header('user_id');
        // dd($user_id);
        if($user_id){
            $cats = Blog::Where('user_id',$user_id)
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

    public function blogListUserEmp(Request $request)
    {
        $user_id=$request->header('user_id');
        $employee_id=$request->header('employee_id');
    

        if($employee_id){
            $blog = Blog::Where('user_id',$user_id)
            ->Where('employee_id',$employee_id)
            ->latest()->get();
            return response()->json([
                'status' => 'success',
                'data' => $blog
            ],200);
        }else{
            return response()->json([
                'status' => 'Fail',
                'data' => ""
            ],200);  
        }

    }
    public function blogByID(Request $request)
    { 

        
        try{
            $blog_id=$request->input('id');
            $blog = Blog::where('id',$blog_id)
            ->first();
            
            if($blog){

                $company_id=$request->header('company_id');
                $com_employee_id=$request->header('com_employee_id');
                $user_id=$request->header('user_id');
                $employee_id=$request->header('employee_id');
                if($company_id){
                    $blog = Blog::where('id', $blog_id)
                    ->where('company_id', $company_id)->first();
                    return ResponseHelper::Response(
                        'success',
                        "Blog by id successfully.",
                        $blog,
                        200);
                }elseif($com_employee_id){
                    $blog = Blog::where('id', $blog_id)
                    ->where('company_id', $company_id)
                    ->where('com_employee_id', $com_employee_id)
                    ->first();
                    return ResponseHelper::Response(
                        'success',
                        "Blog by id successfully.",
                        $blog,
                        200);
                }
                elseif($user_id){
                    $blog = Blog::where('id', $blog_id)
                    ->first();
                    return ResponseHelper::Response(
                        'success',
                        "Blog by id successfully.",
                        $blog,
                        200);
                }
                
                elseif($employee_id){
                    $blog = Blog::where('id', $blog_id)
                    ->where('user_id', $user_id)
                    ->where('employee_id', $employee_id)
                    ->first();
                    return ResponseHelper::Response(
                        'success',
                        "Blog by id successfully.",
                        $blog,
                        200);
                }else{

                    return ResponseHelper::Response(
                        'Fail',
                        "No Blog Found!!",
                        '',
                        200);
                }
            }else{
              
                return ResponseHelper::Response(
                    'Fail',
                    "No Blog Found!!",
                    '',
                    200);  
            }
    
  
            
            
            
        }catch (Exception $e) {
           
            return ResponseHelper::exception('Fail',$e->getMessage(),200);
           
        }
        

    }

    
    public function updateBlog(Request $request)
    {
        try{
            $blog_id = $request->input('id');
            $blog = Blog::where('id',$blog_id)
            ->first();

            if($blog){
                $company_id=$request->header('company_id');
                $com_employee_id=$request->header('com_employee_id');
                $user_id=$request->header('user_id');
                $employee_id=$request->header('employee_id');
                            // dd($request->all());

                    $request->validate([
                        'title' => 'required',
                        'description' => 'nullable|string',
                        'category' => 'required|string|exists:blog_categories,id',
                        'tags' => 'nullable|',
                        'status' => 'required|string',
                        //image type problem on update
                        'featured_image' => 'sometimes',
                    ]);
             
                    //Image Upload
                    if($request->hasFile('featured_image')){

                        $image = $request->file('featured_image');
                        $img_name = 'post_image_'.md5((uniqid())).time().'.'.$image->getClientOriginalExtension();
                        
                        // $img_url="uploads/{$img_name}";
                        $img_url = env('APP_URL') . '/uploads/blog/' . $img_name;
                        // upload file
                        $image->move(public_path('uploads/blog'), $img_name);

                        // Delete Old File
                        $filePath=$request->input('file_path');
                        File::delete($filePath);

                        $blog->company_id = $company_id;
                        $blog->com_employee_id = $com_employee_id;
                        $blog->user_id = $user_id;
                        $blog->employee_id = $employee_id;
                        $blog->title = $request->input('title');
                        $blog->description = $request->input('description');
                        $blog->category = $request->input('category');
                        $blog->tags = $request->input('tags');
                        $blog->featured_image = $img_url;
                        $blog->status = $request->input('status');
                        $blog->update();
                        return ResponseHelper::Response(
                            'success',
                            "Blog Updated successfully with images",
                            $blog,
                            200);

                    }else{
                        // without image
                        $blog->company_id = $company_id;
                        $blog->com_employee_id = $com_employee_id;
                        $blog->user_id = $user_id;
                        $blog->employee_id = $employee_id;
                        $blog->title = $request->input('title');
                        $blog->description = $request->input('description');
                        $blog->category = $request->input('category');
                        $blog->tags = $request->input('tags');
                        $blog->status = $request->input('status');
                        $blog->update();
                        return ResponseHelper::Response(
                            'success',
                            "Blog Updated successfully.",
                            $blog,
                            200);
                    }
                    
                         


                            

        

            
          

            }else{
                return ResponseHelper::Response(
                    'Fail',
                    "Blog id is missing or wrong !",
                    '',
                    200);
            }



    
            


        } catch (Exception $e) {
           
            return ResponseHelper::exception('Fail',$e->getMessage(),200);
           

        }


    }



    public function deleteBlog(Request $request){

        $blog_id=$request->input('id');
        // $company_id=$request->header('company_id');
        // $com_employee_id=$request->header('com_employee_id');
        // $user_id=$request->header('user_id');
        // $employee_id=$request->header('employee_id');
        $filePath=$request->input('file_path');
        File::delete($filePath);
        $blog = Blog::where('id',$blog_id)
            ->first();
        
        if($blog){

           
            $blog->delete();
            return ResponseHelper::Out(
                'success',
                "Blog Deleted successfully.",
                200);
        }else{
            return ResponseHelper::Response(
                'Fail',
                "No Blog found!",
                '',
                200);
        }
       
    }




}
