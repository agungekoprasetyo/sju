<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        return view('landingresto');
    }

    public function syarat()
    {
        return view('syaratketentuan');
    }

    public function faq()
    {
        return view('faq');
    }

    public function kebijakan()
    {
        return view('kebijakan');
    }

    public function tentang()
    {
        return view('tentang');
    }
}
