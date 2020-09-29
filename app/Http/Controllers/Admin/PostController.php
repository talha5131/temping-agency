<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\TermsImport;

use App\Keyword;
use App\Term;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->session()->has('admin')) {
            $keys = Keyword::all();
            $terms = Term::orderByDesc('id')->paginate(10);
            return view('admin.keywords',compact('keys', 'terms'));
        }else
            return redirect('admin/login');
    }

    public function savekey(Request $request){
        if($request->session()->has('admin')) {
            Keyword::create(['name' => $request->key]);
            return back()->with('success', 'Keyword inserted successfully');
        }else
            return redirect('admin/login');
    }

    public function saveterm(Request $request)
    {
        if($request->session()->has('admin')) {
            Excel::import(new TermsImport, $request->file('term'));
            Term::where('keyword','')->update(['keyword' => $request->keyword]);
            return back()->with('success', 'Terms inserted successfully to the keyword');
        }else
            return redirect('admin/login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
}
