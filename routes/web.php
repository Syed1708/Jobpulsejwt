<?php


use App\Models\Job;
use App\Models\Blog;
use Illuminate\Http\Request;
use App\Helper\ResponseHelper;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\v1\JobController;
use App\Http\Middleware\CommonTokenMiddleware;
use App\Http\Controllers\api\v1\BlogController;
use App\Http\Controllers\api\v1\PageController;
use App\Http\Middleware\CompanyTokenMiddleware;
use App\Http\Controllers\api\v1\AboutController;
use App\Http\Middleware\ResetPasswordMiddleware;
use App\Http\Controllers\api\v1\PluginController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Middleware\CandidateTokenMiddleware;
use App\Http\Controllers\api\v1\JobPageController;
use App\Http\Middleware\CompanyEmpTokenMiddleware;
use App\Http\Controllers\api\v1\DashboardController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Middleware\TokenVerificationMiddleware;
use App\Http\Controllers\api\v1\ContactPageController;
use App\Http\Controllers\api\v1\JobCategoryController;
use App\Http\Controllers\api\v1\BlogCategoryController;
use App\Http\Controllers\frontend\AboutFrontController;
use App\Http\Middleware\CompanyResetPasswordMiddleware;
use App\Http\Controllers\frontend\admin\AdminController;
use App\Http\Controllers\api\v1\JobApplicationController;
use App\Http\Middleware\CandidateResetPasswordMiddleware;
use App\Http\Controllers\api\v1\admin\AdminUserController;
use App\Http\Controllers\api\v1\company\CompanyUserController;
use App\Http\Controllers\frontend\companies\CompanyController;
use App\Http\Controllers\api\v1\candidate\CandidateJobController;
use App\Http\Controllers\api\v1\candidate\CandidateUserController;
use App\Http\Controllers\api\v1\company\CompanyEmployeeController;

use App\Http\Controllers\api\v1\candidate\CandidateTrainingController;
use App\Http\Controllers\api\v1\company\CompanyEmployeeRoleController;
use App\Http\Controllers\api\v1\candidate\CandidateEducationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Frontend pages
Route::get('/',[HomeController::class,'index']);

// summany for dashboard admin
Route::get('/adminSummary',[DashboardController::class,'SummaryForAdmin'])->middleware([TokenVerificationMiddleware::class]);
Route::get('/companySummary',[DashboardController::class,'SummaryForCompany'])->middleware([CompanyTokenMiddleware::class]);
Route::get('/candidateSummary',[DashboardController::class,'SummaryForCandidate'])->middleware([CandidateTokenMiddleware::class]);

Route::get('/search', function (Request $request) {
  $term = $request->input('term');
  $jobs = Job::where('title', 'like', "%{$term}%")->paginate(10);
  if ($jobs->isEmpty()) {
    return ResponseHelper::Out(
        'fail',
        "No Job available.",
        200
    );
} else {
    return ResponseHelper::Response(
        'success',
        "Search with title.",
        $jobs,
        200
    );
}

});
// to get categorywise jobposts 
Route::get('/jobCategory/{categoryId}',[JobController::class,'getJobsByCategory']);

// about page
Route::get('/about',[AboutFrontController::class,'index']);

// contact page
Route::get('/contact',[ContactController::class,'index']);

// Job page frontend
Route::get('/recentJob',[JobController::class,'index']);
// Blog page frontend
Route::get('/recentBlog',[BlogController::class,'index']);

// job details 
Route::get('/job/{jobId}',[JobApplicationController::class,'jobDetails']);

// blog details 
Route::get('/blog/{blogId}',[BlogController::class,'blogDetails']);

// contact us
Route::post('/contact-us',[ContactController::class,'sendEmail']);



// apply job
Route::post('/candidate/applyJob/{jobId}',[JobApplicationController::class,'applyJob']);
Route::get('/candidate/jobPreView/{jobId}',[JobApplicationController::class,'jobPreView'])->middleware([CommonTokenMiddleware::class]);

// Cv for candidate
Route::get('/candidate/profilePreview',[JobApplicationController::class,'profilePreview'])->middleware([CommonTokenMiddleware::class]);

// cv for company
Route::get('/company/candidateprofilePreview/{id}',[JobController::class,'candidateprofilePreview']);

