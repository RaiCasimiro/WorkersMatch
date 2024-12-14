<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workers Match</title>

    <link rel="stylesheet" href="{{ asset('wm.css') }}">
</head>
<body>

    <button id="openMenuButton">Abrir Menu</button>

  <div class="sidebar" id="sidebar">
    <button id="closeMenuButton">Fechar Menu</button>
    <h3>MENU</h3>
    <ul>
      <li><a href="#">Perfil</a></li>
      <li><a href="#">Editar Perfil</a></li>
      <li><a href="#">Currículo</a></li>
      <li><a href="#">Editar Currículo</a></li>
      <li><a href="#">Configurações</a></li>
    </ul>
  </div>

  <div class="overlay" id="overlay"></div>

    <nav>
        <header class="header">
            <a href="/inicial" class="logo">Workers <span>Match</span></a>
            <i class='bx bx-menu' id="menu-icon"></i>
        </header>
    </nav>

    <!-- <div class="abrir">
      <button id="openMenuButton">Abrir Menu</button>
    </div> -->

    <div class="carousel">
        <div class="carousel-container">
          <div class="card active">
            <!-- <img src="https://via.placeholder.com/300" alt="Placeholder" style="width: 100%;"> -->
            <div class="card-body">
              <h4 class="card-title">DESENVOLVEDOR <span>BACK-END</span></h4>
              <h5>Pela Empresa: <span>A</span></h5>
                <br><br>
              <p class="card-text">O candidato ideal terá sólidos conhecimentos em desenvolvimento de software, especialmente
                em linguagens de programação como Python, Java, Ruby ou Node.js, e experiência com frameworks e tecnologias
                de backend</p>
            </div>
          </div>
          <div class="card">
            <!-- <img src="https://via.placeholder.com/300" alt="Placeholder" style="width: 100%;"> -->
            <div class="card-body">
              <h4 class="card-title">DESENVOLVEDOR <span>FRONT-END</span></h4>
              <h5>Pela Empresa: <span>B</span></h5>
              <br><br>
              <p class="card-text">O candidato ideal terá experiência em desenvolvimento web,  especialmente em HTML, CSS e JavaScript,
                e experiência com frameworks e bibliotecas modernas. Você será responsável por traduzir designs em interfaces 
                de usuário</p>
            </div>
          </div>
          <div class="card">
            <!-- <img src="https://via.placeholder.com/300" alt="Placeholder" style="width: 100%;"> -->
            <div class="card-body">
              <h4 class="card-title">DESENVOLVEDOR <span>FULL-STACK</span></h4>
              <h5>Pela Empresa: <span>C</span></h5>
              <br><br>
              <p class="card-text">O candidato ideal terá experiência sólida em todos os campos de desenvolvimento, combinando
                 habilidades de design e linguagens de programação backend (como Python, Java, Ruby ou Node.js) com experiência também
                 em bancos de dados.</p>
            </div>
          </div>
          <div class="card">
            <!-- <img src="https://via.placeholder.com/300" alt="Placeholder" style="width: 100%;"> -->
            <div class="card-body">
              <h4 class="card-title">DESENVOLVEDOR DE <span>BANCO DE DADOS</span></h4>
              <h5>Pela Empresa: <span>D</span></h5>
              <br><br>
              <p class="card-text">O candidato ideal terá conhecimentos em modelagem de dados, otimização de consultas, administração
                de bancos de dados e experiência com sistemas de gerenciamento, como MySQL, PostgreSQL, SQL Server 
                ou Oracle.</p>
            </div>
          </div>
          <div class="card">
            <!-- <img src="https://via.placeholder.com/300" alt="Placeholder" style="width: 100%;"> -->
            <div class="card-body">
              <h4 class="card-title">DESENVOLVEDOR <span>JÚNIOR</span></h4>
              <h5>Pela Empresa: <span>E</span></h5>
              <br><br>
              <p class="card-text">Oportunidade para indivíduos que estão no início de suas carreiras em desenvolvimento
                e desejam adquirir experiência prática. O candidato ideal será apaixonado por tecnologia, disposto a aprender,
                e terá uma base em programação</p>
            </div>
          </div>
        </div>
        <div class="controls">
            <button id="prevButton">Anterior</button>
            <button id="deleteButton">Excluir</button>
            <button id="nextButton">Próximo</button>
          </div>
      </div>


    <script src="wm.js"></script>
</body>
</html>