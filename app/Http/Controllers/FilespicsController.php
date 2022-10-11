<?php

namespace App\Http\Controllers;

use App\Models\files;
use App\Models\filespics;
use Illuminate\Http\Request;

class FilespicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files = files::all();
        $filespics = filespics::all();
        return view('filespics.index',compact('filespics','files'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $files = files::all();
        $filespics = filespics::all();
        return view('filespics.add',compact('filespics','files'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new filespics([
          
            'files_id' => $request->get('files_id')
        ]);
        $file = $request->file('picture');
        $name = $file->getClientOriginalName();
        $file->move(public_path() . '/files/', $name);
        $data->picture = $name;

        $data->save();
    
        return redirect(app()->getLocale().'/filespics')->with('success', 'Success d ajouter');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\filespics  $filespics
     * @return \Illuminate\Http\Response
     */
    public function show(filespics $filespics)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\filespics  $filespics
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $files = files::all();
        $filespics = filespics::find($id);
        return view('filespics.edit', compact('filespics', 'files'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\filespics  $filespics
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $filespics = filespics::findOrFail($id);
        if ($request->has('picture')) {
            $file = $request->file('picture');
            $name = $file->getClientOriginalName();
            $file->move(public_path() . '/files/', $name);
            $filespics->picture = $name;
        }
 
        $filespics->files_id  = $request->files_id ;
        $filespics->update();
        return redirect(app()->getLocale().'/filespics')->with('success', 'Success de mise a jour des donnée');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\filespics  $filespics
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $filespics = filespics::find($id);
        $filespics->delete();
        return redirect()->back()->with('success', 'Fichier supprimer');
    }
}
