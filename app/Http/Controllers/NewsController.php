<?php

namespace App\Http\Controllers;

use App\Models\news;
use Illuminate\Http\Request;
use App\Models\newscontent;


class NewsController extends Controller
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
        $newss = news::all();
        return view('newss.index',compact('newss'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $newss = news::all();
        return view('newss.add',compact('newss'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newss = new news();

     
        $newss->name = $request->name;

        $newss->save();
        return redirect(app()->getLocale().'/mchroe')->with('success','news est ajouter');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\news  $news
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $newss = news::all();
        $newscontents = newscontent::where('news_id', "=", $id)->get();
        // $products = $prod->categories;
        $newss = news::findOrFail($id);
        return view('newss.show', compact('newss', 'newscontents'));
    }

    public function display($id){
        $newscontents = newscontent::find($id);
        return view('newss.display', compact('newscontents'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\news  $news
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $newss = news::find($id);
        return view('newss.edit',compact('newss'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\news  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $newss=news::findOrFail($id);
        $newss->name = $request->input('name');
        $newss->update();

        return redirect(app()->getLocale().'/mchroe')->with('success','Modification a été effectue');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\news  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $newss = news::find($id);
        $newss->delete();
        return redirect(app()->getLocale().'/mchroe')->with('success', 'News a été supprimer');
    }

    public function navbar()
    {
        $newss = news::all();
        return view('welcome',compact('newss'));
    }



}
