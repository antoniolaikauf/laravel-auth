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

        return view('project-file.welcome', compact('projects'));
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

        $img='https://it.images.search.yahoo.com/images/view;_ylt=Awriq1hJ6NVljtEns0AdDQx.;_ylu=c2VjA3NyBHNsawNpbWcEb2lkAzQzMTgwYzkwMjMzMzg1Y2YwY2NhYzIwNDdkZDRkY2NkBGdwb3MDMwRpdANiaW5n?back=https%3A%2F%2Fit.images.search.yahoo.com%2Fsearch%2Fimages%3Fp%3Dimmagine%2Bsfondo%26type%3DE210IT714G0%26fr%3Dmcafee%26fr2%3Dpiv-web%26tab%3Dorganic%26ri%3D3&w=2048&h=2048&imgurl=sfondo.info%2Fi%2Foriginal%2Fe%2F1%2Fc%2F49243.jpg&rurl=https%3A%2F%2Fsfondo.info%2Fimmagini-per-sfondi&size=834.9KB&p=immagine+sfondo&oid=43180c90233385cf0ccac2047dd4dccd&fr2=piv-web&fr=mcafee&tt=Immagini+per+Sfondi+%2882%2B+immagini%29&b=0&ni=21&no=3&ts=&tab=organic&sigr=PdyF.s8fMDmB&sigb=FAFhPyFHnEO_&sigi=cJ7P9AD_RiZH&sigt=91qV5REpw9.q&.crumb=s/OJ9D6Zf/K&fr=mcafee&fr2=piv-web&type=E210IT714G0';

        $project->nome = $data['nome'];
        $project->descrizione = $data['descrizione'];
        $project->data_progetto = $data['data_progetto'];

        $project->save();

        return redirect()->route('project.index', compact('project','img'));
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
