<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('perfil.css') }}">
    <title>Perfil do usuário</title>
</head>
<body>

    <nav>
        <a href="/inicial" id="teste">Workers</a>
        <ul class="nav-links">
            <li class="link"><a href="/inicial">Inicio</a></li>
            <li id="link1" class="link"><a href="#">Recursos</a></li>
            <li id="link3" class="dropdown">
                <a class="frase" href="#">Segurança</a>
                <div class="dropdown-content">
                    <a href="/regrasdacomunidade/regrasComunidade">Regras da Comunidade</a>
                    <a href="/dicasdeseguranca/dicasDeSeguranca">Dicas de Segurança</a>
                    <a href="/segurancaDenuncia/segurancaDenuncia">Segurança e Denúncia</a>
                </div>
            </li>
        </ul>
    </nav>
 
    <section class="home">
 
        <div class="home-img">
            <img src="/image/workers.png" alt="" id="foto">
        </div>
   
        <div class="home-content">
            <h1>Nome do Usuário</h1>
            <p>Bem-Vindo ao seu perfil pessoal!</p>
        </div>
 
    </section>
 
 
    <h2 class="pre-curriculo">Minhas Informações</h2>
 
 
    <div class="container">
 
        <div class="sobre">
            <h2>Sobre Mim</h2>
            <p>{{ $usuario[0]->sobre }}</p>
        </div>
           
        <br><hr>
       
        <div class="cursos">
            <h2>Cursos</h2>
            <p>{{ $usuario[0]->curso }}</p>
        </div>
           
        <br><hr>
       
        <div class="formacoes">
            <h2>Formações</h2>
            <p>{{ $usuario[0]->formacoes }}</p>
        </div>
 
        <br><hr>
       
        <div class="experiencia">
            <h2>Experiências anteriores</h2>
            <p>{{ $usuario[0]->experiencias }}</p>
        </div>
       
        <br><hr>
   
        <div class="contatos">
            <h2>Contatos</h2>
            <ul>
                <li>{{ $usuario[0]->telefone }}</li>
                <li>{{ $usuario[0]->email }}</li>
                <li>{{ $usuario[0]->redes }}</li>
            </ul>
        </div>

        <br><hr>
 
    </div>

    <button class="botao"><a href="/perfilUsuario/editarCurriculo">Editar Currículo</a></button>
    <button class="botao"><a href="/perfilUsuario/MinhasVagas">Minhas Vagas</a></button>
       
     
   
</body>
</html>