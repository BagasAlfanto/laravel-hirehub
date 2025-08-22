<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Lowongan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\CompanyProfile;
use App\Http\Controllers\Controller;

class CompanyController extends Controller
{
    public function index(){
        if (CompanyProfile::where('user_id', auth()->id())->count() >= 3) {
            return redirect()
                ->route('profile.index')
                ->withErrors(['limit' => 'Anda hanya dapat menambahkan maksimal 3 perusahaan.'])
                ->withInput();
        }

        return view('dashboard.company.addcompany');
    }

    public function store(Request $request)
    {
        if (CompanyProfile::where('user_id', auth()->id())->count() >= 3) {
            return redirect()
                ->route('profile.index')
                ->withErrors(['limit' => 'Anda hanya dapat menambahkan maksimal 3 perusahaan.'])
                ->withInput();
        }

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

        $validated['uid'] = Str::uuid()->toString();

        CompanyProfile::create($validated);

        return redirect()
            ->route('profile.index')
            ->with('success', 'Perusahaan berhasil ditambahkan.');
    }

    public function show($uid)
    {
        $company = CompanyProfile::where('uid', $uid)->firstOrFail();
        return view('dashboard.company.showcompany', compact('company'));
    }

    public function edit($uid)
    {
        $company = CompanyProfile::where('uid', $uid)->firstOrFail();
        return view('dashboard.company.editcompany', compact('company'));
    }

    public function destroy($uid)
    {
        $company = CompanyProfile::where('uid', $uid)->firstOrFail();
        if ($company->user_id !== auth()->id()) {
            return redirect()
                ->route('profile.index')
                ->withErrors(['unauthorized' => 'Anda tidak berhak menghapus perusahaan ini.']);
        }

        $company->delete();
        if ($company->company_logo) {
            \Storage::disk('public')->delete($company->company_logo);
        }

        Lowongan::where('company_profile_id', $company->id)->delete();

        return redirect()
            ->route('profile.index')
            ->with('success', 'Perusahaan berhasil dihapus.');
    }

}