// candidate accepted by a company
Route::post('/company/candidateprofileSelected',[JobController::class,'candidateprofileSelected']);
// candidate rejected by a company
Route::post('/company/candidateprofileRejected',[JobController::class,'candidateprofileRejected']);


Route::prefix('admin')->group(function() {

// api routes
Route::post('/login',[AdminUserController::class,'UserLogin']);
Route::post('/register',[AdminUserController::class,'UserRegistration']);

// profile
Route::post('/user-update',[AdminUserController::class,'UpdateProfile'])->middleware([TokenVerificationMiddleware::class]);

// password reset
Route::post('/send-otp',[AdminUserController::class,'SendOTPCode']);
Route::post('/verify-otp',[AdminUserController::class,'VerifyOTP']);
Route::post('/reset-password',[AdminUserController::class,'ResetPassword'])->middleware([ResetPasswordMiddleware::class]);

  // load Blog page
  Route::get('/blogPage',[BlogController::class,'blogPageAdmin'])->middleware([TokenVerificationMiddleware::class]);
  // load Blog Category page
  Route::get('/blogCatPage',[BlogCategoryController::class,'blogCatPageAdmin'])->middleware([TokenVerificationMiddleware::class]);


// Page Routes
Route::get('/userLogin',[AdminController::class,'LoginPage']);
Route::get('/userRegistration',[AdminController::class,'RegistrationPage']);

Route::get('/sendOtp',[AdminController::class,'SendOtpPage']);
Route::get('/verifyOtp',[AdminController::class,'VerifyOTPPage']);
Route::get('/resetPassword',[AdminController::class,'ResetPasswordPage'])->middleware([ResetPasswordMiddleware::class]);

Route::get('/logout',[AdminUserController::class,'UserLogout']);

Route::get('/user-profile',[AdminUserController::class,'UserProfile'])->middleware([TokenVerificationMiddleware::class]);

Route::get('/userProfile',[AdminController::class,'ProfilePage'])->middleware([TokenVerificationMiddleware::class]);

    
Route::get('/dashboard',[AdminController::class,'DashboardPage'])->middleware([TokenVerificationMiddleware::class]);

   
});

