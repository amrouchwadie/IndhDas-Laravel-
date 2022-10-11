<?php

namespace App\Http\Controllers;

use App\Models\Version;
use App\Models\DocVers;
use Illuminate\Http\Request;

class DocVersController extends Controller
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
        $Docverss = DocVers::all();
        return view('docverss.index',compact('Docverss','versions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $versions = Version::all();
        $Docverss = DocVers::all();
        return view('docverss.add',compact('Docverss','versions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new DocVers([

            'version_id' => $request->get('version_id')

        ]);
        $file = $request->file('pdf');
        $name = $file->getClientOriginalName();
        $file->move(public_path() . '/documents/', $name);
        $data->pdf = $name;
        $data->save();
        return redirect(app()->getLocale().'/docvers')->with('success', 'Fichier a été ajouté');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DocVers  $docVers
     * @return \Illuminate\Http\Response
     */
    public function show(DocVers $docVers)
    {
      //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DocVers  $docVers
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $versions = Version::all();
        $Docverss = DocVers::find($id);
        return view('docverss.edit', compact('Docverss', 'versions'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DocVers  $docVers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Docverss = DocVers::findOrFail($id);
        if ($request->has('pdf')) {
            $file = $request->file('pdf');
            $name = $file->getClientOriginalName();
            $file->move(public_path() . '/documents/', $name);
            $Docverss->pdf = $name;
        }
        $Docverss->version_id = $request->version_id;
        $Docverss->update();
        return redirect(app()->getLocale().'/docvers')->with('success', 'Success de mise a jour des donnée');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DocVers  $docVers
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $Docverss = DocVers::find($id);
        $Docverss->delete();
        return redirect()->back()->with('success', 'Fichier supprimer');
    }
}
