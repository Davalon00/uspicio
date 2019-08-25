<?php
	session_start();
	if(!isset($_SESSION['email'])){
		header("Location: index.php");
		exit;}

	$id_evento = $_POST['id'];
	$nome = $_POST['nome'];
	$datai = $_POST['datai'];
	$dataf = $_POST['dataf'];
	$horai = $_POST['horai'];
	$horaf = $_POST['horaf'];
	$descricao = $_POST['descricao'];

?>
<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		<meta charset ="UTF-8">
		<title>Eventos</title>
	</head>
	<body>
		<h1>Tela de edição de Eventos</h1>

		<form method="POST" action="./php/dbAlterarEvento.php">

			<input type="hidden" name="id_evento" value="<?= $id_evento ?>">

			<label>Nome:</label>
			<input type="text" name="nome_evento" value="<?= $nome?>">

			<label>Data de Início:</label>
			<input type="text" name="datai_evento" value="<?= $datai?>">

			<label>Data de Término:</label>
			<input type="text" name="dataf_evento" value="<?= $dataf?>">

			<label>Horário de Início:</label>
			<input type="text" name="horai_evento" value="<?= $horai?>">

      <label>Horário de Término:</label>
			<input type="text" name="horaf_evento" value="<?= $horaf?>">

			<label>Descrição do Evento:</label>
			<input type="text" name="descricao_evento" value="<?= $descricao?>">

			<button type="submit">Editar</button>
		</form>

		<a href="listarEvento.php">

			<button class="btn btn-danger btn-sm">Retornar</button>

		</a>

		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>
