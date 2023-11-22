<?php

namespace App\Http\Controllers;

use App\Models\Espece;
use Illuminate\Http\Request;

class EspeceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $especes = Espece::paginate(10);
        return view('espece.especeList', compact('especes'));
    }

    /** 
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('espece.especeCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => ['required', 'string', 'max:255'],
        ]);

        $espece = Espece::create([
            'nom' => $request->nom,
        ]);
        return redirect()->route('espece.index');
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
    public function edit(Request $request, Espece $espece)
    {
        return view('espece.especeUpdate', compact('espece'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Espece $espece)
    {
        $request->validate([
            'nom' => ['required', 'string', 'max:255'],
        ]);

        $espece->update([
            'nom' => $request->nom,
        ]);
        return redirect()->route('espece.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Espece $espece)
    {
        $espece->delete();
        return redirect()->route('espece.index');
    }
}
