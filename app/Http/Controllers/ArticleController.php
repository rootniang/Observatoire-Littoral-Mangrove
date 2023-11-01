<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::paginate(10);
        return view('articles.articlesList', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articles.articlesCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'titre' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'banniere' => ['required', 'image', 'max:2000'],
            'contenu' => ['required'],  
        ]);

        $file = $request->file("banniere");
        $imagePath = $file->store('article', 'public') ;
        $article = Article::create([
            'titre' => $request->titre,
            'description' => $request->description,
            'banniere' => $imagePath,
            'contenu' => $request->contenu,
            'auteur' => Auth::user()->id,
        ]);
        if($request->file("assets") && $request->input('typeasset')){
            for ($i=0; $i < count($request->file("assets")); $i++) { 
                $res = $request->file("assets")[$i];
                $resPath = $res->store('assets', 'public');
                $asset = Asset::create([
                    'type' => $request->input('typeasset')[$i],
                    'chemin' => $resPath,
                    'article_id' => $article->id ,
                ]);
            }
        }
        return redirect()->route('article.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Article $article)
    {
        $article->delete();
        return redirect()->route('article.index');
    }
}
