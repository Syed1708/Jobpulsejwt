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
        Schema::create('candidates', function (Blueprint $table) {
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
 

        Schema::create('candidate_profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('candidate_id');

            $table->foreign('candidate_id')->references('id')->on('candidates')
                ->cascadeOnUpdate()->restrictOnDelete();
            $table->string('fullName');
            $table->string('fatherName')->nullable();
            $table->string('motherName')->nullable();
            $table->string('mobile', 20)->nullable();
            $table->string('bloodGroup', 20)->nullable();
            $table->string('email')->nullable();
            $table->string('photo')->nullable();
            $table->string('nid')->nullable();
            $table->string('facebook')->nullable();
            $table->string('linkdin')->nullable();
            $table->json('skills')->nullable(); //dont forget to convert it array in Model $Casts
            $table->string('currentSalary')->nullable();
            $table->string('expectedSalary')->nullable();
            $table->timestamps();
        });

        Schema::create('candidate_educations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('candidate_id');

            $table->foreign('candidate_id')->references('id')->on('candidates')
                ->cascadeOnUpdate()->restrictOnDelete();           
            $table->string('degreeType');
            $table->string('instituteName');
            $table->string('group');
            $table->string('passingYear');
            $table->string('marks');
            $table->timestamps();
        });

        Schema::create('candidate_trainings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('candidate_id');

            $table->foreign('candidate_id')->references('id')->on('candidates')
                ->cascadeOnUpdate()->restrictOnDelete(); 
            $table->string('tariningName');
            $table->string('instituteName');
            $table->string('passingYear');
            $table->timestamps();
        });

        Schema::create('candidate_jobs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('candidate_id');

            $table->foreign('candidate_id')->references('id')->on('candidates')
                ->cascadeOnUpdate()->restrictOnDelete(); 
            $table->string('company_name');
            $table->string('designation');
            $table->date('joinin_date');
            $table->date('depurture_date')->nullable();
            $table->timestamps();
        });


    

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::dropIfExists('candidate_jobs');
        Schema::dropIfExists('candidate_trainings');
        Schema::dropIfExists('candidate_educations');
        Schema::dropIfExists('candidate_profile');
        Schema::dropIfExists('canidates');
    }
};
