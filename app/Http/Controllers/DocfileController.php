<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Docfile;
use Illuminate\Http\Request;

class DocfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documents = Document::all();
        $docfiles = Docfile::all();
        return view('docfiles.index',compact('docfiles','documents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $documents = Document::all();
        $docfiles = Docfile::all();
        return view('docfiles.add',compact('docfiles','documents'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Docfile([
            'name' => $request->get('name'),
            'document_id' => $request->get('document_id')
        ]);
        $file = $request->file('file');
        $name = $file->getClientOriginalName();
        $file->move(public_path() . '/files/', $name);
        $data->file = $name;

        $data->save();
        return redirect(app()->getLocale().'/docfiles')->with('success', 'Fichier a été ajouté');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Docfile  $docfile
     * @return \Illuminate\Http\Response
     */
    public function show(Docfile $docfile)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Docfile  $docfile
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $documents = Document::all();
        $docfiles = Docfile::find($id);
        return view('docfiles.edit', compact('docfiles', 'documents'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Docfile  $docfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $docfiles = Docfile::findOrFail($id);
        if ($request->has('file')) {
            $file = $request->file('file');
            $name = $file->getClientOriginalName();
            $file->move(public_path() . '/files/', $name);
            $docfiles->file = $name;
        }
        $docfiles->name = $request->name;
        $docfiles->document_id = $request->document_id;
        $docfiles->update();
        return redirect(app()->getLocale().'/docfiles')->with('success', 'Success de mise a jour des donnée');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Docfile  $docfile
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $docfiles = Docfile::find($id);
        $docfiles->delete();
        return redirect()->back()->with('success', 'Fichier supprimer');
    }
}