Route::prefix('company')->group(function() {

    // api routes
    Route::post('/login',[CompanyUserController::class,'CompanyLogin']);
    Route::post('/register',[CompanyUserController::class,'CompanyRegistration']);
    
    // profile
    Route::post('/company-update',[CompanyUserController::class,'UpdateProfile'])->middleware([CompanyTokenMiddleware::class]);
    
    // password reset
    Route::post('/send-otp',[CompanyUserController::class,'SendOTPCode']);
    Route::post('/verify-otp',[CompanyUserController::class,'VerifyOTP']);
    Route::post('/reset-password',[CompanyUserController::class,'ResetPassword'])->middleware([CompanyResetPasswordMiddleware::class]);
    
    
    
    // company employee login
    Route::get('/employeeLogin',[CompanyEmployeeController::class,'EmployeeLoginpage']);
    Route::post('/employeeLogin',[CompanyEmployeeController::class,'CompanyEmpLogin']);
    //  Dashboard Employee
    Route::get('/empdashboard',[CompanyEmployeeController::class,'EmpDashboardPage'])->middleware([CompanyEmpTokenMiddleware::class]);
    Route::get('/emplogout',[CompanyEmployeeController::class,'CompanyEmpLogout']);

    // company job applications list
    Route::get('/{jobid}/jobApplicationsList',[CompanyUserController::class,'jobApplicationsList'])->middleware([CompanyTokenMiddleware::class]);

    // Page Routes
    Route::get('/companyLogin',[CompanyController::class,'LoginPage']);
    Route::get('/companyRegistration',[CompanyController::class,'RegistrationPage']);
    
    Route::get('/sendOtp',[CompanyController::class,'SendOtpPage']);
    Route::get('/verifyOtp',[CompanyController::class,'VerifyOTPPage']);
    Route::get('/resetPassword',[CompanyController::class,'ResetPasswordPage'])->middleware([CompanyResetPasswordMiddleware::class]);
    
    // logout
    Route::get('/logout',[CompanyUserController::class,'CompanyLogout']);
    // Profile
    Route::get('/company-profile',[CompanyUserController::class,'CompanyProfile'])->middleware([CompanyTokenMiddleware::class]);
    
    // load profile page
    Route::get('/companyProfile',[CompanyController::class,'ProfilePage'])->middleware([CompanyTokenMiddleware::class]);
     
    // load role page
    Route::get('/rolePage',[CompanyEmployeeRoleController::class,'rolePage'])->middleware([CompanyTokenMiddleware::class]);
    
     // load employee page
     Route::get('/employeePage',[CompanyEmployeeController::class,'employeePage'])->middleware([CompanyTokenMiddleware::class]);

 
    //  Dashboard
    Route::get('/dashboard',[CompanyController::class,'DashboardPage'])->middleware([CompanyTokenMiddleware::class]);
    
    // Employee API
    Route::post("/create-employee",[CompanyEmployeeController::class,'createEmployee'])->middleware([CompanyTokenMiddleware::class]);
    Route::get("/list-employee",[CompanyEmployeeController::class,'employeeList'])->middleware([CompanyTokenMiddleware::class]);
    Route::post("/update-employee",[CompanyEmployeeController::class,'updateEmployee'])->middleware([CompanyTokenMiddleware::class]);
    Route::post("/employee-by-id",[CompanyEmployeeController::class,'employeeByID'])->middleware([CompanyTokenMiddleware::class]);
    Route::post("/delete-employee",[CompanyEmployeeController::class,'deteleEmployee'])->middleware([CompanyTokenMiddleware::class]);

     // get all permissions
     Route::get("/list-permissions",[CompanyEmployeeRoleController::class,'permissionList'])->middleware([CompanyTokenMiddleware::class]);
     // Role API
     Route::post("/create-role",[CompanyEmployeeRoleController::class,'createRole'])->middleware([CompanyTokenMiddleware::class]);
     Route::get("/list-role",[CompanyEmployeeRoleController::class,'roleList'])->middleware([CompanyTokenMiddleware::class]);
     Route::post("/update-role",[CompanyEmployeeRoleController::class,'updateEmployeeRole'])->middleware([CompanyTokenMiddleware::class]);
     Route::post("/role-by-id",[CompanyEmployeeRoleController::class,'roleByID'])->middleware([CompanyTokenMiddleware::class]);
     Route::post("/delete-role",[CompanyEmployeeRoleController::class,'deteleRole'])->middleware([CompanyTokenMiddleware::class]);

     Route::get('/blogPage',[BlogController::class,'blogPage'])->middleware([CompanyTokenMiddleware::class]);
     
       
    });

