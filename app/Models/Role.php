<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $table = 'roles';
    protected $fillable = [
        'name',
        'description',
    ];

    public function user() 
    {
        return $this->belongsTo(User::class);
    }

    public function employees()
    {
        return $this->belongsToMany(ComEmployee::class, 'role_employee', 'role_id', 'employee_id')
            ->withPivot('user_id')
            ->withTimestamps();
    }

    
}
