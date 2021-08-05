<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Merchants;
use Spatie\Permission\Models\Role;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $merchants = Merchants::limit(4)->get();
        $merchant = Merchants::where('active', 1)->first();
        return view('admin.dashboard', compact('merchants', 'merchant'));
    }
}
