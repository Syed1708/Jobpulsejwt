<?php

namespace App\Http\Controllers\api\v1\company;

use Exception;
use App\Models\CmRole;
use Illuminate\View\View;

use App\Models\CmPermission;
use Illuminate\Http\Request;
use App\Helper\ResponseHelper;
// use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Validation\ValidationException;

class CompanyEmployeeRoleController extends Controller
{
    function RolePage():View{
        return view('pages.company.dashboard.role-page');
    }
 
   

    public function createRole(Request $request)
    {
        try{
            // dd($company_id);
            $request->validate([
                'name' => 'required|unique:cm_roles,name',
                'description' => 'nullable|max:255',
                'permissions' => 'required|array', 
                
            ]);
            // dd($dd);
            
            $company_id=$request->header('company_id');
            $permissions = $request->input('permissions');
            // Create the role
            $role = CmRole::create([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'company_id' => $company_id,
            ]);
        
            // Attach permissions
            // $role->permissions()->attach($request->permissions);
                // Attach permissions with company_id
            foreach ($permissions as $permissionId) {
                $role->permissions()->attach($permissionId, ['company_id' => $company_id]);
            }
            return ResponseHelper::Response(
                'success',
                "Employee role created successfully.",
                $role,
                201);
        

        } 
        // catch (ValidationException $e) {
        //     // If validation fails, Laravel throws a ValidationException
        //     return response()->json([
        //         'status' => 'Fail',
        //         'message' => $e->validator->errors()->first(),
        //     ], 422);
            
        // }
        catch (Exception $e) {
           
            return ResponseHelper::exception('Fail',$e->getMessage(),200);
           

        }



    }

    public function roleList(Request $request)
    {
        $comnany_id=$request->header('company_id');
        $roles = CmRole::with('permissions')->where('company_id',$comnany_id)->get();
        return response()->json([
            'status' => 'success',
            'data' => $roles
        ],200);

    }

    // permissions list to show rolepage frontend
    
    public function permissionList(Request $request)
    {
        // $comnany_id=$request->header('company_id');
        $permissions = CmPermission::all();
        return response()->json([
            'status' => 'success',
            'data' => $permissions
        ],200);

    }

    public function roleByID(Request $request)
    { 
        
        
        try{
            $role_id=$request->input('id');
            $compnany_id=$request->header('company_id');
            // dd($compnany_id);
            $role = CmRole::with('permissions')
            ->where('id',$role_id)
            ->where('company_id',$compnany_id)->first();
            // dd($role);
            // $data = $employee->roles()->pluck('com_employee_roles.id')->toArray();
            return ResponseHelper::Response(
                'success',
                "Role by id successfully.",
                $role,
                200);
        }catch (Exception $e) {
           
            return ResponseHelper::exception('Fail',$e->getMessage(),200);
           
        }
        
    }

    public function updateEmployeeRole(Request $request, CmRole $role)
    {
        try{
            // dd($request->all());
            // dd($request->name);
            
            $role_id = $request->input('id');
            // dd($role_id);
            $company_id=$request->header('company_id');
            // dd($role);

            $request->validate([
                'name' => 'required|unique:cm_roles,name,'.$role_id.'|max:255',
                'description' => 'nullable|max:255',
                'permissions' => 'required|array',
            ]);
            // Ensure the role ID is not null
        if (!$role_id) {
            throw new Exception("Role ID is null.");
        }

         // Update role details
         $role = CmRole::where('id', $role_id)
         ->where('company_id', $company_id)
         ->first();
// dd($role);
            if (!$role) {
                throw new Exception("Role not found.");
            }

            $role->name = $request->input('name');
            $role->description = $request->input('description');
            $role->save();
           
        
            // Detach existing permissions
            $role->permissions()->detach();
            // Attach new permissions
            $permissions = CmPermission::whereIn('id', $request->input('permissions'))
            ->pluck('id')
            ->toArray();
            foreach ($permissions as $permissionId) {
                $role->permissions()->attach($permissionId, ['company_id' => $company_id]);
            }
        
            
            

            return ResponseHelper::Response(
                'success',
                "Employee Role Updated successfully.",
                $role,
                200);

        }catch (Exception $e) {
           
            return ResponseHelper::exception('Fail',$e->getMessage(),200);
           

        }


        // return redirect()->route('users.index')->with('success', 'Employee updated successfully.');
    }

    public function deteleRole(Request $request)
    {
        $role_id=$request->input('id');
        $company_id=$request->header('company_id');
        CmRole::where('id',$role_id)
        ->where('company_id',$company_id)
        ->delete();
        return ResponseHelper::Out(
            'success',
            "Employee Role Deleted successfully.",
            200);
        
    }
    
}
