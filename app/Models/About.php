<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $table = 'about_page';
    protected $fillable = [
        'user_id',
        'company_id',
        
        'title',
        'history',
        'vision',
        'banner'
    ];
    protected $attributes = [ 
        'history' => '',
        'vision' => '',
        'banner' => '',
    ];
}
