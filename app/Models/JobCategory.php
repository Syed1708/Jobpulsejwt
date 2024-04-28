<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'employee_id',
        'company_id',
        'com_employee_id',
        
        'name',
        'description',
        'status',
    ];

    public function jobs() {
        return $this->hasMany(Job::class,'category_id', 'id');
    }
}