Route::prefix('candidate')->group(function() {

      // api routes
      Route::post('/login',[CandidateUserController::class,'CandidateLogin']);
      Route::post('/register',[CandidateUserController::class,'CandidateRegistration']);
      
      // profile
      Route::post('/candidate-update',[CandidateUserController::class,'UpdateProfile'])->middleware([CommonTokenMiddleware::class]);
      
      // password reset
      Route::post('/send-otp',[CandidateUserController::class,'SendOTPCode']);
      Route::post('/verify-otp',[CandidateUserController::class,'VerifyOTP']);
      Route::post('/reset-password',[CandidateUserController::class,'ResetPassword'])->middleware([CandidateResetPasswordMiddleware::class]);
      
       // Candidate Education API
       Route::get('/candidateEducation',[CandidateEducationController::class,'educationPage'])->middleware([CommonTokenMiddleware::class]);
    Route::post("/create-education",[CandidateEducationController::class,'createEducation'])->middleware([CommonTokenMiddleware::class]);
    Route::get("/list-education",[CandidateEducationController::class,'educationListCandidate'])->middleware([CommonTokenMiddleware::class]);
    Route::post("/update-education",[CandidateEducationController::class,'updateEduacation'])->middleware([CommonTokenMiddleware::class]);
    Route::post("/education-by-id",[CandidateEducationController::class,'educationByID'])->middleware([CommonTokenMiddleware::class]);
    Route::post("/delete-education",[CandidateEducationController::class,'deleteEducation'])->middleware([CommonTokenMiddleware::class]);
    
      // Candidate Training API
      Route::get('/candidateTraining',[CandidateTrainingController::class,'TrainingPage'])->middleware([CommonTokenMiddleware::class]);
      Route::post("/create-training",[CandidateTrainingController::class,'createTraining'])->middleware([CommonTokenMiddleware::class]);
      Route::get("/list-training",[CandidateTrainingController::class,'trainingListCandidate'])->middleware([CommonTokenMiddleware::class]);
      Route::post("/update-training",[CandidateTrainingController::class,'updateTraining'])->middleware([CommonTokenMiddleware::class]);
      Route::post("/training-by-id",[CandidateTrainingController::class,'trainingByID'])->middleware([CommonTokenMiddleware::class]);
      Route::post("/delete-training",[CandidateTrainingController::class,'deleteTraining'])->middleware([CommonTokenMiddleware::class]);
        
     // Candidate Jobs API
     Route::get('/candidateJob',[CandidateJobController::class,'JobPage'])->middleware([CommonTokenMiddleware::class]);
     Route::post("/create-job",[CandidateJobController::class,'createJob'])->middleware([CommonTokenMiddleware::class]);
     Route::get("/list-job",[CandidateJobController::class,'jobListCandidate'])->middleware([CommonTokenMiddleware::class]);
     Route::post("/update-job",[CandidateJobController::class,'updateJob'])->middleware([CommonTokenMiddleware::class]);
     Route::post("/job-by-id",[CandidateJobController::class,'jobByID'])->middleware([CommonTokenMiddleware::class]);
     Route::post("/delete-job",[CandidateJobController::class,'deleteJob'])->middleware([CommonTokenMiddleware::class]);
  
      // Page Routes
      Route::get('/candidateLogin',[CandidateUserController::class,'LoginPage']);
      Route::get('/candidateRegistration',[CandidateUserController::class,'RegistrationPage']);
      
      Route::get('/sendOtp',[CandidateUserController::class,'SendOtpPage']);
      Route::get('/verifyOtp',[CandidateUserController::class,'VerifyOTPPage']);
      Route::get('/resetPassword',[CandidateUserController::class,'ResetPasswordPage'])->middleware([CandidateResetPasswordMiddleware::class]);
      
      // logout
      Route::get('/logout',[CandidateUserController::class,'CandidateLogout']);
      // Profile
      Route::get('/candidate-profile',[CandidateUserController::class,'CandidateProfile'])->middleware([CommonTokenMiddleware::class]);
      
      // load profile page
      Route::get('/candidateProfile',[CandidateUserController::class,'ProfilePage'])->middleware([CommonTokenMiddleware::class]);
       
  
    
      //  Dashboard
      Route::get('/dashboard',[CandidateUserController::class,'DashboardPage'])->middleware([CommonTokenMiddleware::class]);
      // jobapplication candidate
      Route::get('/jobapplication',[CandidateUserController::class,'jobapplication'])->middleware([CommonTokenMiddleware::class]);
      // jobapplications view page
      Route::get('/jobapplicationPage',[CandidateUserController::class,'jobapplicationPage'])->middleware([CommonTokenMiddleware::class]);
      
    
         
      });



  // load recent blog posts with category no middleware its frontend
Route::get('/recentBlogPosts',[BlogController::class,'recentBlogPosts']);

// search blog
Route::get('/searchblog', function (Request $request) {
  $term = $request->input('term');
  $blogs = Blog::where('title', 'like', "%{$term}%")->paginate(10);
  if ($blogs->isEmpty()) {
    return ResponseHelper::Out(
        'fail',
        "No Blog available.",
        200
    );
} else {
    return ResponseHelper::Response(
        'success',
        "Search with title.",
        $blogs,
        200
    );
}

});

// to get categorywise jobposts 
Route::get('/blogCategory/{categoryId}',[BlogController::class,'getBlogsByCategory']);

// load job page backend
Route::get('/jobs',[JobController::class,'jobPage'])->middleware([CommonTokenMiddleware::class]);
// single job view
Route::get('/jobs/{id}',[JobController::class,'jobView'])->middleware([CommonTokenMiddleware::class]);
// Candidate apply for job view
Route::get('/jobs/{jobid}/appliedCandidate',[JobController::class,'appliedCandidateView'])->middleware([CommonTokenMiddleware::class]);
// load job Category page
Route::get('/jobCats',[JobCategoryController::class,'jobCatPage'])->middleware([CommonTokenMiddleware::class]);
// load recent job posts with category no middleware its frontend
Route::get('/recentJobPosts',[JobController::class,'recentJobPosts']);


// load  plugin page for admin
Route::get('/admin/pluginPage',[PluginController::class,'pluginPage'])->middleware([CommonTokenMiddleware::class]);

