<?php

namespace App\Http\Controllers;

use App\Models\Espece;
use App\Models\Ecosysteme;
use Illuminate\Http\Request;
use App\Models\EcosystemeHasEspece;
use Illuminate\Support\Facades\Auth;

class EcosystemeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ecosystemes = Ecosysteme::paginate(10);
        return view('ecosysteme.ecosystemeList', compact('ecosystemes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $especes = Espece::all();
        return view('ecosysteme.ecosystemeCreate', compact('especes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'libelle' => ['required', 'string', 'max:255'],
            'localisation' => ['required', 'string', 'max:255'],
            'typesol' => ['required'],
            'noms' => ['required'],
        ]);

        $ecosysteme = Ecosysteme::create([
            'libelle' => $request->libelle,
            'localisation' => $request->localisation,
            'typesol' => $request->typesol,
            'auteur' => Auth::user()->id,
        ]);
        foreach($request->noms as $nom){
            $ecosystemehasespece = EcosystemeHasEspece::create([
                'ecosysteme_id' => $ecosysteme->id,
                'espece_id' => $nom,
            ]);
        }
        return redirect()->route('ecosysteme.index');
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
    public function edit(Request $request, Ecosysteme $ecosysteme)
    {
        $especes = Espece::all();
        return view('ecosysteme.ecosystemeUpdate', compact('especes', 'ecosysteme'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ecosysteme $ecosysteme)
    {
        $request->validate([
            'libelle' => ['required', 'string', 'max:255'],
            'localisation' => ['required', 'string', 'max:255'],
            'typesol' => ['required'],
            'noms' => ['required'],
        ]);

        $ecosysteme->update([
            'libelle' => $request->libelle,
            'localisation' => $request->localisation,
            'typesol' => $request->typesol,
            'auteur' => Auth::user()->id,
        ]);
        $ecosysteme->updateEspeces($request->noms) ;
        return redirect()->route('ecosysteme.index'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Ecosysteme $ecosysteme)
    {
        $ecosysteme->delete();
        return redirect()->route('ecosysteme.index');
    }
}
