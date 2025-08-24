<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Lowongan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\CompanyProfile;
use App\Http\Controllers\Controller;

class LowonganController extends Controller
{
    public function index()
    {
        $companies = CompanyProfile::where('user_id', auth()->id())->get();
        return view('dashboard.lowongan.index', compact('companies'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'company_profile_id' => 'required|exists:company_profiles,id',
            'job_title' => 'required|string|max:255',
            'job_description' => 'required|string',
            'job_location' => 'nullable|string|max:255',
            'job_type' => 'required|in:full-time,part-time,contract',
            'salary' => 'nullable|numeric',
            'application_deadline' => 'nullable|date',
            'status' => 'required|in:open,closed'
        ]);

        $validated['user_id'] = auth()->id();
        $validated['uid'] = Str::uuid()->toString();

        Lowongan::create($validated);

        return redirect()
            ->route('dashboard.index')
            ->with('success', 'Lowongan pekerjaan berhasil ditambahkan.');
    }

    public function show($uid)
    {
        $lowongan = Lowongan::where('uid', $uid)->firstOrFail();

        $company = CompanyProfile::where('id', $lowongan->company_profile_id)->firstOrFail();

        return view('dashboard.lowongan.detailslowongan', compact('lowongan', 'company'));
    }

    public function edit($uid)
    {
        $lowongan = Lowongan::where('uid', $uid)->firstOrFail();

        $company = CompanyProfile::where('id', $lowongan->company_profile_id)->firstOrFail();

        return view('dashboard.lowongan.editlowongan', compact('lowongan'));
    }

    public function update(Request $request, $uid)
    {
        $lowongan = Lowongan::where('uid', $uid)->firstOrFail();

        $validated = $request->validate([
            'job_title' => 'required|string|max:255',
            'job_description' => 'required|string',
            'job_location' => 'nullable|string|max:255',
            'job_type' => 'required|in:full-time,part-time,contract',
            'salary' => 'nullable|numeric',
            'application_deadline' => 'nullable|date',
            'status' => 'required|in:open,closed'
        ]);

        $lowongan->update($validated);

        return redirect()
            ->route('dashboard.index')
            ->with('success', 'Lowongan pekerjaan berhasil diperbarui.');
    }   
}
