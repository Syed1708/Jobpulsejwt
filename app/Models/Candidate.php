<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'fullName',
        'lastName',
        'email',
        'password',
        'status',
        'otp',
    ];

    protected $attributes = [ 'otp' => '0' ];
    protected $hidden = [
        'password',
        'otp',
        'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function profile() {
        return $this->hasOne(CandidateProfile::class);
    }
    public function educations() {
        return $this->hasMany(CandidateEducation::class);
    }
    public function jobExpriences() {
        return $this->hasMany(CandidateJob::class);
    }
    public function trainings() {
        return $this->hasMany(CandidateTraining::class);
    }
    public function jobApplications() {
        return $this->hasMany(JobApplication::class);
    }
}
