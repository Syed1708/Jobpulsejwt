<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateJob extends Model
{
    use HasFactory;
    protected $table = 'candidate_jobs';
    protected $fillable = [
        'candidate_id',
        'company_name',
        'designation',
        'joinin_date',
        'depurture_date',
    ];
    public function candidate() {
        return $this->belongsTo(Candidate::class);
    }

}
