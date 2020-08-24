<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Activity;
use App\Job;
use App\User;
use App\CV;
class DashboardController extends Controller
{
    public function index(Request $request){
        if($request->session()->has('admin')) {
            $job = Job::count();
            $cv = CV::count();
            $temps = CV::where('platform','Temping Agency')->count();
            $applied = Activity::count();
            $employer = User::where('user_type','employer')->count();
            return view('admin.main',compact('job','cv','temps','applied','employer'));
        }
        else
            return redirect('admin/login');
    }
}
