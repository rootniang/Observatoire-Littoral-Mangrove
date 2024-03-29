<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Espece;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ApiController extends Controller
{
    public function index() {
        $acces_token = DB::select('select * from personal_access_tokens');
        $id = Auth::user()->id ;
        $email = Auth::user()->email ;
        $password = Auth::user()->password ;
        return view('api.apigenerate', compact('acces_token', 'id', 'email', 'password'));
    }

    public function authenticate(Request $request) {

        $user = User::where('email', $request->email)->first();

        if($request->password == $user->password) {
            return response()->json([
                'token' => $user->createToken(time())->plainTextToken
            ]);
        }
    }

    public function dashboard() {
        echo 'Yess' ;
    }

    public function getEspeces(Request $request) {
        $categorie = strip_tags($request->query('categorie')) ;
        if ($categorie) {
            if ($categorie == 'faune') {
                return response()->json(Espece::where('categorie', 'faune')->get());
            } elseif($categorie == 'flore') {
                return response()->json(Espece::where('categorie', 'flore')->get());
            } else {
                return response()->json(["status" => "error"]);
            }
        }
        else{
            return response()->json(Espece::all());
        }
    }

    public function getMedias(Request $request) {
        
    }

    public function getActualites(Request $request) {
       
    }

    public function getArticles(Request $request) {
        
    }

    public function getZones(Request $request) {
        
    }
}
