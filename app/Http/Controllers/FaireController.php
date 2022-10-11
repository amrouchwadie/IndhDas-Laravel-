<?php

namespace App\Http\Controllers;

use App\Models\faire;
use Illuminate\Http\Request;

class FaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function programme1(){
         return view('programmes.p1');
     }

    public function index()
    {
        
        $faires = faire::find(auth()->user()->id);
        return view('faires.index',compact('faires'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $faires = faire::all();
        return view('faires.index',compact('faires'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $faires = new faire();

        $faires->description = $request->description;
        $faires->checked = $request->checked;
        $faires->save();
        return redirect(app()->getLocale().'/faires')->with('');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\faire  $faire
     * @return \Illuminate\Http\Response
     */
    public function show(faire $faire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\faire  $faire
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $faires=faire::find($id);
        return view('faires.index',compact('faires'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\faire  $faire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $faires=faire::find($id);
        $faires->description = $request->input('description');
        $faires->checked = $request->input('checked');
        $faires->update();

        return redirect()->back()->with('alert-class', 'Tache Cochée');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\faire  $faire
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $faires = faire::find($id);
        $faires->delete();
        return redirect()->back()->with('alert-class', 'Tache a été supprimer');
    }
}
