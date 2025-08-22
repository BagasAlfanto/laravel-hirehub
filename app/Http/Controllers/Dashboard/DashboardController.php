<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Lowongan;
use Illuminate\Http\Request;
use App\Models\CompanyProfile;
use Illuminate\Routing\Controller;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $status = $request->get('status');
        $companyIds = CompanyProfile::where('user_id', auth()->id())->pluck('id');
        $lowongansQuery = Lowongan::whereIn('company_profile_id', $companyIds);

        if ($status) {
            $lowongansQuery->where('status', $status);
        }

        $lowongans = $lowongansQuery->latest()->paginate(15);

        $companies = CompanyProfile::whereIn('id', $companyIds)
            ->select('id', 'company_name')
            ->get();

        return view('dashboard.index', [
            'companies' => $companies,
            'lowongans' => $lowongans,
        ]);
    }

}
