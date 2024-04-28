<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyProfile extends Model
{
    use HasFactory;

    protected $table = "company_profiles";
    protected $fillable = [
        'company_id',
        'name',
        'description',
        'lastName',
        'email',
        'logo',
        'mobile',
    ];

    public function company() {
        return $this->belongsTo(Company::class);
    }
    
}
