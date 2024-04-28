<?php

namespace App\Http\Controllers\api\v1;

use Exception;
use App\Models\Plugin;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Helper\ResponseHelper;
use App\Http\Controllers\Controller;

class PluginController extends Controller
{
    //

    // for admin
    function pluginPage():View{
        return view('pages.admin.dashboard.plugin-page');
    }

// for company to active or deactive plugins
    function plugins():View{
        return view('pages.company.dashboard.plugins');
    }
    public function toggleVisibility(Request $request, $id)
    {
        $company_id=$request->header('company_id');
        // dd($company_id);
        $plugin_id =$request->input('id'); 
        $plugin = Plugin::findOrFail($id);

        $pluginPage = Plugin::where('company_id',$company_id)
        ->first();
        // dd($pluginPage);
        
        // dd($plugin->slug);
        if (!$pluginPage) {
            
            $pluginPage = Plugin::create([
                'id' => $plugin_id,
                'name' => $plugin->name,
                'description' => $plugin->description,
                'slug' => $plugin->slug,
                'company_id' => $company_id,
                'status' => 'active',
                'visible_in_menu' => true, 
            ]);
    
            return response()->json(['message' => 'Plugin page created and visibility set']);
        }else{
            // dd('ok');
        // Toggle visibility
        $pluginPage->visible_in_menu = !$pluginPage->visible_in_menu;
        $pluginPage->update();
      
       return response()->json(['message' => 'Visibility toggled successfully']);

        };

 
    }


    public function createPlugin(Request $request)
    {
        try{
            // 
            $user_id=$request->header('user_id');
            // dd($request->all());
            $request->validate([
                'name' => 'required|max:255|unique:plugins,name',
                'description' => 'required|max:255|',
                'status' => 'required|in:active,inactive',
                'visible_in_menu' => 'required|boolean',
            ]);
    
            // $visible_in_menu = filter_var($request->input('visible_in_menu'), FILTER_VALIDATE_BOOLEAN);

            $plugin = Plugin::create([
                'user_id' => $user_id,
                
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'status' => $request->input('status'),
                'visible_in_menu' => $request->input('visible_in_menu'),
            ]);
            
            return ResponseHelper::Response(
                'success',
                "Plugin created successfully.",
                $plugin,
                201);

        } catch (Exception $e) {
           
            return ResponseHelper::exception('Fail',$e->getMessage(),200);
           

        }



    }

    public function pluginList(Request $request)
    {

        $plugins = Plugin::all();

        return response()->json([
            'status' => 'success',
            'data' => $plugins
        ],200);

    }

    public function pluginListCompany(Request $request)
    {
        $company_id=$request->header('company_id');
        
        if($company_id){
            $plugins = Plugin::Where('company_id',$company_id)
            ->latest()->get();
            return response()->json([
                'status' => 'success',
                'data' => $plugins
            ],200);

        }else{
            return response()->json([
                'status' => 'Fail',
                'data' => ""
            ],200);  
        }
        

    }

  
    public function pluginListUser(Request $request)
    {
        $user_id= 1;
        // $user_id=$request->header('user_id');
        // dd($user_id);
        if($user_id){
            $plugins = Plugin::Where('user_id',$user_id)
            ->latest()->get();
            return response()->json([
                'status' => 'success',
                'data' => $plugins
            ],200);
        }
       



    }



    public function pluginByID(Request $request)
    { 

            

        
        try{
            $plugin_id=$request->input('id');
            // $user_id=$request->header('user_id');
            $plugin = Plugin::where('id', $plugin_id)
                    ->first();
            // dd($plugin);

            if($plugin){
                    return ResponseHelper::Response(
                        'success',
                        " Plugin by id successfully.",
                        $plugin,
                        200);
                
            }else{
              
                return ResponseHelper::Response(
                    'Fail',
                    "No  Plugin Found!!",
                    '',
                    200);  
            }
        }catch (Exception $e) {
           
            return ResponseHelper::exception('Fail',$e->getMessage(),200);
           
        }
        

    }

    public function updatePlugin(Request $request)
    {
        try{
            $plugin_id=$request->input('id');
            $plugin = Plugin::where('id',$plugin_id)
            ->first();

            if($plugin){
                $user_id=$request->header('user_id');
                            // dd($request->all());
                $request->validate([
      
                    // 'name' => 'required|unique:plugins,name,'.$plugin_id.'|max:255',
                    // 'description' => 'required|max:255|',
                    'status' => 'required|in:active,inactive',
                    'visible_in_menu' => 'required|boolean',
                    
                ]);
                $copmany_id = $plugin->company_id;
                // dd($copmany_id);
                // $visible_in_menu = filter_var($request->input('visible_in_menu'), FILTER_VALIDATE_BOOLEAN);
                if($copmany_id){
                    // $plugin->user_id = $user_id;
                    $plugin->status = $request->input('status');
                    $plugin->visible_in_menu = $request->input('visible_in_menu');
                    $plugin->update();
                }else {
                    $plugin->user_id = $user_id;
                    $plugin->status = $request->input('status');
                    $plugin->visible_in_menu = $request->input('visible_in_menu');
                    $plugin->update();
                }
                
                
                return ResponseHelper::Response(
                    'success',
                    " Plugin Updated successfully.",
                    $plugin,
                    200);

            }else{
                return ResponseHelper::Response(
                    'Fail',
                    " Plugin not found !",
                    '',
                    200);
            }


        } catch (Exception $e) {
           
            return ResponseHelper::exception('Fail',$e->getMessage(),200);
           

        }


            

   


    }

    public function deleteplugin(Request $request)
    {
        $plugin_id=$request->input('id');
        $plugin = Plugin::where('id',$plugin_id)
        ->first();
        
        if($plugin){

            $plugin->delete();
            return ResponseHelper::Out(
                'success',
                "Plugin Deleted successfully.",
                200);
        }else{
            return ResponseHelper::Response(
                'Fail',
                "No Plugin found!",
                '',
                200);
        }
        
    }

}
