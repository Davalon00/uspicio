<?php
	session_start();
	if(!isset($_SESSION['email'])){
		header("Location: index.php");
		exit;}

	$id_coordenador = $_POST['id'];
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$numusp = $_POST['numusp'];
	$curso = $_POST['curso'];

?>
<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		<meta charset ="UTF-8">
		<title>Coordenadores</title>
	</head>
	<body>
		<h1>Tela de edição de Coordenadores</h1>

		<div class="container">
				<form class="form-group" method="POST" action="dbAlterarCoordenador.php">
						<div class="row">
								<div class="col-8">
										<label>Nome</label>
										<input type="text" name="nome_coordenador" class="form-control" value="<?= $nome?>">
								</div>
						</div>
						<div class="row">
								<div class="col-md-5">
										<label>E-mail</label>
										<input type="email" name="email_coordenador" class="form-control" value="<?= $email?>">
								</div>
						</div>
						<div class="row">
								<div class="col-md-3">
										<label>Número USP:</label>
										<input type="number" name="numusp_coordenador" class="form-control" value="<?= $numusp?>">
								</div>
								<div class="col-md-2">
										<label>Curso</label>
										<input type="text" name="curso_coordenador" class="form-control" value="<?= $curso?>">
								</div>
						</div>
						<div class="row">
							<button type="submit" class="btn btn-primary btn-lg">Cadastrar</button>
						</div>
					</form>
					<a href="listarCoordenador.php">
						<button class="btn btn-danger" style="position: relative; top: -60px; right: -120px;">Retornar</button>
					</a>
				</div>

		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>
