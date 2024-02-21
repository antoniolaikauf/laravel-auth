<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;

use App\Http\Requests\projectFormRequest;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();

        $img = 'resources/img/img.crdownload';

        return view('project-file.welcome', compact('projects','img'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('project-file.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(projectFormRequest $request)
    {
        $data = $request->all();

        $project = new Project();

        

        $project->nome = $data['nome'];
        $project->descrizione = $data['descrizione'];
        $project->data_progetto = $data['data_progetto'];

        $project->save();

        return redirect()->route('project.index', compact('project'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project :: find($id);

        return view('project-file.show', compact('project'));
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
        $project = Project :: find($id);
        $project -> delete();

        return redirect() -> route('project.index');
    }
}
