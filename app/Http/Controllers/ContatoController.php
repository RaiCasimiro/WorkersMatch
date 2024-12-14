<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class ContatoController extends Controller
{
    public function index1(){

        return view ('inicial/contato');
    }


    public function store1(Request $request){
        $contato = new Contato();

        $contato-> nome = $request['nome'];
        $contato-> email = $request['email'];
        $contato-> assunto = $request['assunto'];
        $contato-> contato = $request['contato'];

        $contato-> save();

        return redirect('inicial');
    }
    
}
