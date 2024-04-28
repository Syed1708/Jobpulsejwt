<?php

namespace App\Http\Controllers\companies;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CopmanyDashboardController extends Controller
{
    //
    
    function index(){

        return view('pages.dashboardCompany.dashboard');
    }
}
