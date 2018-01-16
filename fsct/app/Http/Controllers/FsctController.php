<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fsct;

class FsctController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = Fsct::all();
        return view('company.index')
            ->with('company', $company);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

    public function postCreate(Request $request)
    {
        $name = $request->get('users');
        $branchNew = new Fsct();
        $branchNew->fill($name);
        $branchNew->save();
        return redirect('/admin/company');
    }

    public function edit(Request $request, $id)
    {

        $branch = Fsct::where('id', $id)->first();

        return view('company.edit')
            ->with('branch', $branch);
    }

    public function postEdit(Request $request, $id)
    {

        $form = $request->get('users');
        $branchEdit = Fsct::where('id', $id)->first();
        $branchEdit->fill($form);
        $branchEdit->save();

        return redirect('/admin/company');
    }


    public function postDelete(Request $request, $id)
    {
        $branchDelete = Fsct::where('id', $id)->first();
        $branchDelete->delete();
        return redirect('/admin/company');
    }
}
