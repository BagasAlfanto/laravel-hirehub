<?php

namespace App\Models;

use App\Models\CompanyProfile;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lowongan extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_profile_id',
        'job_title',
        'job_description',
        'job_location',
        'job_type',
        'salary',
        'application_deadline',
        'status',
    ];

    public function company()
    {
        return $this->belongsTo(CompanyProfile::class, 'company_profile_id');
    }
}
