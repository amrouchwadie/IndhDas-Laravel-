<?php

namespace App\Http\Controllers;

use App\Models\Docfile;
use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documents = Document::all();
        return view('documents.index',compact('documents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $documents = Document::all();
        return view('documents.add',compact('documents'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $documents = new Document();
        $documents->name = $request->name;
        $documents->save();
        return redirect(app()->getLocale().'/documents')->with('success','Donnée est ajouter');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $documents = Document::all();
        $docfiles = Docfile::where('document_id', "=", $id)->get();
     
        $documents = Document::findOrFail($id);
        return view('documents.show', compact('documents', 'docfiles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $documents=Document::findOrFail($id);
        return view('documents.edit',compact('documents'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $documents=Document::findOrFail($id);
        // App::setLocale($request->language);
        $documents->name = $request->input('name');
        $documents->update();

        return redirect(app()->getLocale().'/documents')->with('success', 'donnée a été update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $documents= Document::find($id);
        $documents->delete();
        return redirect(app()->getLocale().'/documents')->with('error', 'donnée a été supprimer');
    }

    public function cree($id)
    {
        $documents = Document::find($id);
        $docfiles = Docfile::all();
        return view('documents.fileadd',compact('docfiles','documents'));
    }


    public function fileadd(Request $request,$id)
    {
        $documents = Document::find($id);
        $data = new Docfile([
            'name' => $request->get('name'),
            'document_id' => $request->get('document_id')
        ]);
        $file = $request->file('file');
        $name = $file->getClientOriginalName();
        $file->move(public_path() . '/files/', $name);
        $data->file = $name;

        $data->save();
    
        return redirect(app()->getLocale().'/documents')->with('success', 'Success de mise a jour des donnée');
    }


}
