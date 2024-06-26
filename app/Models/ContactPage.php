<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactPage extends Model
{
    use HasFactory;
    protected $table = 'contact_page';
    protected $fillable = [
        'user_id',
        'company_id',
        
        'address',
        'phone',
        'email',
        'banner'
    ];

    
    protected $attributes = [ 
        'address' => '',
        'phone' => '',
        'email' => '',
        'banner' => '',
    ];
}
