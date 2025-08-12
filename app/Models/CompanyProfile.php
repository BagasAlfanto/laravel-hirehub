<?php

namespace App\Models;

use App\Models\User;
use App\Models\Lowongan;
use Illuminate\Database\Eloquent\Model;

class CompanyProfile extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function lowongans(){
        return $this->hasMany(Lowongan::class, 'company_profile_id');
    }

    protected $fillable = [
        'user_id',
        'company_name',
        'company_email',
        'company_phone',
        'company_description',
        'company_website',
        'company_logo',
        'company_address',
        'company_field',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
