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
        Schema::create('blog_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnUpdate()->setNullOnDelete();
            
            $table->unsignedBigInteger('employee_id')->nullable();
            $table->foreign('employee_id')->references('id')->on('employees')->cascadeOnUpdate()->setNullOnDelete();
            
            $table->unsignedBigInteger('company_id')->nullable();
            $table->foreign('company_id')->references('id')->on('companies')->cascadeOnUpdate()->setNullOnDelete();
            
            $table->unsignedBigInteger('com_employee_id')->nullable();
            $table->foreign('com_employee_id')->references('id')->on('com_employees')->cascadeOnUpdate()->setNullOnDelete();

            $table->string('name',50);
            $table->string('status')->default('inactive');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
           
        });

        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category')->nullable();
 
            // Add a foreign key
            $table->foreign('category')
                  ->references('id')
                  ->on('blog_categories')
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
            $table->longText('description')->nullable();
            $table->json('tags')->nullable();
            $table->string('status')->default('inactive');
            $table->string('featured_image')->nullable();
            $table->timestamps(); 
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
        Schema::dropIfExists('blog_categories');
    }
};