// load  plugin page for company
Route::get('/company/pluginPage',[PluginController::class,'plugins'])->middleware([CommonTokenMiddleware::class]);

 //  API for about pages
Route::get("/user-about",[AboutController::class,'UserAbout'])->middleware([CommonTokenMiddleware::class]);
 Route::post("/update-about",[AboutController::class,'updateAbout'])->middleware([CommonTokenMiddleware::class]);

// About page
Route::get("/aboutPage",[AboutController::class,'aboutPage'])->middleware([CommonTokenMiddleware::class]);


 //  API for contact pages
 Route::get("/contact-details",[ContactPageController::class,'contactDetails'])->middleware([CommonTokenMiddleware::class]);
 Route::post("/update-contact",[ContactPageController::class,'updateContactDetails'])->middleware([CommonTokenMiddleware::class]);

// contact page
Route::get("/contactPage",[ContactPageController::class,'contactPage'])->middleware([CommonTokenMiddleware::class]);

 //  API for job pages
 Route::get("/job-details",[JobPageController::class,'jobDetails'])->middleware([CommonTokenMiddleware::class]);
 Route::post("/update-jobpage",[JobPageController::class,'updateJobDetails'])->middleware([CommonTokenMiddleware::class]);

// job page backend
Route::get("/jobPage",[JobPageController::class,'jobPage'])->middleware([CommonTokenMiddleware::class]);

