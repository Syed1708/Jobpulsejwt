<?php

namespace App\Http\Controllers\api\v1;

use Exception;
use App\Models\ContactPage;
use Illuminate\Http\Request;
use App\Helper\ResponseHelper;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class ContactPageController extends Controller
{
    public function contactPage(){
        return view('pages.company.dashboard.contact-page');
    }
    function contactDetails(Request $request){
         
        // $id=$request->input('id');
        // $company_id=$request->header('company_id');
        $user_id=$request->header('user_id');
        // dd($company_id);
        $user=ContactPage::where('user_id', '=', $user_id)
        ->first();

        // contact page just for user not for company
        // we can create different contact page for copany also
        // $user=ContactPage::where('user_id', '=', $user_id)
        // ->first();
        // dd($user);
        return response()->json([
            'status' => 'success',
            'message' => 'Request Successful',
            'data' => $user
        ],200);
    }
    public function updateContactDetails(Request $request)
    {
        try{
            // $company_id=$request->header('company_id');
            $user_id=$request->header('user_id');
            // dd($request->all());
            $request->validate([
                'address' => 'required|max:255',
                'phone' => 'required',
                'email' => 'required|email',
                'banner' => 'sometimes',
                
            ]);


            if($request->hasFile('banner')){

                $image = $request->file('banner');
                $img_name = 'contact_image_'.md5((uniqid())).time().'.'.$image->getClientOriginalExtension();
                
                $img_url="uploads/contact/{$img_name}";
                // upload file
                $image->move(public_path('uploads/contact'), $img_name);

                // Delete Old File
                $filePath=$request->input('file_path');
                File::delete($filePath);

                // $contact = ContactPage::where('company_id','=',$company_id)
                $contact = ContactPage::where('user_id', '=', $user_id)
                ->update([
                   'user_id'=> $user_id,
                   'address'=> $request->input('address'),
                   'phone'=> $request->input('phone'),
                   'email'=> $request->input('email'),
                   'banner'=> $img_url,
               ]);

               return ResponseHelper::Response(
                'success',
                "Contact Page updted successfully with banner.",
                $contact,
                200);

            }else{
                // $contact = ContactPage::where('company_id','=',$company_id)
                $contact = ContactPage::where('user_id', '=', $user_id)
                ->update([

                   'user_id'=> $user_id,
                   'address'=> $request->input('address'),
                   'phone'=> $request->input('phone'),
                   'email'=> $request->input('email'),
               ]);

               return ResponseHelper::Response(
                'success',
                "Contact Page updted successfully.",
                $contact,
                200);
            }
            


        } catch (Exception $e) {
           
            return ResponseHelper::exception('Fail',$e->getMessage(),200);
           

        }



    }
}
