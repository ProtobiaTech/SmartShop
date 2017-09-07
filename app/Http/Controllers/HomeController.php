<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * 仪表盘页面
     */
    public function dashboard()
    {
        return view('home.dashboard');
    }
}
