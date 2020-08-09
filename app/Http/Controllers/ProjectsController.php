<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = DB::table('projects')->get();
        return view('ShowProjects', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ProjectCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'project_name' => 'required|unique:projects',
            'project_description' => 'required',
            'starting_date' => 'required',
            'deadline_date' => 'required',
            'status' => 'required'
        ]);

        $query = DB::table('projects')->insert(
                [
                    'project_name' => $request['project_name'],
                    'project_description' => $request['project_description'],
                    'starting_date' => $request['starting_date'],
                    'deadline_date' => $request['deadline_date'],
                    'status' => true
                ]
                );
        return redirect('/project')->with('success','Project has been insert');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table('projects')->first();

        return view('ProjectDetail', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('projects')
                ->where('project_id',$id)
                ->first();

        return view('EditProject',compact('data'));
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
        $request->validate([
            'project_name' => 'required|unique:projects',
            'project_description' => 'required',
            'starting_date' => 'required',
            'deadline_date' => 'required',
            'status' => 'required'
        ]);

        $data = DB::table('projects')
                ->where('project_id',$id)
                ->update([
                    'project_name' => $request['project_name'],
                    'project_description' => $request['project_description'],
                    'starting_date' => $request['starting_date'],
                    'deadline_date' => $request['deadline_date'],
                    'status' => true
                ]);

        return redirect('/project')->with('success','Project has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = DB::table('projects')
                ->where('project_id','=',$id)
                ->delete();

        return redirect('/project')->with('success','Project Has Been Deleted');
    }
}
