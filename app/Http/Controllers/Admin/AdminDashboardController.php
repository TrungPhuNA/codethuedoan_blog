<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class AdminDashboardController extends AdminBaseController
{
    public function index()
    {
        return view('backend.pages.index');
    }
}
