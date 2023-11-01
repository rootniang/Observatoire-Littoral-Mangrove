<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medias = Media::paginate(10);
        return view('media.mediaList', compact('medias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('media.mediaCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titre' => ['required', 'string', 'max:255'],
            'type' => ['required'],
            'chemin' => ['required'],
        ]);

        $file = $request->file("chemin");
        $filePath = $file->store('media', 'public') ;
        $Media = Media::create([
            'titre' => $request->titre,
            'type' => $request->type,
            'chemin' => $filePath,
            'auteur' => Auth::user()->id,
        ]);
        return redirect()->route('media.index');
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
    public function destroy(Request $request, Media $media)
    {
        $media->delete();
        return redirect()->route('media.index');
    }
}
