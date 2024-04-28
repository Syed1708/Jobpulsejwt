<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plugin extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'company_id',
        
        'name',
        'description',
        'status',
        'slug',
        
        'visible_in_menu',
    ];

    // Define relationship with Company model
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
    
}
