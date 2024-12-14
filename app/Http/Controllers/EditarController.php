<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Perfil;

class EditarController extends Controller
{
    public function perfil( $id ){
        $usuario = Perfil::where('id', '=', $id)->get();
       //dd($usuario);
        return view('perfil', compact('usuario'));
    }

    public function editar( $id ){
        $usuario = User::where('id','=', $id)->get();
        return view('editarPerfil', compact ('usuario'));
    }

    public function atualizar(Request $request){
        $usuario = User::findOrFail($request->id);
        $usuario-> update([
            'nome' => $request->input('nome'),
            'sobrenome' => $request->input('sobrenome'),
            'telefone' => $request->input('telefone'),
            'email' => $request->input('email'),
            'redes' => $request->input('redes'),
            'cursos' => $request->input('cursos'),
            'formacoes' => $request->input('formacoes'),
            'experiencias' => $request->input('experiencias'),
            'sobre' => $request->input('sobre'),
        ]);
        return view('perfil', compact('usuario'));
    }
}
