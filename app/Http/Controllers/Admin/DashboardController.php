<?php

namespace SMSSim\Http\Controllers\Admin;

use Illuminate\Http\Request;

use SMSSim\Http\Requests;
use SMSSim\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $title = 'Administração';
        $subtitle = 'Página Principal';

        return view('admin.dashboard.index', compact('title', 'subtitle'));
    }
}
