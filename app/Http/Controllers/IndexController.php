<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function homeView()
    {
        return view('home');
    }

    public function catalogView()
    {
        return view('catalog');
    }

    public function certificateView()
    {
        return view('certificate');
    }

    public function deliveryView()
    {
        return view('delivery');
    }
    public function about_companyView()
    {
        return view('about_company');
    }
}
