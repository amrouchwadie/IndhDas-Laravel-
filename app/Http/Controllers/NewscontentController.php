<?php

namespace App\Http\Controllers;

use App\Models\news;
use App\Models\newscontent;
use Illuminate\Http\Request;

class NewscontentController extends Controller
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
        $newscontents = newscontent::all();
        return view('newscontents.index',compact('newscontents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $newss = news::all();
        $newscontents = newscontent::all();
        return view('newscontents.add',compact('newscontents','newss'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newscontents = new newscontent([
            'news_id' => $request->get('news_id')
        ]);

        $newscontents->titre = $request->titre;
        $newscontents->location = $request->location;
        $newscontents->annee = $request->annee;
        $newscontents->projet = $request->projet;
        $newscontents->objectif = $request->objectif;
        $newscontents->benificier = $request->benificier;

        if ($request->has('pic')) {
        $file = $request->file('pic');
        $name = $file->getClientOriginalName();
        $file->move(public_path() . '/photos/', $name);
        $newscontents->pic = $name;
        }

        if ($request->has('pic1')) {
        $file = $request->file('pic1');
        $name = $file->getClientOriginalName();
        $file->move(public_path() . '/photos/', $name);
        $newscontents->pic1 = $name;
        }
        if ($request->has('pic2')) {
        $file = $request->file('pic2');
        $name = $file->getClientOriginalName();
        $file->move(public_path() . '/photos/', $name);
        $newscontents->pic2 = $name;
    }
        if ($request->has('pic3')) {
        $file = $request->file('pic3');
        $name = $file->getClientOriginalName();
        $file->move(public_path() . '/photos/', $name);
        $newscontents->pic3 = $name;
    }
        if ($request->has('pic4')) {
        $file = $request->file('pic4');
        $name = $file->getClientOriginalName();
        $file->move(public_path() . '/photos/', $name);
        $newscontents->pic4 = $name;
    }

        $newscontents->save();
        return redirect(app()->getLocale().'/mchroecontent')->with('success', 'content has been added');


    }

  

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\newscontent  $newscontent
     * @return \Illuminate\Http\Response
     */
    public function show(newscontent $newscontent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\newscontent  $newscontent
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $newscontents = newscontent::find($id);
        return view('newscontents.edit',compact('newscontents'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\newscontent  $newscontent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\newscontent  $newscontent
     * @return \Illuminate\Http\Response
     */
    public function destroy(newscontent $newscontent)
    {
        //
    }
}
