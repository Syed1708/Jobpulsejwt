<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('firstName', 50)->nullable();
            $table->string('lastName', 50)->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('otp', 10);
            $table->string('password');
            // $table->string('userType')->default('user'); //user,company,candidate
            $table->string('status')->default('inactive');
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('cm_roles', function (Blueprint $table) {
        
            $table->id();
            // $table->unsignedBigInteger('com_employee_id');

            // $table->foreign('com_employee_id')->references('id')->on('com_employees')
            //     ->cascadeOnUpdate()->restrictOnDelete();
            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')->references('id')->on('companies')->cascadeOnUpdate()->restrictOnDelete();
           
            $table->string('name');
            $table->string('description')->nullable();
            $table->timestamps();
        
        });

        Schema::create('com_employees', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_id');
 
            $table->foreign('company_id')->references('id')->on('companies')
                ->cascadeOnUpdate()->restrictOnDelete();
            $table->unsignedBigInteger('role_id');

            $table->foreign('role_id')->references('id')->on('cm_roles')
                ->cascadeOnUpdate()->restrictOnDelete();
           

            $table->string('name', 50);
            $table->string('firstName', 50);
            $table->string('lastName', 50);
            $table->string('email')->unique();
            $table->string('otp', 10);
            $table->string('password');
            // $table->string('userType')->default('user'); //user,company,candidate
            $table->string('status')->default('inactive');
            $table->timestamps();
        });



        Schema::create('cm_permissions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->nullable();
            $table->timestamps();
        });

        Schema::create('cm_permission_cm_role', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cm_role_id');
            $table->unsignedBigInteger('cm_permission_id');
            $table->unsignedBigInteger('company_id'); // Add company_id column
        
            $table->foreign('cm_role_id')->references('id')->on('cm_roles')->onDelete('cascade');
            $table->foreign('cm_permission_id')->references('id')->on('cm_permissions')->onDelete('cascade');
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade'); // Add foreign key constraint
        
            // Define the unique constraint to ensure uniqueness of role-permission-company combinations we can use also primary instead unique
            $table->unique(['cm_role_id', 'cm_permission_id', 'company_id'], 'unique_role_permission_company');
        
            $table->timestamps();
        });

        Schema::create('cm_role_com_employee', function (Blueprint $table) {
            $table->unsignedBigInteger('cm_role_id');
            $table->unsignedBigInteger('com_employee_id');
            $table->unsignedBigInteger('company_id');
        
            $table->foreign('cm_role_id')->references('id')->on('cm_roles');
            $table->foreign('com_employee_id')->references('id')->on('com_employees')->onDelete('cascade'); 
            $table->foreign('company_id')->references('id')->on('companies');
        
            // preventhing duplicate entry
        
            $table->primary(['cm_role_id', 'com_employee_id', 'company_id']);
            $table->timestamps();
        });
        

        Schema::create('company_profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_id');

            $table->foreign('company_id')->references('id')->on('companies')
                ->cascadeOnUpdate()->restrictOnDelete();
            $table->string('name');
            $table->longText('description')->nullable();
            $table->string('logo')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email')->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::dropIfExists('company_profiles');
        Schema::dropIfExists('cm_role_com_employee');
        Schema::dropIfExists('cm_permission_cm_role');
        Schema::dropIfExists('cm_permissions');
        Schema::dropIfExists('com_employees');
        Schema::dropIfExists('cm_roles');
        Schema::dropIfExists('companies');
    }
};
