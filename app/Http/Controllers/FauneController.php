<?php

namespace App\Http\Controllers;

use App\Models\Espece;
use Illuminate\Http\Request;

class FauneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $especes = Espece::where('categorie', 'faune')->paginate(10);
        return view('espece.faune.fauneList', compact('especes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('espece.faune.fauneCreate');
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
            'taille_min' => ['required'],
            'taille_max' => ['required'],
            'poid_min' => ['required'],
            'poid_max' => ['required'],
            'type_regime' => ['required', 'string', 'max:191'],
            'type_reproduction' => ['required', 'string', 'max:191'],
        ]);

        $file = $request->file("banniere");
        $filePath = $file->store('flore', 'public') ;
        $espece = Espece::create([
            'nom' => $request->nom,
            'nom_scientifique' => $request->nom_scientifique,
            'famille' => $request->famille,
            'description' => $request->description,
            'categorie' => 'flore',
            'longevite' => $request->longevite,
            'image' => $filePath,
            'taille_min' => $request->taille_min,
            'taille_max' => $request->taille_max,
            'poid_min' => $request->poid_min,
            'poid_max' => $request->poid_max,
            'type_regime' => $request->type_regime,
            'type_reproduction' => $request->type_reproduction,
        ]);
        return redirect()->route('faune.index');
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
        return redirect()->route('faune.index');
    }
}
