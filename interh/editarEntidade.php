<?php
	session_start();
	if(!isset($_SESSION['email'])){
		header("Location: index.php");
		exit;}

	$id_entidade = $_POST['id'];
	$nome = $_POST['nome'];
	$sigla = $_POST['sigla'];
	$curso = $_POST['curso'];

?>
<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		<meta charset ="UTF-8">
		<title>Entidades</title>
	</head>
	<body>
		<h1>Tela de edição de Entidades</h1>

		<form method="POST" action="./php/dbAlterarEntidade.php">

			<input type="hidden" name="id_entidade" value="<?= $id_entidade ?>">

			<label>Nome:</label>
			<input type="text" name="nome_entidade" value="<?= $nome?>">

			<label>Sigla:</label>
			<input type="text" name="sigla_entidade" value="<?= $sigla?>">

			<label>Curso:</label>
			<input type="text" name="curso_entidade" value="<?= $curso?>">

			<button type="submit">Editar</button>
		</form>

		<a href="listarEntidade.php">

			<button class="btn btn-danger btn-sm">Retornar</button>

		</a>

		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>
