<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request){
        if($request->session()->has('admin'))
            return view('admin.main');
        else
            return view('admin.login');
}
}
