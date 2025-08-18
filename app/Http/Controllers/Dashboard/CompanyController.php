<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Models\CompanyProfile;
use App\Http\Controllers\Controller;

class CompanyController extends Controller
{
    public function index(){
        return view('dashboard.company.addcompany');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'company_name'        => 'required|string|max:255',
            'company_email'       => 'required|email|max:255|unique:company_profiles,company_email',
            'company_phone'       => 'nullable|string|max:20',
            'company_description' => 'nullable|string',
            'company_website'     => 'nullable|max:255',
            'company_logo'        => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'company_address'     => 'nullable|string|max:255',
            'company_field'       => 'nullable|string|max:255',
        ]);

        if ($request->hasFile('company_logo')) {
            $validated['company_logo'] = $request->file('company_logo')->store('company_logos', 'public');
        }

        $validated['user_id'] = auth()->id();

        CompanyProfile::create($validated);

        return redirect()
            ->route('profile.index')
            ->with('success', 'Perusahaan berhasil ditambahkan.');
    }

}
