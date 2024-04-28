<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateEducation extends Model
{
    use HasFactory;

    protected $table = 'candidate_educations';
    protected $fillable = [
        'candidate_id',

        'degreeType',
        'instituteName',
        'group',
        'passingYear',
        'marks',
    ];

    public function candidate() {
        return $this->belongsTo(Candidate::class);
    }
}
