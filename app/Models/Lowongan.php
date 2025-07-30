<?php

namespace App\Models;

use App\Models\CompanyProfile;
use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    public function company(){
        return $this->belongsTo(CompanyProfile::class, 'company_profile_id');
    }

    protected $fillable = [
        'title',
        'description',
        'location',
        'salary',
        'company_profile_id',
    ];

    protected $casts = [
        'salary' => 'decimal:2',
        'application_deadline' => 'date',
    ];

}
