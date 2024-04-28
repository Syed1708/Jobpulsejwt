<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateProfile extends Model
{
    use HasFactory;
    protected $fillable = [
        'candidate_id',
        'fullName',
        'fatherName',
        'motherName',
        'mobile',
        'bloodGroup',
        'email',
        'photo',
        'nid',
        'facebook',
        'linkdin',
        'skills',
        'currentSalary',
        'expectedSalary',
    ];



    protected $casts = [
        'skills' => 'array'
    ];
    public function candidates() {
        return $this->belongsToMany(Candidate::class);
    }
}
