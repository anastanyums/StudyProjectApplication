<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Issue;
use App\Department;
use App\User;
use Auth;

class IssueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();;

        if (!$user->roles->pluck('name')->contains('admin')) {
            $issueList = Issue::where('tec_id', $user->id)->get();
        } else {
            $issueList = Issue::all();
        }
        return view('issueList', ['issues' => $issueList]);
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $departments = Department::all();
        $tech = User::select('name', 'id')->whereHas('roles', function($q)
        {
            $q->where('name', '!=', 'admin');
        
        })->get();

        return view('addIssue', ['techs' => $tech, 'departments' => $departments]);
    }


    public function view($id)
    {
        $issue = Issue::findOrFail($id);
        $user = Auth::user();;

        if (!$user->roles->pluck('name')->contains('admin')) {
            $issue->status = "Seen";
            $issue->save();
        }

        $departments = Department::all();
        $tech = User::select('name', 'id')->whereHas('roles', function($q)
        {
            $q->where('name', '!=', 'admin');
        
        })->get();

        return view('viewIssue', ['techs' => $tech, 'departments' => $departments, 'issue' => $issue]);
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
        $issue = new Issue();
        $issue->title = $request->input('title');
        $issue->departmnet = $request->input('departmnet');
        $issue->tec_id = $request->input('tec_id');
        $issue->type = $request->input('type');
        $issue->desc = $request->input('desc');
        $issue->deadline = $request->input('deadline');
        $issue->save();

        return redirect()->to('addIs');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
        $issue = Issue::findOrFail($id);
        $issue->fix_date = $request->input('fix_date');
        $issue->status = $request->input('status');
        $issue->save();

        return redirect()->to('list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $issue = Issue::findOrFail($id);
        $issue->delete();

        return redirect()->to('list');
    }
}
