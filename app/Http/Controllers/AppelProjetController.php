<?php

namespace App\Http\Controllers;

use App\Models\filesapppro;
use App\Models\appelProjet;
use Illuminate\Http\Request;

class AppelProjetController extends Controller
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
        return view('appelprojets.index',compact('appelprojets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $appelprojets = appelProjet::all();
        return view('appelprojets.add',compact('appelprojets'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $appelprojets = new appelProjet();
        if ($request->has('announce')) {
            $file = $request->file('announce');
            $name = $file->getClientOriginalName();
            $file->move(public_path() . '/announce/', $name);
            $appelprojets->announce = $name;
        }
        if ($request->has('formulaire')) {
            $file = $request->file('formulaire');
            $name = $file->getClientOriginalName();
            $file->move(public_path() . '/formulaire/', $name);
            $appelprojets->formulaire = $name;
        }
        if ($request->has('firstpick')) {
            $file = $request->file('firstpick');
            $name = $file->getClientOriginalName();
            $file->move(public_path() . '/firstpick/', $name);
            $appelprojets->firstpick = $name;
        }
        if ($request->has('projectfunds')) {
            $file = $request->file('projectfunds');
            $name = $file->getClientOriginalName();
            $file->move(public_path() . '/projectfunds/', $name);
            $appelprojets->projectfunds = $name;
        }
        $appelprojets->titre = $request->titre;
        $appelprojets->description = $request->description;
        $appelprojets->datedebut = $request->datedebut;
        $appelprojets->datefin = $request->datefin;
        $appelprojets->save();
        return redirect(app()->getLocale().'/appelprojets')->with('success','Fund Demande est ajouter');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\appelProjet  $appelProjet
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $appelprojets = appelProjet::findOrFail($id);
        return view('appelprojets.show', compact('appelprojets'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\appelProjet  $appelProjet
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $appelprojets = appelProjet::findOrFail($id);
        return view('appelprojets.edit', compact('appelprojets'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\appelProjet  $appelProjet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $appelprojets = appelProjet::findOrFail($id);
        $appelprojets->titre = $request->input('titre');
        $appelprojets->description = $request->input('description');
        $appelprojets->datedebut = $request->input('datedebut');
        $appelprojets->datefin = $request->input('datefin');
        if ($request->has('announce')) {
            $file = $request->file('announce');
            $name = $file->getClientOriginalName();
            $file->move(public_path() . '/announce/', $name);
            $appelprojets->announce = $name;
        }
        if ($request->has('formulaire')) {
            $file = $request->file('formulaire');
            $name = $file->getClientOriginalName();
            $file->move(public_path() . '/formulaire/', $name);
            $appelprojets->formulaire = $name;
        }
      
        $appelprojets->update();
        return redirect(app()->getLocale().'/appelprojets')->with('success','appel projets a été bien modifier');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\appelProjet  $appelProjet
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $appelprojets = appelProjet::findOrFail($id);
        $appelprojets->delete();
        return redirect(app()->getLocale().'/appelprojets')->with('success', 'Genre has been Deleted');
    }
}
