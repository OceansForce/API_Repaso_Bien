<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreerabiltzaileakRequest;
use App\Http\Requests\UpdateerabiltzaileakRequest;
use App\Models\erabiltzaileak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ErabiltzaileakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
       $request->validate([
            'email'=>'required|email'
       ]);

       $erabiltzailea = erabiltzaileak::where('email', $request->email)->first();

       $erabiltzaileak= erabiltzaileak::all();

       if(!$erabiltzailea){
            return response()->json(['error' => 'Datuak gaixki daude'], 401);
       }elseif($erabiltzailea->Irakaslea !=='true'){
            return response()->json(['error' => 'EZ da Irakaslea'], 401);
       }

       return response()->json($erabiltzaileak);
    }

    public function login(Request $request){

        //Datuak balidatzeko
        $request->validate([
            'email'=> 'required|email',
            'pasahitza'=>'required|min:6',
        ]);

        // Encontrar el correo
        $user = erabiltzaileak::where('email', $request->email)->first();

        if(!$user || $user->pasahitza !== $request->pasahitza){
            return response()->json(['error' => 'Datuak gaixki daude'], 401);
        }

        $token = $user->createToken($request->email)->plainTextToken;

        return response()->json([
            'message' => 'Login egin da',
            'user' => $user,
            'token' => $token,
        ]);
    }
    

    public function logout(Request $request)
    {
        $user= Auth::user();

        if (!$user) {
            // Revocar el token de acceso
            return response()->json('No hay un usuario autenticado', 401);
            
        }

        $user->tokens()->delete();
        return response()->json('Has cerrado sesion correctamente');
       
    }
}
