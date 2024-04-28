<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateTraining extends Model
{
    use HasFactory;
    protected $table = 'candidate_trainings';
    protected $fillable = [
        'candidate_id',
        'tariningName',
        'instituteName',
        'passingYear',
    ];
    public function candidate() {
        return $this->belongsTo(Candidate::class);
    }
}
