<?php require_once "validador_acesso.php" ?>

<?php

// array vazia para manipulação de dados
$chamados = [];

// abrir o arquivo.hd, no modo leitura
$arquivo = fopen('arquivo.hd', 'r');

// enquanto houver registros ou linhas a serem recuperados
// função feof -> END OF FILE percorre o arquivo até o final, linha por linha
while(!feof($arquivo)) {
  // fgets busca por dados que existem em determinada linha
  $registro = fgets($arquivo);
  // salvando resultado do fgets na array chamados
  $chamados[] = $registro;
}

// fechar o arquivo aberto
fclose($arquivo);

?>


<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <!-- botão de sair que redireciona para logoff.php -->
          <a class="nav-link" href="logoff.php">SAIR</a>
        </li>
      </ul>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            
            <div class="card-body">

              <!-- para cada chamado em chamados { conteúdo html } -->
              <?php foreach($chamados as $chamado) { ?>

                <?php 
                  
                  // função explode para separar a str pelos # e salvar em uma array essa divisão
                  $chamado_dados = explode('#', $chamado);

                  // se o perfil_id do usuário for == 2(usuário)
                  if($_SESSION['perfil_id'] == 2) {
                    // só vamos exibir o chamado se for criado pelo próprio usuário
                    // se o id de session for diferente do id do chamado
                    if($_SESSION['id'] != $chamado_dados[0]) {
                      // não exibe esse chamado do foreach, indo pro próximo chamado
                      continue;
                    }

                  }

                  // contando a qtd de índice na array, para não quebrar o código caso $chamados_dados < 3
                  // por conta do PHP_EOL, usado para salvar dados e quebrar linha
                  // o último elemento da array $chamado_dados = 0 porém vazia
                  if (count($chamado_dados) < 3) {
                    continue;
                  }
                  
                ?>
                <!--  -->
                <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title"><?= $chamado_dados[1] ?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?= $chamado_dados[2] ?></h6>
                  <p class="card-text"><?= $chamado_dados[3] ?></p>

                </div>
              </div>

              <!-- fechando a instrução do foreach que contem html e php -->
              <?php } ?>

              <div class="row mt-5">
                <div class="col-6">
                  <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>