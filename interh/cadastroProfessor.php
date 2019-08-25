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
		<title>Cadastro de Professores</title>
	</head>
	<body>
		<h1>Cadastro de Professores</h1>
		<p>Preencha as informações abaixo para cadastrar um usuário</p>

		<form method="POST" action="./php/dbCadastroProfessor.php">
			<label>Nome:</label>
			<input type="text" name="nome">

			<label>Email:</label>
			<input type="email" name="email">

      <label>Senha:</label>
			<input type="password" name="senha">

      <label>Confirmar senha:</label>
			<input type="password" name="senha">

      <label>Número USP:</label>
			<input type="text" name="numusp">

			<label>Curso:</label>
			<input type="text" name="curso">

      <input type="hidden" name="id_cadastrante" value="<?php ?>">

			<button type="submit" class="btn btn-primary btn-lg">Cadastrar</button>
		</form>

		<a href="index.php">

			<button class="btn btn-danger btn-sm">Retornar</button>

		</a>

		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	</body>
</html>
