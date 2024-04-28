<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'firstName',
        'lastName',
        'email',
        'password',
        'status',
        // 'userType',
        'otp',
    ];

    protected $attributes = [ 'otp' => '0' ];
    protected $hidden = [
        'password',
        'otp',
        'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
        // return $this->belongsToMany(Role::class, 'role_employee', 'role_id', 'employee_id')
        //     ->withPivot('user_id')
        //     ->withTimestamps();
    }
 
    // many to many
    public function roles()
    {
        return $this->belongsToMany(Role::class);
        // return $this->belongsToMany(Role::class, 'role_employee', 'role_id', 'employee_id')
        //     ->withPivot('user_id')
        //     ->withTimestamps();
    }

    public function employees()
    {
        // return $this->hasMany(Employee::class);
        return $this->belongsToMany(Employee::class, 'role_employee', 'role_id', 'employee_id')
            ->withPivot('user_id')
            ->withTimestamps();
    }
    
    // Avaid lopping 
// Inside User model
public function getPermissionsAttribute()
{
    $permissions = $this->roles->flatMap(function ($role) {
        return $role->permissions->pluck('name');
    });

    // Transform permissions into a formatted list
    $formattedPermissions = '<ul>';
    foreach ($permissions as $permission) {
        $formattedPermissions .= '<li>' . $permission . '</li>';
    }
    $formattedPermissions .= '</ul>';

    return $formattedPermissions;
}


    
}
