<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardMainController extends Controller
{
    public function index()
    {
        return view('dashboard2.index');
    }
}