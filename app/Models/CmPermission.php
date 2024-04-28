<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CmPermission extends Model
{
    use HasFactory;
    protected $table = 'cm_permissions';
    public $timestamps = true;
    protected $fillable = [
        'name',
        'description',
    ];

     // under a permissions one or more roles
    public function roles() {
        return $this->belongsToMany(CmRole::class);
    }
}
