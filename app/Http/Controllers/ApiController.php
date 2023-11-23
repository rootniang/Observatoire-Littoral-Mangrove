<?php

namespace App\Http\Controllers;

use App\Models\User;
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
}
