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
        // Schema::create('job_job_application', function (Blueprint $table) {
        //     $table->id();
        //     $table->unsignedBigInteger('job_id');
        //     $table->unsignedBigInteger('job_application_id');

        //     // Define foreign keys
        //     $table->foreign('job_id')->references('id')->on('jobs')->onDelete('cascade');
        //     $table->foreign('job_application_id')->references('id')->on('job_applications')->onDelete('cascade');

        //     // Optionally, you can add any additional columns to the pivot table
        //     // $table->string('additional_column')->nullable();

        //     $table->unique(['job_id', 'job_application_id']);
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('job_job_application');
    }
};
