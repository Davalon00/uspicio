<?php
	session_start();
	if(!isset($_SESSION['email'])){
		header("Location: index.php");
		exit;}

	$id_aluno = $_POST['id'];
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$rg = $_POST['rg'];
	$numusp = $_POST['numusp'];

?>
<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		<meta charset ="UTF-8">
		<title>Alunos</title>
	</head>
	<body>
		<h1>Tela de edição de Alunos</h1>

		<form method="POST" action="./php/dbAlterarAluno.php">

			<input type="hidden" name="id_aluno" value="<?= $id_aluno ?>">

			<label>Nome:</label>
			<input type="text" name="nome_aluno" value="<?= $nome?>">

			<label>Email:</label>
			<input type="email" name="email_aluno" value="<?= $email?>">

			<label>RG:</label>
			<input type="text" name="rg_aluno" value="<?= $rg?>">

			<label>Número USP:</label>
			<input type="text" name="numusp_aluno" value="<?= $numusp?>">

			<button type="submit">Editar</button>
		</form>

		<a href="listarAluno.php">

			<button class="btn btn-danger btn-sm">Retornar</button>

		</a>

		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>
