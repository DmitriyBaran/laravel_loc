<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //DashboardController
    public function dashboard() {
        return view('admin.dashboard');
    }
}
