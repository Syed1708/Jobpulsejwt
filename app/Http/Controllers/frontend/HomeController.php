<?php

namespace App\Http\Controllers\frontend;

use App\Models\Job;
use App\Models\Blog;
use App\Models\Company;
use App\Models\JobCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        $posts = Blog::where('status', 'published')->latest()->get();
 
        $companies = Company::with(['jobs', 'profile'])
        ->withCount('jobs')
        ->orderByDesc('jobs_count')
        ->latest()
        ->take(6)
        ->get();
        // dd(($companies));
        $jobs = Job::with('category')
        ->latest()
        ->paginate(10);
        // dd($jobs);
        
        $jobcat = JobCategory::withCount('jobs')->get();

        return view('pages.home2', compact('posts','companies','jobs','jobcat'));
    }
}