// job page
Route::get("/pages",[PageController::class,'allPage'])->middleware([CommonTokenMiddleware::class]);

 //  API for jobs
 Route::post("/create-job",[JobController::class,'createJob'])->middleware([CommonTokenMiddleware::class]);
 Route::get("/list-job",[JobController::class,'jobList'])->middleware([CommonTokenMiddleware::class]);
 Route::get("/list-job-company",[JobController::class,'jobListCompany'])->middleware([CommonTokenMiddleware::class]);
 Route::get("/list-job-com-employee",[JobController::class,'jobListCompanyEmp'])->middleware([CommonTokenMiddleware::class]);
 Route::get("/list-job-user",[JobController::class,'jobListUser'])->middleware([CommonTokenMiddleware::class]);
 Route::get("/list-job-user-emp",[JobController::class,'jobListUserEmp'])->middleware([CommonTokenMiddleware::class]);

 Route::post("/update-job",[JobController::class,'updateJob'])->middleware([CommonTokenMiddleware::class]);
 Route::post("/job-by-id",[JobController::class,'jobByID'])->middleware([CommonTokenMiddleware::class]);
 Route::post("/delete-job",[JobController::class,'deleteJob'])->middleware([CommonTokenMiddleware::class]);

 //  API for jobs categories
 Route::post("/create-category",[JobCategoryController::class,'createCat'])->middleware([CommonTokenMiddleware::class]);
 Route::get("/list-category",[JobCategoryController::class,'catList'])->middleware([CommonTokenMiddleware::class]);
 Route::get("/list-category-company",[JobCategoryController::class,'categoryListCompany'])->middleware([CommonTokenMiddleware::class]);
 Route::get("/list-category-company-emp",[JobCategoryController::class,'categoryListCompanyEmp'])->middleware([CommonTokenMiddleware::class]);
 Route::get("/list-category-user",[JobCategoryController::class,'categoryListUser'])->middleware([CommonTokenMiddleware::class]);
 Route::get("/list-category-user-emp",[JobCategoryController::class,'categoryListUserEmp'])->middleware([CommonTokenMiddleware::class]);
 Route::post("/update-category",[JobCategoryController::class,'updateCat'])->middleware([CommonTokenMiddleware::class]);
 Route::post("/category-by-id",[JobCategoryController::class,'catByID'])->middleware([CommonTokenMiddleware::class]);
 Route::post("/delete-category",[JobCategoryController::class,'deletecat'])->middleware([CommonTokenMiddleware::class]);

  //  API for blogs
  Route::post("/create-blog",[BlogController::class,'createBlog'])->middleware([CommonTokenMiddleware::class]);
  Route::get("/list-blog",[BlogController::class,'blogList'])->middleware([CommonTokenMiddleware::class]);
  Route::get("/list-blog-company",[BlogController::class,'blogListCompany'])->middleware([CommonTokenMiddleware::class]);
  Route::get("/list-blog-com-employee",[BlogController::class,'blogListCompanyEmp'])->middleware([CommonTokenMiddleware::class]);
  Route::get("/list-blog-user",[BlogController::class,'blogListUser'])->middleware([CommonTokenMiddleware::class]);
  Route::get("/list-blog-user-emp",[BlogController::class,'blogListUserEmp'])->middleware([CommonTokenMiddleware::class]);
 
  Route::post("/update-blog",[BlogController::class,'updateBlog'])->middleware([CommonTokenMiddleware::class]);
  Route::post("/blog-by-id",[BlogController::class,'blogByID'])->middleware([CommonTokenMiddleware::class]);
  Route::post("/delete-blog",[BlogController::class,'deleteBlog'])->middleware([CommonTokenMiddleware::class]);

   //  API for Blog categories
 Route::post("/create-blog-category",[BlogCategoryController::class,'createCat'])->middleware([CommonTokenMiddleware::class]);
 Route::get("/list-blog-category",[BlogCategoryController::class,'catList'])->middleware([CommonTokenMiddleware::class]);
 Route::get("/list-blog-category-company",[BlogCategoryController::class,'categoryListCompany'])->middleware([CommonTokenMiddleware::class]);
 Route::get("/list-blog-category-company-emp",[BlogCategoryController::class,'categoryListCompanyEmp'])->middleware([CommonTokenMiddleware::class]);
 Route::get("/list-blog-category-user",[BlogCategoryController::class,'categoryListUser'])->middleware([CommonTokenMiddleware::class]);
 Route::get("/list-blog-category-user-emp",[BlogCategoryController::class,'categoryListUserEmp'])->middleware([CommonTokenMiddleware::class]);
 Route::post("/update-blog-category",[BlogCategoryController::class,'updateCat'])->middleware([CommonTokenMiddleware::class]);
 Route::post("/category-blog-by-id",[BlogCategoryController::class,'catByID'])->middleware([CommonTokenMiddleware::class]);
 Route::post("/delete-blog-category",[BlogCategoryController::class,'deletecat'])->middleware([CommonTokenMiddleware::class]);


  //  API for Pages
  Route::post("/create-page",[PageController::class,'createPage'])->middleware([CommonTokenMiddleware::class]);
  Route::get("/list-page",[PageController::class,'pageList'])->middleware([CommonTokenMiddleware::class]);
  Route::get("/list-page-company",[PageController::class,'pageListCompany'])->middleware([CommonTokenMiddleware::class]);
  Route::get("/list-page-company-emp",[PageController::class,'pageListCompanyEmp'])->middleware([CommonTokenMiddleware::class]);
  Route::get("/list-page-user",[PageController::class,'pageListUser'])->middleware([CommonTokenMiddleware::class]);
  Route::get("/list-page-user-emp",[PageController::class,'pageListUserEmp'])->middleware([CommonTokenMiddleware::class]);
  Route::post("/update-page",[PageController::class,'updatePage'])->middleware([CommonTokenMiddleware::class]);
  Route::post("/page-by-id",[PageController::class,'pageByID'])->middleware([CommonTokenMiddleware::class]);
  Route::post("/delete-page",[PageController::class,'deletepage'])->middleware([CommonTokenMiddleware::class]);

    //  API for pluing
    Route::post("/create-plugin",[PluginController::class,'createPlugin'])->middleware([CommonTokenMiddleware::class]);
    Route::get("/list-plugin",[PluginController::class,'pluginList'])->middleware([CommonTokenMiddleware::class]);
    Route::get("/list-plugin-company",[PluginController::class,'pluginListCompany'])->middleware([CommonTokenMiddleware::class]);
  
    Route::get("/list-plugin-user",[PluginController::class,'pluginListUser'])->middleware([CommonTokenMiddleware::class]);
    
    Route::post("/update-plugin",[PluginController::class,'updatePlugin'])->middleware([CommonTokenMiddleware::class]);
    Route::post("/plugin-by-id",[PluginController::class,'pluginByID'])->middleware([CommonTokenMiddleware::class]);
    Route::post("/delete-plugin",[PluginController::class,'deleteplugin'])->middleware([CommonTokenMiddleware::class]);

    // Toggle visibility of a plugin page
Route::put('/plugin-pages/{id}/toggle-visibility', [PluginController::class, 'toggleVisibility'])->middleware([CommonTokenMiddleware::class]);