<?php

namespace App\Http\Controllers;

use Rules\Password;
use App\Models\User;
use App\Mail\LoginMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::paginate(10);
        return view('users.userList', compact('users')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.userCreate'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'adresse' => ['required', 'string', 'max:255'],
            'numeroTelephone' => ['required', 'string', 'max:255'],
            'typeuser' => ['required', 'string', 'max:255'],
        ]);

        $comb = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array(); 
        $combLen = strlen($comb) - 1; 
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $combLen);
            $pass[] = $comb[$n];
        }
        $generatepassword = implode($pass) ;
        //var_dump($generatepassword); exit;

        if($request->typeuser == 'pers'){
            $user = User::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'adresse' => $request->adresse,
            'numeroTelephone' => $request->numeroTelephone,
            'dateDeNaissance' => $request->dateDeNaissance,
            'role' => $request->role,
            'password' => Hash::make($generatepassword),
        ]);
        }
        elseif($request->typeuser == 'pro') {
            $user = User::create([
            'sigle' => $request->sigle,
            'libelle' => $request->libelle,
            'email' => $request->email,
            'adresse' => $request->adresse,
            'numeroTelephone' => $request->numeroTelephone,
            'description' => $request->description,
            'type' => $request->type,
            'password' => Hash::make($generatepassword),
        ]);
        }

        Mail::to($request->email)->send(new LoginMail($generatepassword));

        return redirect()->route('user.index');

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
    public function edit(Request $request, User $user)
    {
        return view('users.userUpdate', compact('user')) ;
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
    public function destroy(Request $request, User $user)
    {
        $user->delete();
        return redirect()->route('user.index');
    }
}
