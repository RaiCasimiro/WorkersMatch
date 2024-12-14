<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="{{ asset('cadastro2.css') }}">
    <title>Cadastro/login</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="#" class="sign-in-form">
            <h2 class="title">LOGIN</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Nome" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Senha" />
            </div>
            <input type="submit" value="Entrar" class="btn solid" />
            <p class="social-text">Siga nossas redes sociais</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>                      
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
            </div>
          </form>
         
          <form action="#" class="sign-up-form">
            <h2 class="title">CADASTRO</h2>
 
            <div class="input-group">
              <div class="input-box">
                  <label for="firstname">Nome</label>
                  <input id="firstname" type="text" name="firstname" placeholder="Seu nome" required>
              </div>
 
              <div class="input-box">
                  <label for="lastname">Sobrenome</label>
                  <input id="lastname" type="text" name="lastname" placeholder="Seu sobrenome" required>
              </div>
              <div class="input-box">
                  <label for="email">E-mail</label>
                  <input id="email" type="email" name="email" placeholder="Seu e-mail" required>
              </div>
 
              <div class="input-box">
                  <label for="number">Celular</label>
                  <input id="number" type="tel" name="number" placeholder="(xx) xxxx-xxxx" required size="15" maxlength="12">
              </div>
 
              <div class="input-box">
                  <label for="password">Senha</label>
                  <input id="password" type="password" name="password" placeholder="Sua senha" required>
              </div>
 
 
 
              <div class="input-box">
                <label class="gender-inpu" >Cidade</label>
                <input class="gender-inpu" id="cidade" type="text" placeholder="Cidade" required>
              </div>
 
              <div class="input-box">
                <label>CEP</label>
                <input class="gender-inpu" id="cep" type="text" placeholder="21365-000" required size="15" maxlength="8" required>
              </div>
             
              <div class="input-box">
                <label>Bairro</label>
                <input class="gender-inpu" id="bairro" type="text" placeholder=" Bairro" required>
              </div>
 
              <div class="input-box">
                <label>Rua</label>
                <input class="gender-inpu" type="text" size="20" placeholder="Nome da rua" required>
              </div>
 
              <div class="input-box">
                <label for="number">Número</label>
                <input id="number" type="tel" name="number" size="15" placeholder="Número casa" required size="4" maxlength="5" required>
              </div>
               
              <div class="input-box">
                <label>Complemento</label>
                <input class="gender-inpu" type="text" size="23" placeholder="Andar, Apartamento,Bloco">
              </div>
 
 
          </div>
            <input type="submit" class="btn-cadastro" value="Cadastrar" />
          </form>
        </div>
      </div>
 
      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Não tem uma conta?</h3>
            <p>
              Bem vindo a Workers Match! Crie sua conta e ache o seu emprego dos sonhos!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Cadastrar-se
            </button>
          </div>
          <img src="img/login.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Já tem uma conta?</h3>
            <p>
              Já tem uma conta em nosso site? Deseja entrar com ela?
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Entrar
            </button>
          </div>
          <img src="img/cadas.svg" class="image" alt="" />
        </div>
      </div>
    </div>
 
    <script src="cadastro.js"></script>
  </body>
</html>