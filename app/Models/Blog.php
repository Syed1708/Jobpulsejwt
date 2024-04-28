<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected  $fillable = [
        'user_id',
        'employee_id',
        'company_id',
        'com_employee_id',
        
        'title',
        'description',
        'category',
        'tags',
        'status',
        'featured_image'
    ];
 
    protected $attributes = [ 'status' => 'inactive' ];
    protected $casts = [
        'tags' => 'array'
    ];

    public function category() {
        return $this->belongsTo(BlogCategory::class);
    }
}
