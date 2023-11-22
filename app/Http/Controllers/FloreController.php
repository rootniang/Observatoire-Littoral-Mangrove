<?php

namespace App\Http\Controllers;

use App\Models\Espece;
use Illuminate\Http\Request;

class FloreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $especes = Espece::paginate(10);
        return view('espece.flore.floreList', compact('especes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('espece.flore.floreCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => ['required', 'string', 'max:191'],
            'nom_scientifique' => ['required', 'string', 'max:191'],
            'famille' => ['required', 'string', 'max:191'],
            'longevite' => ['required', 'string', 'max:191'],
            'description' => ['required'],
            'banniere' => ['required'],
            'hauteur_min' => ['required'],
            'hauteur_max' => ['required'],
            'genre' => ['required', 'string', 'max:191'],
        ]);

        $file = $request->file("banniere");
        $filePath = $file->store('flore', 'public') ;
        $espece = Espece::create([
            'nom' => $request->nom,
            'nom_scientifique' => $request->nom_scientifique,
            'famille' => $request->famille,
            'description' => $request->description,
            'longevite' => $request->longevite,
            'image' => $filePath,
            'hauteur_min' => $request->hauteur_min,
            'hauteur_max' => $request->hauteur_max,
            'genre' => $request->genre,
        ]);
        return redirect()->route('flore.index');
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
    public function destroy(Request $request, Espece $espece)
    {
        $espece->delete();
        return redirect()->route('flore.index');
    }
}
