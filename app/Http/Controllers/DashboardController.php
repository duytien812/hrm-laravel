<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function getDashboard()
    {
    	return view('admin.dashboard');
    }
}