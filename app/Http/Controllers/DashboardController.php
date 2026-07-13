<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }
    
    public function auth()
    {
        return view('auth');
    }
    
    public function agents()
    {
        return view('agents');
    }
    public function settings()
    {
        return view('settings');
    }
    public function profile()
    {
        return view('profile');
    }
    public function reports()
    {
        return view('reports');
    }
}
