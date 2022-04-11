<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class DashboardSettingsController extends Controller
{
    public function index()
    {
        return view('dashboard.settings.index');
    }
    
}
