<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::paginate(10);
        return view('news.newsList', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('news.newsCreate');
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
        ]);

        $file = $request->file("banniere");
        $imagePath = $file->store('actualite', 'public') ;
        $news = News::create([
            'titre' => $request->titre,
            'description' => $request->description,
            'banniere' => $imagePath,
            'auteur' => Auth::user()->id,
        ]);
        return redirect()->route('news.index');
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
    public function edit(Request $request, News $new)
    {
       return view('news.newsUpdate', compact('new'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $new)
    {
        $request->validate([
            'titre' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
        ]);
        $imagePath = $request->hiddenbanniere;
        $file = $request->file("banniere");
        if($file){
            $imagePath = $file->store('actualite', 'public') ;
        }
        $new->update([
            'titre' => $request->titre,
            'description' => $request->description,
            'banniere' => $imagePath,
        ]);
        return redirect()->route('new.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, News $new)
    {
        $new->delete();
        return redirect()->route('new.index');
    }
}
