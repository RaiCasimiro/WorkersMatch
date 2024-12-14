<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="{{ asset('cadastroLogin.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Cadastro/login</title>
  </head>
  <body>



      <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="/cadastroLogin" class="sign-in-form" id="signin-form" method="POST">
            <h2 class="title">LOGIN</h2>

              @csrf
              <div class="input-field">
              <i class="fas fa-user"></i>
                <input type="text" name="email" placeholder="E-mail" />
              </div>
              <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Senha" />
              </div>
              <button type="submit" value="Entrar" class="btn solid">Entrar</button>
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
         
          <form action="/cadastro2" class="sign-up-form" id="signup-form" method="POST">
            <h2 class="title">CADASTRO</h2>

      
              @csrf
              <div class="input-group">
                <div class="input-box">
                  <label for="firstname">Nome</label>
                  <input id="firstname" type="text" name="nome" placeholder="Seu nome" required>
                </div>
 
                <div class="input-box">
                  <label for="lastname">Sobrenome</label>
                  <input id="lastname" type="text" name="sobrenome" placeholder="Seu sobrenome" required>
                </div>
                <div class="input-box">
                  <label for="email">E-mail</label>
                  <input id="email" type="email" name="email" placeholder="Seu e-mail" required>
                </div>
 
                <div class="input-box">
                  <label for="number">Celular</label>
                  <input id="number" type="tel" name="telefone" placeholder="(xx) xxxx-xxxx" required size="15" maxlength="12">
                </div>
 
                <div class="input-box">
                  <label for="password">Senha</label>
                  <input id="password" type="password" name="password" placeholder="Sua senha" required>
                </div>
 
 
                <div class="input-box">
                  <label>Estado:</label>
                  <select name="estado" id="uf">
                    <option class="gender-inpu" value="0">Escolha sua Região</option>
                    <optgroup label="Norte">
                      <option value="Acre">Acre</option>
                      <option value="Amazonas">Amazonas</option>
                      <option value="Amapá">Amapá</option>
                      <option value="Pará">Pará</option>
                      <option value="Rondônia">Rondônia</option>
                      <option value="Roraima">Roraima</option>
                      <option value="Tocantins">Tocantins</option>
                    </optgroup>
                    <optgroup label="Nordeste">
                      <option value="Alagoas">Alagoas</option>
                      <option value="Bahia">Bahia</option>
                      <option value="Ceará">Ceará</option>
                      <option value="Maranhão">Maranhâo</option>
                      <option value="Piauí">Piauí</option>
                      <option value="Pernambuco">Pernambuco</option>
                      <option value="Paraíba">Paraíba</option>
                      <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                      <option value="Sergipe">Sergipe</option>
                    </optgroup>
                    <optgroup label="Centro-Oeste">
                      <option value="Goiás">Goiás</option>
                      <option value="Mato Grosso">Mato Grosso</option>
                      <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                      <option value="Distrito Federal">Distrito Federal</option>
                    </optgroup>
                    <optgroup label="Sudeste">
                      <option value="Espirito Santo">Espirito Santo</option>
                      <option value="Minas Gerais">Minas Gerais</option>
                      <option value="Rio de Janeiro">Rio de Janeiro</option>
                      <option value="São Paulo">São Paulo</option>
                    </optgroup>
                    <optgroup label="Sul">
                      <option value="Paraná">Paraná</option>
                      <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                      <option value="Santa Catarina">Santa Catarina</option>
                    </optgroup>
                  </select>
                </div>

                <div class="input-box">
                  <label class="gender-inpu" >Cidade</label>
                  <input class="gender-inpu" name="cidade" id="cidade" type="text" placeholder="Cidade" required>
                </div>
 
                <div class="input-box">
                  <label>CEP</label>
                  <input class="gender-inpu" name="cep" id="cep" type="text" placeholder="21365-000" required size="15" maxlength="8" required>
                </div>
             
                <div class="input-box">
                  <label>Bairro</label>
                  <input class="gender-inpu" name="bairro" id="bairro" type="text" placeholder=" Bairro" required>
                </div>
 
                <div class="input-box">
                  <label>Rua</label>
                  <input class="gender-inpu" name="rua" type="text" size="20" placeholder="Nome da rua" required>
                </div>
 
                <div class="input-box">
                  <label for="number">Número</label>
                  <input id="number" type="tel" name="numero" size="15" placeholder="Número casa" required size="4" maxlength="5" required>
                </div>
               
                <div class="input-box">
                  <label>Complemento</label>
                  <input class="gender-inpu" name="complemento" type="text" size="23" placeholder="Andar, Apartamento,Bloco">
                </div>
              </div>
              <button type="submit" class="btn-cadastro" value="Cadastrar"> Cadastrar </button>
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
          <img src="image/login.png" class="image" alt="" />
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
          <img src="image/cadastroLogin.png" class="image" alt="" />
        </div>
      </div>
    </div>
 
    <script src="cadastroLogin.js"></script>
  </body>
</html>