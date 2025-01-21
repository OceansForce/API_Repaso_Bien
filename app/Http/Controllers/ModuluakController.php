<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\moduluak;

class ModuluakController extends Controller
{
    //Enseñar
    public function index()
    {
        $moduloak=moduluak::all();
        return response()->json($moduloak);
    }

    //Crear
    public function store(Request $request)
    {
        $file= $request->validate([
            'id'=>'required',
            'izena'=>'required',
            'gela'=>'required',
        ]);

        $creacion= moduluak::create($file);
        return ['Se a creado'=> $creacion];
    }

    //Editar
    public function update(Request $request, moduluak $moduluak)
    {
        $file= $request->validate([
            'id'=>'required',
            'izena'=>'required',
            'gela'=>'required',
        ]);

        $moduluak->update($file);
        return  $moduluak;
    }

    //Borrar
    public function destroy(moduluak $moduluak)
    {
        $moduluak->delete();
        return ["Mensaje"=>"Se a Eliminado"];
    }
}
