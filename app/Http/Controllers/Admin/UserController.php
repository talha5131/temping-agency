<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller{

    public function login(Request $request)
    {
        if($request->session()->has('admin'))
            return redirect()->route('dashboard');
        else
            return redirect('admin/login');
    }

    public function check(Request $request)
    {
        $name = $request->username;
        $pass = $request->pass;

        if($name == 'admin' && $pass == 'admin1122' )
        {
            $request->session()->put('admin',$name);
            return redirect()->route('dashboard');
        }
        else
            return back()->with('message', 'Wrong Login Credentials');
    }

    public function see(Request $request)
    {
        if($request->session()->has('admin'))
            echo $request->session()->get('admin');
        else
            echo 'No data in the session';
    }

    public function logout(Request $request)
    {
        $request->session()->forget('admin');
        return redirect('/admin/login');
    }

}
