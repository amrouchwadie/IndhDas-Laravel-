<?php

namespace App\Http\Controllers;

use App\Models\news;
use App\Models\newscontent;
use Illuminate\Http\Request;
use App\Models\Version;
use App\Models\DocVers;
use App\Models\filesapppro;
use App\Models\appelProjet;
use App\Models\Project;
use App\Models\post;

class ClientController extends Controller
{
    public function projects()
    {
        $newss = news::all();
        return view('layouts.navigation2',compact('newss'));
    }

    public function nav()
    {
        $newss = news::all();
        return view('welcome',compact('newss'));
    }
   

    public function version(){
        $versions = Version::all();
        return view('versions.home',compact('versions'));
    }

    public function versdoc($id){
        $versions = Version::all();
        $Docverss = DocVers::where('version_id', "=", $id)->get();
        // $products = $prod->categories;
        $versions = Version::findOrFail($id);
        return view('versions.display', compact('versions', 'Docverss'));
    }

    public function appelprojet()
    {
        $appelprojets = appelProjet::all();
        return view('appelprojets.home',compact('appelprojets'));
    }

    public function dissplay($id)
    {
        $appelprojets = appelProjet::findOrFail($id);
        return view('appelprojets.display', compact('appelprojets'));

    }


    public function media()
    {
        $projects = Project::all();
        return view('projects.home',compact('projects'));
    }

    
    public function post()
    {
        $posts = post::all();
        return view('posts.home', compact('posts'));
    }


    public function news()
    {
        $posts = post::all();
        return view('welcome', compact('posts'));
    }

    public function actualite($id)
    {
        $posts = post::find($id);
        return view('posts.display',compact('posts'));
    }
    
    public function affiche($id)
    {
        $newss = news::all();
        $newscontents = newscontent::where('news_id', "=", $id)->get();
        // $products = $prod->categories;
        $newss = news::findOrFail($id);
        return view('newss.affiche', compact('newss', 'newscontents'));
    }

    public function contenuaffiche($id){
        $newscontents = newscontent::find($id);
        return view('newss.contenuaffiche', compact('newscontents'));
    }



}


