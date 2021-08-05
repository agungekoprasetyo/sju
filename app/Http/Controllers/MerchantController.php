<?php

namespace App\Http\Controllers;

use App\Models\Admin\Merchants;
use Illuminate\Http\Request;

class MerchantController extends Controller
{
    // public function index()
    // {
    //     return view('landingresto');
    // }

    public function show(Merchants $merchants){
        $merchant = $merchants->load('category.menu');
        return view('merchant', compact('merchant'));
    }
}
