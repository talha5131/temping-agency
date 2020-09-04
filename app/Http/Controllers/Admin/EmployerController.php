<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class EmployerController extends Controller
{
    public function index(Request $request){
        if($request->session()->has('admin')) {
	    	$employer = User::orderByDesc('id')->where('user_type','employer')->paginate(10);
	    	return view('admin.employers', compact('employer'));
	    	// return $employer;
        }else
            return redirect('admin/login');
    }
}
