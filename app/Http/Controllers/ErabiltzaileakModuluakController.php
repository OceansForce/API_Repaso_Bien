<?php

namespace App\Http\Controllers;

use App\Models\erabiltzaileak;
use App\Models\moduluak;
use App\Models\erabiltzaileak_moduluak;
use Illuminate\Http\Request;

class ErabiltzaileakModuluakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function nm($id)
    {
        
        $erabiltzaileak = erabiltzaileak::findOrFail($id);
        return response()->json($erabiltzaileak->moduluak);
    }

    public function index()
    {
        $user = auth()->user();
        if (!$user) {
            return response()->json(['error' => 'User not authenticated'], 401);
        }
        $id= $user->id;
        $erabiltzaileak = erabiltzaileak::findOrFail($id);
        return response()->json($erabiltzaileak->moduluak);
    }

    public function matrikulatu(Request $request){

        $user = auth()->user();
        if (!$user) {
            return response()->json(['error' => 'User not authenticated'], 401);
        }

        $request->validate([
            'modulu_id' => 'required|exists:moduluak,id', // Asegura que el módulo existe en la base de datos
        ]);

        $mudulo_id= $request->validate([
            'modulu_id'=>'required',
        ]);

        

        $user->moduluak()->attach($mudulo_id);
        

        return response()->json('Módulos asignados correctamente');
    }

}
