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
	
		<!-- javascript -->
		<script>
			function editar(id, text_tarefa) {
				
				// criar um form de edição
				let form = document.createElement('form')
				// colocando redirecionamento do formulário para a controller com o parâmetro atualizar
				form.action = 'tarefa_controller.php?acao=atualizar'
				form.method = 'post'
				form.className = 'row'

				// criar um input para entrada de texto
				let inputTarefa = document.createElement('input')
				inputTarefa.type = 'text'
				inputTarefa.name = 'tarefa'
				inputTarefa.className = 'col-9 form-control'
				inputTarefa.value = text_tarefa

				// criar um input hidden para guardar o id da tarefa
				let inputId = document.createElement('input')
				inputId.type = 'hidden'
				inputId.name = 'id'
				inputId.value = id

				// criar um button para o envio form
				let button = document.createElement('button')
				button.type = 'submit'
				button.className = 'col-3 btn btn-info'
				button.innerHTML = 'Atualizar'

				// incluir o input tarefa no form
				form.appendChild(inputTarefa)

				// incluir inputId no form
				form.appendChild(inputId)

				// incluir button no form
				form.appendChild(button)

				// teste
				// console.log(forms)

				// selecionar a div tarefa
				let tarefa = document.getElementById('tarefa_'+id)

				// limpar o texto da tarefa para a inclusão do form
				tarefa.innerHTML = ''

				// inclusão do form na página
				tarefa.insertBefore(form, tarefa[0])
			
			}
		</script>
	
	
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
										<!-- atribuindo id da tarefa de forma dinâmica -->
										<div class="col-sm-9" id="tarefa_<?= $tarefa->id ?>">
											<!-- USANDO A TAG DE IMPRESSÃO PARA EXIBIR NA TELA -->
											<!-- a tag de <?php ?> não funcionará aqui, porque não se trata de código e sim de exibição de dados -->
											 <?= $tarefa->tarefa ?> (<?= $tarefa->status ?>)
										</div>
										<div class="col-sm-3 mt-2 d-flex justify-content-between">
											<a class="fas fa-trash-alt fa-lg text-danger" style="cursor: pointer;"></a>
											<!-- quando clicar em editar, executa script function editar(que recebe o id da tarefa e qual tarefa é) -->
											<a class="fas fa-edit fa-lg text-info" style="cursor: pointer;" onclick="editar(<?= $tarefa->id ?>, '<?= $tarefa->tarefa ?>')"></a>
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