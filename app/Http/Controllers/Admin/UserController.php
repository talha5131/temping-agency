<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller{

    public function login(Request $request){
        if($request->user == 'admin' && $request->password == 'admin1122') {
            $request->session()->put('admin', 'admin');
            return view('admin.dashboard');
        }
    }
}
