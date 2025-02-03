<?php

  // Iniciando sessão que fica armazenada no lado do servidor
  session_start();

  // Verificando o valor de autenticado existe OU se autenticado é diferente de sim
  if(!isset($_SESSION['autenticado']) 
  or $_SESSION['autenticado'] != 'SIM')
  // Caso seja condicionado, header location joga o usuário para index com parâmetro de login=erro2
  header('Location: index.php?login=erro2');

?>