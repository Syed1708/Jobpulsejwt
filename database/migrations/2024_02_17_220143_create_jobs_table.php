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


        Schema::create('job_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnUpdate()->setNullOnDelete();
            
            $table->unsignedBigInteger('employee_id')->nullable();
            $table->foreign('employee_id')->references('id')->on('employees')->cascadeOnUpdate()->setNullOnDelete();
            
            $table->unsignedBigInteger('company_id')->nullable();
            $table->foreign('company_id')->references('id')->on('companies')->cascadeOnUpdate()->setNullOnDelete();
            
            $table->unsignedBigInteger('com_employee_id')->nullable();
            $table->foreign('com_employee_id')->references('id')->on('com_employees')->cascadeOnUpdate()->setNullOnDelete();

            // $table->unsignedBigInteger('job_id');
            
            // $table->foreign('job_id')->references('id')->on('jobs')
            // ->cascadeOnUpdate()->restrictOnDelete();
            
            $table->string('name',50);
            $table->longText('description')->nullable();
            $table->string('status')->default('inactive');

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
            
        });

        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id')->nullable();

            // Add a foreign key
            $table->foreign('category_id')
                  ->references('id')
                  ->on('job_categories')
                  ->onDelete('set null'); 
                  
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnUpdate()->setNullOnDelete();
            
            $table->unsignedBigInteger('employee_id')->nullable();
            $table->foreign('employee_id')->references('id')->on('employees')->cascadeOnUpdate()->setNullOnDelete();
            
            $table->unsignedBigInteger('company_id')->nullable();
            $table->foreign('company_id')->references('id')->on('companies')->cascadeOnUpdate()->setNullOnDelete();
            
            $table->unsignedBigInteger('com_employee_id')->nullable();
            $table->foreign('com_employee_id')->references('id')->on('com_employees')->cascadeOnUpdate()->setNullOnDelete();



            $table->string('title');
            // $table->string('category');
            $table->longText('description');
            $table->string('mode');//on-site or remote job
            $table->string('type');//fulltime or parttime job
            $table->string('location');
            $table->string('salary');
            $table->json('tags');
            $table->text('benifits');
            $table->date('deadline');
            $table->string('status')->default('inactive');
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
        Schema::dropIfExists('job_categories');
    }
};
