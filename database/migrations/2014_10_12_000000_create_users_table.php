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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('firstName', 50);
            $table->string('lastName', 50);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('otp', 10);
            $table->string('password');
            // $table->string('userType')->default('user'); //user,company,candidate
            $table->string('status')->default('inactive');
            $table->rememberToken();
            $table->timestamps();
        });


        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnUpdate()->restrictOnDelete();
           
            $table->string('name');
            $table->string('description')->nullable();
            $table->timestamps();
        });

        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnUpdate()->restrictOnDelete();

            $table->unsignedBigInteger('role_id');

            $table->foreign('role_id')->references('id')->on('roles')
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

        Schema::create('permissions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->nullable();
            $table->timestamps();
        });

        Schema::create('permission_role', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('role_id');
            $table->unsignedBigInteger('permission_id');
            $table->unsignedBigInteger('user_id')->default(1); // Add user_id column
        
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->foreign('permission_id')->references('id')->on('permissions')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // Add foreign key constraint
        
            // Define the unique constraint to ensure uniqueness of role-permission-company combinations we can use also primary instead unique
            $table->unique(['role_id', 'permission_id', 'user_id'], 'unique_role_permission_user');
        

            $table->timestamps();
        });
        Schema::create('role_employee', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('role_id');
            $table->unsignedBigInteger('employee_id');
            $table->unsignedBigInteger('user_id')->default(1);
        
            $table->foreign('role_id')->references('id')->on('roles');
            $table->foreign('employee_id')->references('id')->on('employees'); 
            $table->foreign('user_id')->references('id')->on('users');
        
            // preventhing duplicate entry
        
            $table->unique(['role_id', 'employee_id', 'user_id'], 'unique_role_employee_user');
        
            $table->timestamps();
        });
        Schema::create('role_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('role_id');
            $table->unsignedBigInteger('user_id')->default(1);
        
            $table->foreign('role_id')->references('id')->on('roles');
            $table->foreign('user_id')->references('id')->on('users');
        
            // preventhing duplicate entry
        
            $table->unique(['role_id', 'user_id'], 'unique_role_user');
        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::dropIfExists('role_user');
        Schema::dropIfExists('role_employee');
        Schema::dropIfExists('permission_role');
        Schema::dropIfExists('permissions');
        Schema::dropIfExists('employees');
        Schema::dropIfExists('roles');
        Schema::dropIfExists('users');
    }
};
