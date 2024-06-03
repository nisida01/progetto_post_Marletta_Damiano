<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WriterController extends Controller
{
    public function dashboard(){
        $articles = Auth::user()->orderBy('created_at' , 'desc')->get();

        $unrevisionedArticles = $articles->where('is_accepted' , '===' , NULL);
        $acceptedArticles =$articles->where('is_accepted' , true);
        $rejectedArticles = $articles->where('is_accepted' , '===' , 0);

        return view('writer.dashboard' , compact('unrevisionedArticles' , 'acceptedArticles' , 'rejectedArticles'));
    }
}
