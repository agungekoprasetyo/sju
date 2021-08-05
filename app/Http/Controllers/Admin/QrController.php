<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Merchants;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Cviebrock\EloquentSluggable\Sluggable;
use PDF;

class QrController extends Controller
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
       return view('admin.qr.index');
    }

    public function generateqr(Request $request){
        try {
            $merchant = Merchants::where('active', 1)->where('user_id', auth()->user()->id)->first();
            return view('admin.qr.template1', compact('merchant'));
        } catch (\Throwable $th) {
            return view('admin.nomerchant');
        }
        
    }
}
