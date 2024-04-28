<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    protected  $fillable = [
        'user_id',
        'employee_id',
        'company_id',
        'com_employee_id',
        
        'name',
        'description',
    ];
}
