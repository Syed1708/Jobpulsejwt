<?php

namespace App\Http\Controllers\frontend;

use App\Models\About;
use App\Models\Job;
use App\Models\Blog;
use App\Models\Company;
use App\Models\JobCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutFrontController extends Controller
{

        // frontend page
    public function index(){
        // normally first user id = 1
        $about = About::where('user_id', 1)->first();
        // dd($about);
        $companies = Company::with(['jobs', 'profile'])
        ->withCount('jobs')
        ->orderByDesc('jobs_count')
        ->latest()
        ->take(6)
        ->get();
        // dd(($companies));
        

        return view('pages.about', compact('about','companies'));
    }
}
