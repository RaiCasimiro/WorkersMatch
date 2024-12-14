<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){

        return view('cadastroLogin');
    }

    public function store(Request $request){
        

        $validatedDate = $request -> validate([

            'nome' => 'required',
            'sobrenome' => 'required',
            'cpf'  => 'required',
            'email'  => 'required',
            'telefone'  => 'required',
            'cep'  => 'required',
            'bairro'  => 'required',
            'cidade'  => 'required',
            'numero' => 'required',
            'rua'  => 'required',
            'estado'  => 'required',
            'senha' => 'required',

        ]);
/*
        $cadastro = new Cadastro();
        $cadastro-> nome = $validatedData['nome'];
        $cadastro-> sobrenome = $validatedData['sobrenome'];
        $cadastro-> cpf = $validatedData['cpf'];
        $cadastro-> email = $validatedData['email'];
        $cadastro-> telefone = $validatedData['telefone'];
        $cadastro-> cep = $validatedData['cep'];
        $cadastro-> numero = $validatedData['numero'];
        $cadastro-> rua = $validatedData['rua'];
        $cadastro-> estado = $validatedData['estado'];
        $cadastro-> nascimento = $validatedData['nascimento'];
        $cadastro-> genero = $validatedData['genero'];
        $cadastro-> etnia = $validatedData['etnia'];
        $cadastro-> estado_civil = $validatedData['estado_civil'];
        $cadastro-> certificacoes = $validatedData['certificacoes'];
        $cadastro-> idiomas = $validatedData['idiomas'];
        $cadastro-> apresentacao = $validatedData['apresentacao'];
        $cadastro-> usuario = $validatedData['usuario'];
        $cadastro-> senha = bcrypt($validatedData['senha']);
        $cadastro-> save();*/

        /* $cadastro = new Cadastro();
        $cadastro-> nome = $request['nome'];
        $cadastro-> sobrenome = $request['sobrenome'];
        $cadastro-> email = $request['email'];
        $cadastro-> telefone = $request['telefone'];
        $cadastro-> cep = $request['cep'];
        $cadastro-> bairro = $request['bairro'];
        $cadastro-> complemento = $request['complemento'];
        $cadastro-> numero = $request['numero'];
        $cadastro-> rua = $request['rua'];
        $cadastro-> estado = $request['estado'];
        $cadastro-> cidade = $request['cidade'];
        $cadastro-> genero = $request['genero'];
        $cadastro-> senha = bcrypt($request['senha']);
        $cadastro-> save();

        return $request['nome'];

        //return redirect('/inicial')->with('success', 'Usuário criado com sucesso!');*/
    }

    public function store2(Request $request)
    {

        $cadastro = new User();
        $cadastro-> nome = $request['nome'];
        $cadastro-> sobrenome = $request['sobrenome'];
        $cadastro-> email = $request['email'];
        $cadastro-> telefone = $request['telefone'];
        $cadastro-> password = bcrypt($request['password']);
        $cadastro-> estado = $request['estado'];
        $cadastro-> cidade = $request['cidade'];
        $cadastro-> cep = $request['cep'];
        $cadastro-> bairro = $request['bairro'];
        $cadastro-> rua = $request['rua'];
        $cadastro-> numero = $request['numero'];
        $cadastro-> complemento = $request['complemento'];

        $cadastro-> save();

        return redirect('inicial');
    }

    public function validaUsuario (Request $dadosLogin){

        $credenciais = $dadosLogin->only('email','password');

        if(Auth::attempt($credenciais)){
            return redirect() ->intended("/wm");

        }else{
            return back()->with("error", "Usuário ou senha incorretos");
        }

    }




}
