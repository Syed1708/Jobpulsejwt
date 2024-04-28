<?php

namespace App\Http\Controllers\api\v1\company;

use Exception;

use App\Helper\JWTToken;
use Illuminate\View\View;
use App\Models\ComEmployee;
use Illuminate\Http\Request;
use App\Helper\ResponseHelper;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class CompanyEmployeeController extends Controller
{
    function EmployeePage():View{
        return view('pages.company.dashboard.employee-page');
    }

    function EmployeeLoginpage():View{
        return view('pages.company.employee.login-page');
    }
    function EmpDashboardPage():View{
        return view('pages.company.employee.dashboard');
    }
    function CompanyEmpLogin(Request $request){

        $request->validate([
            
            'email' => 'required|string|email',
            'password' => 'required|string|min:3',
        ]);
        // dd($request->all());
        $email = $request->input('email');
        $password = $request->input('password');
 
        $employee = ComEmployee::where('email', $email)->first();
            // dd($employee);
            // $pp = Hash::make($request->input('password'));
            // $2y$12$VuhkqRNFC8oLf2kjF64mM.ehaOXVzO4FAqNqN/VQffZ5JLj1MROL6
            // $2y$12$WakAuH9fZOsN/HTAyc9a1eq1uRWetUbSeqEnh7mPI6hml9iN7PnH2
            // dd($employee->password);

        if (!$employee || !Hash::check($password, $employee->password)) {
            return ResponseHelper::Out(
                'faild',
                "Company Employee Not Found",
                200);
        }else{
            $token=JWTToken::CreateToken($email,$employee->company_id,$employee->id);
            

             return response()->json([
                'status' => 'success',
                'message' => 'Company Employee Login Successful',
                'token' => $token
            ],200)->cookie('companyEmptoken', $token, 60 * 24 * 30);
        }


    }
    function CompanyEmpLogout(){

        return redirect('/company/employeeLogin')->cookie('companyEmptoken','',-1);
    }
    public function createEmployee(Request $request)
    {
        try{
            $company_id=$request->header('company_id');
            // dd($request->all());
            $request->validate([
                'name' => 'required|max:255',
                'email' => 'required|email|unique:com_employees,email',
                'firstName' => 'required',
                'lastName' => 'required',
                'status' => 'required',
                'role_id' => 'required|exists:cm_roles,id',
                // 'company_id' => 'required|exists:companies,id',
            ]);
    
            // Set a default password
            // $password = $request->merge(['password' => Hash::make('password')]); // set default password == password
            // then create a user
            $employee = ComEmployee::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'firstName' => $request->input('firstName'),
                'lastName' => $request->input('lastName'),
                'password' => Hash::make('password'),
                // 'password' => $password,
                'status' => $request->input('status'),
                'role_id' => $request->input('role_id'),
                'company_id' => $company_id,
            ]);
            // dd($user);
            //assign role
            // $employee->roles()->attach($request->role_id);
            $employee->roles()->attach($request->role_id, ['company_id' => $company_id]);
    
            return ResponseHelper::Response(
                'success',
                "Employee created successfully.",
                $employee,
                201);

        } catch (Exception $e) {
           
            return ResponseHelper::exception('Fail',$e->getMessage(),200);
           

        }



    }

    public function employeeList(Request $request)
    {
        $company_id=$request->header('company_id');
        $employees = ComEmployee::with('roles')->where('company_id',$company_id)->get();
        return response()->json([
            'status' => 'success',
            'data' => $employees
        ],200);

    }

    public function employeeByID(Request $request)
    { 
        $employee_id=$request->input('id');
        $compnany_id=$request->header('company_id');

        
        try{
            $employee_id=$request->input('id');
            $compnany_id=$request->header('company_id');
            $employee = ComEmployee::with('roles')->where('id',$employee_id)->where('company_id',$compnany_id)->first();
            // $data = $employee->roles()->pluck('com_employee_roles.id')->toArray();
            return ResponseHelper::Response(
                'success',
                "Employee by id successfully.",
                $employee,
                200);
        }catch (Exception $e) {
           
            return ResponseHelper::exception('Fail',$e->getMessage(),200);
           
        }
        

        // return view('pages.users.edit', compact('user', 'roles', 'data'));
        // return view('pages.users.edit', compact('user', 'roles'));
    }

    public function updateEmployee(Request $request)
    {
        try{
            $employee_id=$request->input('id');
            $company_id=$request->header('company_id');
            // dd($employee->id);
            $request->validate([
                'name' => 'required|max:255',
                'email' => ['required', 'email', Rule::unique('com_employees')->ignore($employee_id)],
                'firstName' => 'required',
                'lastName' => 'required',
                'status' => 'required',
                'password' => 'sometimes|min:3|confirmed',
                'role_id' => 'required|exists:cm_roles,id',
            ]);


            

            $employee = ComEmployee::where('id',$employee_id)
            ->where('company_id',$company_id)->first();
        
            
            $employee->name = $request->input('name');
            $employee->email = $request->input('email');
            $employee->firstName = $request->input('firstName');
            $employee->lastName = $request->input('lastName');
            $employee->status = $request->input('status');
            $employee->role_id = $request->input('role_id');
            $employee->update();

            if($request->has('password')){
                // ComEmployee::update(['password' => bcrypt($request->input('password'))]);
                $employee->password = bcrypt($request->input('password'));
            }
 
            // Detach existing roles
            $employee->roles()->detach();
            // then add new role
            $employee->roles()->attach($request->role_id, ['company_id' => $company_id]);
    


            return ResponseHelper::Response(
                'success',
                "Employee Updated successfully.",
                $employee,
                200);

        }catch (Exception $e) {
           
            return ResponseHelper::exception('Fail',$e->getMessage(),200);
           

        }


        // return redirect()->route('users.index')->with('success', 'Employee updated successfully.');
    }

    public function deteleEmployee(Request $request)
    {
        $employee_id=$request->input('id');
        $company_id=$request->header('company_id');
        
        ComEmployee::where('id',$employee_id)
        ->where('company_id',$company_id)
        ->delete();
        return ResponseHelper::Out(
            'success',
            "Employee Deleted successfully.",
            200);
        
    }
    
}
