<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogPage;
use App\Models\Company;
use App\Models\CompanyProfile;
use App\Models\Job;
use App\Models\JobCategory;
use App\Models\JobPage;
use App\Models\Plugin;
use App\Models\User;
use App\Models\About;
use App\Models\ContactPage;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    // Step 4: Create Super Admin User
    $superAdmin = User::create([
        'name' => 'Super Admin',
        'firstName' => 'Super',
        'lastName' => 'Admin',
        'email' => 'superadmin@example.com',
        'password' => bcrypt('password'), // Hashed password
        'status' => 'active'
    ]);

    $adminID=$superAdmin->id;


    // About::create([
    //     'user_id' => $adminID,
    //     'title' => "Title",
    // ]);

    About::factory()->count(1)->create();
    ContactPage::factory()->count(1)->create();
    JobPage::factory()->count(1)->create();
    BlogPage::factory()->count(1)->create();

    // ContactPage::create([
    //     'user_id' => $adminID,
    // ]);
 
    // Create company users with associated profiles
    Company::factory()->count(10)->create()->each(function ($companyUser) {
        $companyUser->profile()->save(CompanyProfile::factory()->make());
    });

    // Create company users with associated profiles
    JobCategory::factory()->count(10)->create();
    Job::factory()->count(100)->create();

    BlogCategory::factory()->count(10)->create();
    Blog::factory()->count(100)->create();
    
    $plugin = Plugin::create([
        'user_id' => 1,
        'name' => 'Blog Page',
        'description' => 'Blog Description',
        'slug' => 'blogPage',
        'visible_in_menu' => 1,
        'status' => 'active'
    ]);

    // $this->call([
    //     // Add other seeders here if needed
    //     JobSeeder::class,
    // ]);
    //     // Step 2: Create Super Admin Role
    //     $superAdminRole = Role::create([
    //         'user_id' => $superAdmin->id,
    //         'name' => 'super_admin',
    //         'description' => 'Super Admin Role',
    //     ]);
    // // Attach the super admin role to the user
    // $superAdmin->roles()->attach($superAdminRole);


    // // Step 1: Create Permissions
    // $permissions = [
    //     ['name' => 'create_job', 'description' => 'Permission to create job'],
    //     ['name' => 'edit_company_profile', 'description' => 'Permission to edit company profile'],
    //     ['name' => 'manage_users', 'description' => 'Permission to manage users'],
    //     // Add other permissions as needed
    // ];

    // foreach ($permissions as $permissionData) {
    //     Permission::create($permissionData);
    // }



    // // Step 3: Assign Permissions to Role
    // foreach ($permissions as $permissionData) {
    //     $permission = Permission::where('name', $permissionData['name'])->first();
    //     if ($permission) {
    //         $superAdminRole->permissions()->attach($permission);
    //     }
    // }



  

    
     }


}
