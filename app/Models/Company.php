<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{ 
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = "companies";
    protected $fillable = [
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


    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function profile() {
        return $this->hasOne(CompanyProfile::class);
    }
    

    public function employees()
    {
        return $this->hasMany(ComEmployee::class);
    }
    public function jobs()
    {
        return $this->hasMany(Job::class);
    }
    public function roles()
    {
        return $this->hasMany(CmRole::class);
    }

}
