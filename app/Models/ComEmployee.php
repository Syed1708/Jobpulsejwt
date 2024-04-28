<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComEmployee extends Model
{
    use HasFactory;
    protected $table = 'com_employees';
    protected $fillable = [
        'company_id',
        'role_id',
        'name',
        'firstName',
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

    public $timestamps = true;
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    
     // under a company employee one or more roles

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function roles()
    {
        return $this->belongsToMany(CmRole::class, 'cm_role_com_employee', 'com_employee_id', 'cm_role_id')
            ->withPivot('company_id')
            ->withTimestamps();
    } 
}
