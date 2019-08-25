<?php
	session_start();
	if(!isset($_SESSION['email'])){
		header("Location: index.php");
		exit;}

	include './php/dbSelecionarCoordenador.php';
?>

<html>
	<head>
		<header id="header">
        <div>
						<h1 style="background-color: #9193a1; color: #fff; height:6%; border-bottom: 2px solid #595959; border-top: 2px solid #595959; ">Listagem de Coordenadores</h1>
        </div>
    </header>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		<meta charset ="UTF-8">
		<title>Coordenadores</title>
	</head>
	<body style="background-color: #ededed">
		<table class="table table-striped table-light">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
										<th scope="col">Número USP</th>
                    <th scope="col">Curso</th>
                </tr>
                </thead>
                <tbody>
                <?php while($dados = mysqli_fetch_assoc($search)):?>

                    <tr>
                        <th scope="row">   <?=$dados['id_coordenador']     ?>		</th>
                        <td>			         <?=$dados['nome_coordenador']   ?>   </td>
                        <td>			         <?=$dados['email_coordenador']  ?>		</td>
                        <td>			         <?=$dados['numusp_coordenador'] ?>		</td>
												<td>			         <?=$dados['curso_coordenador']  ?>		</td>
                        <td>

                            <form class="edit" action="editarCoordenador.php" method="POST">
                                <input type="hidden" name="id"          value="<?=$dados['id_coordenador']?>">
                                <input type="hidden" name="nome"		    value="<?=$dados['nome_coordenador']	 ?>">
                                <input type="hidden" name="email"		    value="<?=$dados['email_coordenador']	 ?>">
																<input type="hidden" name="numusp"      value="<?=$dados['numusp_coordenador'] ?>">
																<input type="hidden" name="curso" 		  value="<?=$dados['curso_coordenador']  ?>">
                                <button class="btn btn-primary" style="margin: 2%;">
                                    Editar
                                </button>
                            </form>

                        </td>
                        <td>
                            <form class="delete" method="POST" action="./php/dbDeletarCoordenador.php">
                                <input type="hidden" name="id_coordenador" value="<?=$dados['id_coordenador']?>">
                                <button class="btn btn-danger" style="margin: 2%;">
                                    Apagar
                                </button>
                            </form>
                        </td>
                    </tr>

                <?php endwhile ?>
                </tbody>
            </table>


		<a href="home.php">
			<button class="btn btn-danger">Retornar</button>
		</a>

		<a class="btn btn-success" href="cadastroCoordenador.php">Cadastrar coordenador</a>

		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	</body>
</html>
