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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnUpdate()->setNullOnDelete();
            
            $table->unsignedBigInteger('employee_id')->nullable();
            $table->foreign('employee_id')->references('id')->on('employees')->cascadeOnUpdate()->setNullOnDelete();
            
            $table->unsignedBigInteger('company_id')->nullable();
            $table->foreign('company_id')->references('id')->on('companies')->cascadeOnUpdate()->setNullOnDelete();
            
            $table->unsignedBigInteger('com_employee_id')->nullable();
            $table->foreign('com_employee_id')->references('id')->on('com_employees')->cascadeOnUpdate()->setNullOnDelete();

            $table->string('name');
            $table->string('description')->nullable();
            $table->string('status')->default('inactive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
