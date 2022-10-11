<?php

namespace App\Http\Controllers;

use App\Models\message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $messages = message::all();
        return view('messages.index', compact('messages'));
    }

    public function chiffre(){
        return view('provinces.chiffre');
    }

    public function mission()
    {
       
        return view('provinces.mission');
    }

    public function ogov()
    {
       
        return view('provinces.ogov');
    }

    public function odas()
    {
       
        return view('provinces.odas');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = message::all();
        return view('messages.index', compact('messages'));
    }

    public function create()
    {
        //
        $messages = message::all();
        return view('messages.add', compact('messages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = new message();
  
        $messages->name = $request->name;
        $messages->email = $request->email;
        $messages->message = $request->message;
        $messages->save();
        return redirect(app()->getLocale().'/messages')->with('success','Projet est ajouter');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\message  $message
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $messages = message::find($id);
        return view('messages.show', compact('messages'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(message $message)
    {
        //
    }
}
