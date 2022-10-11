<?php

namespace App\Http\Controllers;

use App\Models\Version;
use App\Models\DocVers;
use Illuminate\Http\Request;

class VersionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $versions = Version::all();
        return view('versions.index',compact('versions'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $versions = Version::all();
        return view('versions.add',compact('versions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $versions = new Version();
  
        $versions->titre = $request->titre;
        $versions->description = $request->description;
        $versions->save();
        return redirect(app()->getLocale().'/version')->with('success','Projet est ajouter');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Version  $version
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $versions = Version::all();
        $Docverss = DocVers::where('version_id', "=", $id)->get();
        $versions = Version::findOrFail($id);
        return view('versions.show', compact('versions', 'Docverss'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Version  $version
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $versions=Version::findOrFail($id);
        return view('versions.edit',compact('versions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Version  $version
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $versions=Version::findOrFail($id);
        $versions->titre = $request->input('titre');
        $versions->description = $request->input('description');
        $versions->update();

        return redirect(app()->getLocale().'/version')->with('success','projet a été bien modifier');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Version  $version
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $versions= Version::find($id);
        $versions->delete();

        return redirect()->back()->with('alert-class', 'Version a été supprimer');
    }
}
