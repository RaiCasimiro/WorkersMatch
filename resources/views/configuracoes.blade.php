<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Configurações</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/ef7b1eb764.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{asset('configuracoes.css')}}">
</head>
<body>

    <nav>
        <div class="nav-logo">
            <a href="/inicial">
                <h2 id="teste">Workers</h2> 
            </a>
        </div>
 
        <ul class="nav-links">
            <li class="link"><a href="#">Inicio</a></li>
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

    
<!-- <h1><i class="fa-solid fa-gear" id="titulo"></i>Configurações</h1> -->

<div class="opcoes">

    <a class="linha" href="/wm/configuracoes/editarPerfil"><i class="fa-solid fa-pen-to-square"></i>Editar Perfil</a>
    <hr>

    <a class="linha" href="" id="changePasswordLink"><i class="fa-solid fa-lock"></i>Alterar Senha</a>
    <div id="changePasswordModal" class="modal">
        <div class="modal-content">
            <h1><strong>WM</strong></h1>
            <h5>Alterar senha</h5>
            <p>Nova Senha</p>
            <input type="text">
            <br><br>
            <p>Confirme a nova senha</p>
            <input type="text">
            <br><br>
            <button class="modalAction" id="changePasswordAction">Salvar</button>
            <span class="close">x</span>
        </div>
    </div>
    <hr>

    <a class="linha" href="/perfilUsuario/editarCurriculo"><i class="fa-solid fa-scroll"></i>Editar Currículo</a>
    <hr>

    <a class="linha" href=""><i class="fa-solid fa-question"></i>Ajuda e Suporte</a>
    <hr>

    <a class="linha" href="" id="deleteAccountLink"><i class="fa-solid fa-trash"></i>Excluir Conta</a>
    <div id="deleteAccountModal" class="modal">
        <div class="modal-content">
            <h1><strong>WM</strong></h1>
            <h5>Deseja realmente excluir sua conta?</h5>
            <span class="modalAction" id="deleteAccountAction">Sim, eu quero excluir</span>
            <span class="close">Não, quero manter minha conta.</span>
        </div>
    </div>
    <hr>
 
    <a class="linha" href="" id="logoutLink"><i class="fa-solid fa-xmark"></i>Sair</a>
    <div id="logoutModal" class="modal">
        <div class="modal-content">
            <h1><strong>WM</strong></h1>
            <h5>Deseja realmente sair?</h5>
            <span class="modalAction" id="logoutAction">Sim, eu quero sair.</span>
            <span class="close">Não, quero continuar logado(a).</span>
        </div>
    </div>

</div>


    <script src="/configuracoes.js"></script>
</body>
</html>