<?php
	session_start();
	if(!isset($_SESSION['email'])){
		header("Location: index.php");
		exit;}
?>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="./css/button.css">
	<head>
		<header id="header">
        <div>
						<h1 style="background-color: #9193a1; color: #fff; height:6%; border-bottom: 2px solid #595959; border-top: 2px solid #595959; ">Cadastro de Coordenação</h1>
        </div>
    </header>
		<meta charset ="UTF-8">
		<title>Cadastro de Coordenação</title>
	</head>
	<body>

		<div class="container">
			<p>Preencha as informações abaixo para cadastrar um coordenador.</p>
		</div>

		<div class="container">
				<form class="form-group" method="POST" action="dbCadastroCoordenador.php">
						<div class="row">
								<div class="col-8">
										<label>Nome</label>
										<input type="text" name="nome" class="form-control">
								</div>
						</div>
						<div class="row">
								<div class="col-md-2">
										<label>Senha</label>
										<input type="password" name="senha" class="form-control">
								</div>
								<div class="col-md-3">
										<label>Confirmação de senha</label>
										<input type="password" name="senha2" id="senha2" class="form-control">
								</div>
								<div class="col-md-5">
										<label>E-mail</label>
										<input type="email" name="email" class="form-control">
								</div>
						</div>
						<div class="row">
								<div class="col-md-3">
										<label>Número USP:</label>
										<input type="number" name="numusp" class="form-control">
								</div>
								<div class="col-md-2">
										<label>Curso</label>
										<input type="text" name="curso" class="form-control">
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
