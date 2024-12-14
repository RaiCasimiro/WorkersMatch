<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=7, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('login.css') }}">
</head>
<body>
 
    <form action="/login" method="POST">
        @csrf
        
        <div class="box">

        <h1 id="logo">WM</h1>
        <h2 id="frase">ENTRE NA SUA CONTA</h2>
        <h2 id="frase1">Por favor, preencha abaixo</h2>
 
        <div class="inputs">
            <input id="input" type="text" name="email" placeholder="Email ou Nome de Usuário">
            <br>
            <br>
            <input id="input" type="text" name="password" placeholder="Senha">
        </div>
 
        <button type="submit" id="botao">Entrar</button>

    </form>
 
</div>
 
</body>
</html>