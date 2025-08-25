<?php

namespace App\Models;

use App\Models\User;
use App\Models\Lowongan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CompanyProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'uid',
        'company_name',
        'company_email',
        'company_phone',
        'company_description',
        'company_website',
        'company_logo',
        'company_address',
        'company_field',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function lowongans()
    {
        return $this->hasMany(Lowongan::class);
    }
}
