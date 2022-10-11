<?php

namespace App\Http\Controllers;

use App\Models\appelProjet;
use App\Models\filesapppro;
use Illuminate\Http\Request;

class FilesappproController extends Controller
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
        $appelprojets = appelProjet::all();
        $filesapppros = filesapppro::all();
        return view('filesapppros.index',compact('filesapppros','appelprojets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $appelprojets = appelProjet::all();
        $filesapppros = filesapppro::all();
        return view('filesapppros.add',compact('appelprojets','appelprojets'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new filesapppro([
            'files_id ' => $request->get('files_id ')
        ]);
        $file = $request->file('announce');
        $name = $file->getClientOriginalName();
        $file->move(public_path() . '/announce/', $name);
        $data->announce = $name;

        $file = $request->file('formulaire');
        $name = $file->getClientOriginalName();
        $file->move(public_path() . '/formulaire/', $name);
        $data->formulaire = $name;
        
        $file = $request->file('firstpick');
        $name = $file->getClientOriginalName();
        $file->move(public_path() . '/firstpick/', $name);
        $data->firstpick = $name;

        $file = $request->file('projectfunds');
        $name = $file->getClientOriginalName();
        $file->move(public_path() . '/projectfunds/', $name);
        $data->projectfunds = $name;

        $data->save();
        return redirect('/filesapppros')->with('success', 'files has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\filesapppro  $filesapppro
     * @return \Illuminate\Http\Response
     */
    public function show(filesapppro $filesapppro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\filesapppro  $filesapppro
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $appelprojets = appelProjet::all();
        $filesapppros = filesapppro::find($id);
        return view('filesapppros.edit', compact('filesapppros', 'appelprojets'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\filesapppro  $filesapppro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $filesapppros = filesapppro::findOrFail($id);
        $file = $request->file('announce');
        $name = $file->getClientOriginalName();
        $file->move(public_path() . '/announce/', $name);
        $filesapppros->announce = $name;

   
            $file = $request->file('formulaire');
            $name = $file->getClientOriginalName();
            $file->move(public_path() . '/formulaire/', $name);
            $filesapppros->formulaire = $name;
        
     
            $file = $request->file('firstpick');
            $name = $file->getClientOriginalName();
            $file->move(public_path() . '/firstpick/', $name);
            $filesapppros->firstpick = $name;
   

            $file = $request->file('projectfunds');
            $name = $file->getClientOriginalName();
            $file->move(public_path() . '/projectfunds/', $name);
            $filesapppros->projectfunds = $name;

        $filesapppros->files_id  = $request->files_id ;
        $filesapppros->update();
        return redirect('/filesapppros')->with('success', 'Update has been successful');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\filesapppro  $filesapppro
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $filesapppros = filesapppro::find($id);
        $filesapppros->delete();
        return redirect()->back()->with('success', 'Music successfully deleted');

    }
}
