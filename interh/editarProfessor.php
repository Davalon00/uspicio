<?php
	session_start();
	if(!isset($_SESSION['email'])){
		header("Location: index.php");
		exit;}

	$id_professor = $_POST['id'];
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$numusp = $_POST['numusp'];
	$curso = $_POST['curso'];

?>
<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		<meta charset ="UTF-8">
		<title>Professores</title>
	</head>
	<body>
		<h1>Tela de edição de Professores</h1>

		<form method="POST" action="./php/dbAlterarProfessor.php">

			<input type="hidden" name="id_professor" value="<?= $id_professor ?>">

			<label>Nome:</label>
			<input type="text" name="nome_professor" value="<?= $nome?>">

			<label>Email:</label>
			<input type="email" name="email_professor" value="<?= $email?>">

			<label>Número USP:</label>
			<input type="text" name="numusp_professor" value="<?= $numusp?>">

			<label>Curso:</label>
			<input type="text" name="curso_professor" value="<?= $curso?>">

			<button type="submit">Editar</button>
		</form>

		<a href="listarProfessor.php">

			<button class="btn btn-danger btn-sm">Retornar</button>

		</a>

		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>
