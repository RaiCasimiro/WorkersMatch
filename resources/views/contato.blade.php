<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('contato.css') }}">
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


    <section class="contact">
        <div class="contact-form">
            <h1>Contate-<span>nos</span></h1>
            <p>Está com problemas? Precisa da nossa ajuda? Nos envie uma mensagem explicando o problema, vamos ajudar você a resolver!
            </p>
 
            <form action="/contato" method="POST">
                @csrf
                <input type="text" placeholder="Seu nome" name="nome" required>
                <input type="email" name="email" id="" placeholder="E-mail" required>
                <input type="text" placeholder="Escreva o assunto" name="assunto" required>
                <textarea id="" cols="30" rows="10" placeholder="Sua mensagem" name="contato" required></textarea>
                <a href="/inicial"><input type="submit" value="Enviar" class="btn"></a>
           
            </form>
        </div>
 
        <div class="inicio-img">
            <img src="../image/Tecnologia2.jpg">
        </div>
    </section>

</body>
</html>