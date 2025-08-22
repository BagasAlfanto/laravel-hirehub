<?php

namespace App\View\Components\dashboard;

use Closure;
use App\Models\Lowongan;
use App\Models\CompanyProfile;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class index extends Component
{
    // public $companies;
    // public $lowongans;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        // $this->companies = CompanyProfile::where('user_id', auth()->id())->get();

        // $this->lowongans = Lowongan::whereIn('company_profile_id', $this->companies->pluck('id'))->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.index');
    }
}
