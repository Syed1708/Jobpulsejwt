<?php

namespace App\Http\Controllers\frontend\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function LoginPage(){

        return view('pages.admin.auth.login-page');
    }

    public function RegistrationPage(){
 
        return view('pages.admin.auth.registration-page');
    }

    public function SendOtpPage(){

        return view('pages.admin.auth.send-otp-page');
    }

    public function VerifyOTPPage(){

        return view('pages.admin.auth.verify-otp-page');
    }

    public function ResetPasswordPage(){

        return view('pages.admin.auth.reset-pass-page');
    }

    public function DashboardPage(){

        return view('pages.admin.dashboard.dashboard');
    }

    public function ProfilePage(){

        return view('pages.admin.dashboard.profile-page');
    }

}

