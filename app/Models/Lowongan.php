<?php

namespace App\Models;

use App\Models\CompanyProfile;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lowongan extends Model
{
    use HasFactory;

    protected $fillable = [
        'uid',
        'company_profile_id',
        'job_title',
        'job_description',
        'job_location',
        'job_type',
        'salary',
        'application_deadline',
        'status',
    ];

    public function companyProfile()
    {
        return $this->belongsTo(CompanyProfile::class, 'company_profile_id');
    }
}
