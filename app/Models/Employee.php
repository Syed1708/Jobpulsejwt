<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'employees';
    protected $fillable = [
        'user_id',
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

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_employee', 'employee_id', 'role_id')
            ->withPivot('user_id')
            ->withTimestamps();
    }
}
