<?php
	session_start();
	if(!isset($_SESSION['email'])){
		header("Location: index.php");
		exit;}
?>
<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<meta charset ="UTF-8">
		<title>Cadastro de Eventos</title>
	</head>
	<body>
		<h1>Cadastro de Eventos</h1>
		<p>Preencha as informações abaixo para cadastrar um evento</p>

		<form method="POST" action="./php/dbCadastroEvento.php">
			<label>Nome:</label>
			<input type="text" name="nome">

			<label>Data de Início:</label>
			<input type="text" name="datai">

            <label>Data de Término:</label>
			<input type="text" name="dataf">

            <label>Horário de Início:</label>
			<input type="text" name="horai">

            <label>Horário de término:</label>
			<input type="text" name="horaf">

      <input type="hidden" name="id_usuario" value="">

			<button type="submit" class="btn btn-primary btn-lg">Cadastrar</button>
		</form>

		<a href="index.php">

			<button class="btn btn-danger btn-sm">Retornar</button>

		</a>

		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	</body>
</html>
