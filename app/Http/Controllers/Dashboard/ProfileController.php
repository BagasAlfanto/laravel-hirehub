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
        return view('dashboard.profile.index', compact('company'));
    }

    public function edit($uid)
    {
        $user = auth()->user();
        return view('dashboard.profile.edit', compact('user', 'uid'));
    }

    public function update(Request $request, $uid)
    {
        $user = auth()->user();
        $validated = $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $uid,
        ]);

        $user->update($validated);

        return redirect()
            ->route('profile.index')
            ->with('success', 'Profil berhasil diperbarui.');
    }

}
