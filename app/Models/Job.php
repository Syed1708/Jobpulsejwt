<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'employee_id',
        'company_id',
        'com_employee_id',
        
        'title',
        'description',
        'category_id',
        'mode',
        'type',
        'location',
        'salary',
        'tags',
        'benifits',
        'deadline',
        'status',
    ];

    
    protected $casts = [
        'tags' => 'array'
    ];

    public function company() {
        return $this->belongsTo(Company::class);
    }
    public function category() {
        return $this->belongsTo(JobCategory::class);
    }
    public function applications() { 
        return $this->hasMany(JobApplication::class);
    }
}
