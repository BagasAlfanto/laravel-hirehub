<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Models\CompanyProfile;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index()
    {
        $company = CompanyProfile::where('user_id', auth()->id())->get();
        return view('dashboard.profile', compact('company'));
    }

}
