<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CmRole extends Model
{
    use HasFactory;
    protected $table = 'cm_roles';
    protected $fillable = [
        'company_id',
        'name',
        'description',
    ];

    // under a role one or more permissions
    public function permissions()
    {
        return $this->belongsToMany(CmPermission::class);
    }
    // under a role one or more employees

    // public function employees()
    // {
    //     return $this->belongsToMany(ComEmployee::class, 'com_employee_cm_role');
    // }
    public function company() 
    {
        return $this->belongsTo(Company::class);
    }

    public function employees()
    {
        return $this->belongsToMany(ComEmployee::class, 'cm_role_com_employee', 'cm_role_id', 'com_employee_id')
            ->withPivot('company_id')
            ->withTimestamps();
    }

}
