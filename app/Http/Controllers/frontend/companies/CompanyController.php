<?php

namespace App\Http\Controllers\frontend\companies;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function LoginPage(){

        return view('pages.company.auth.login-page');
    }

    public function RegistrationPage(){
 
        return view('pages.company.auth.registration-page');
    }

    public function SendOtpPage(){

        return view('pages.company.auth.send-otp-page');
    }

    public function VerifyOTPPage(){

        return view('pages.company.auth.verify-otp-page');
    }

    public function ResetPasswordPage(){

        return view('pages.company.auth.reset-pass-page');
    }

    public function DashboardPage(){

        return view('pages.company.dashboard.dashboard');
    }

    public function ProfilePage(){

        return view('pages.company.dashboard.profile-page');
    }
}
