<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Job;
use App\Activity;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index(Request $request)
    {
        if($request->session()->has('admin')) {
            $jobs = Job::all();
            return view('admin.jobs', compact('jobs'));
        }else
            return redirect('admin/login');
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create(Request $request)
    {
        if($request->session()->has('admin')) {
            return view('admin.addJob');
        }else
            return redirect('admin/login');
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
        if($request->session()->has('admin')) {
            $jobs = Job::all();
            return view('admin.jobs', compact('jobs'));
        }else
            return redirect('admin/login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function applied(Request $request){
        if($request->session()->has('admin')) {
            $applied = Activity::all();
            return view('admin.appliedJobs',compact('applied'));
        }else
            return redirect('admin/login');
    }
}
