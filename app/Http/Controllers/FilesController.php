<?php

namespace App\Http\Controllers;

use App\Models\files;
use Illuminate\Http\Request;
use App\Models\filespics;

class FilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files = files::all();
        return view('files.index',compact('files'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $files = files::all();
        return view('files.add',compact('files'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $files = new files();
        $files->name = $request->name;
        $files->save();
        return redirect(app()->getLocale().'/files')->with('success','Donnée est ajouter');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\files  $files
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $files = files::all();
        $filespics = filespics::where('files_id', "=", $id)->get();
     
        $files = files::findOrFail($id);
        return view('files.show', compact('files', 'filespics'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\files  $files
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $files=files::findOrFail($id);
        return view('files.edit',compact('files'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\files  $files
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $files=files::findOrFail($id);
        // App::setLocale($request->language);
        $files->name = $request->input('name');
        $files->update();

        return redirect(app()->getLocale().'/files')->with('success', 'donnée a été update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\files  $files
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $files= files::find($id);
        $files->delete();
        return redirect(app()->getLocale().'/files')->with('error', 'donnée a été supprimer');
    }

    public function cree($id)
    {
        $files = files::find($id);
        $filespics = filespics::all();
        return view('files.fileadd',compact('filespics','files'));
    }


    public function fileadd(Request $request,$id)
    {
        $files = files::find($id);
        $data = new filespics([
          
            'files_id' => $request->get('files_id')
        ]);
        $file = $request->file('picture');
        $name = $file->getClientOriginalName();
        $file->move(public_path() . '/files/', $name);
        $data->picture = $name;

        $data->save();
    
        return redirect(app()->getLocale().'/files')->with('success', 'Success de mise a jour des donnée');
    }


}
