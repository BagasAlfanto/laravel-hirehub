<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Lowongan; // Pastikan Anda mengimpor model Lowongan

class DashboardController extends Controller
{
    /**
     * Menampilkan halaman dashboard dengan daftar lowongan.
     */
    public function index()
    {
        $lowongans = Lowongan::with('companyProfile')
            ->where('status', 'open')
            ->latest()
            ->get();

        // Mengirimkan data $lowongans ke view 'dashboard'
        return view('pages.dashboard', [
            'lowongans' => $lowongans
        ]);
    }
}
