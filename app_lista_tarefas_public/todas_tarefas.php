<?php

	// atribuindo valor para a acao, para o controller executar acao de recuperação de dados
	$acao = 'recuperar';
	// chamando o controller que receberá a variável acao de todas_tarefas.php
	require 'tarefa_controller.php';
	// e executará o código que corresponde a determinada acao

	// // como todas_tarefas.php faz o require de tarefa_controller.php
	// echo '<pre>';
	// // ele tem acesso a variável $tarefas que contem todos as taferas numa array de objetos(tarefas)
	// print_r($tarefas);
	// echo '</pre>';

?>

<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>App Lista Tarefas</title>

		<link rel="stylesheet" href="css/estilo.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	</head>

	<body>
		<nav class="navbar navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="#">
					<img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
					App Lista Tarefas
				</a>
			</div>
		</nav>

		<div class="container app">
			<div class="row">
				<div class="col-sm-3 menu">
					<ul class="list-group">
						<li class="list-group-item"><a href="index.php">Tarefas pendentes</a></li>
						<li class="list-group-item"><a href="nova_tarefa.php">Nova tarefa</a></li>
						<li class="list-group-item active"><a href="#">Todas tarefas</a></li>
					</ul>
				</div>

				<div class="col-sm-9">
					<div class="container pagina">
						<div class="row">
							<div class="col">
								<h4>Todas tarefas</h4>
								<hr />

								<?php foreach($tarefas as $indice => $tarefa) { ?>
								
									<div class="row mb-3 d-flex align-items-center tarefa">
										<!-- USANDO A TAG DE IMPRESSÃO PARA EXIBIR NA TELA -->
										<!-- a tag de <?php ?> não funcionará aqui, porque não se trata de código e sim de exibição de dados -->
										<div class="col-sm-9"> <?= $tarefa->tarefa ?> (<?= $tarefa->status ?>) </div>
										<div class="col-sm-3 mt-2 d-flex justify-content-between">
											<a class="fas fa-trash-alt fa-lg text-danger" style="cursor: pointer;"></a>
											<a class="fas fa-edit fa-lg text-info" style="cursor: pointer;"></a>
											<a class="fas fa-check-square fa-lg text-success" style="cursor: pointer;"></a>
										</div>
									</div>

								<?php } ?>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>