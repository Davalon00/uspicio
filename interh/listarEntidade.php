<?php
	session_start();
	if(!isset($_SESSION['email'])){
		header("Location: index.php");
		exit;}

	include './php/dbSelecionarEntidade.php';
?>
<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		<meta charset ="UTF-8">
		<title>Entidades</title>
	</head>
	<body>
		<div>
				<h1 style="background-color: #9193a1; color: #fff; height:6%; border-bottom: 2px solid #595959; border-top: 2px solid #595959; ">Listagem de Entidades</h1>
		</div>

		<table class="table table-striped table-light">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
										<th scope="col">Sigla</th>
                    <th scope="col">Curso</th>
                </tr>
                </thead>
                <tbody>
                <?php while($dados = mysqli_fetch_assoc($search)):?>

                    <tr>
                        <th scope="row">   <?=$dados['id_entidade']      ?>		</th>
                        <td>			         <?=$dados['nome_entidade']    ?>   </td>
                        <td>			         <?=$dados['sigla_entidade']   ?>		</td>
												<td>			         <?=$dados['curso_entidade']   ?>		</td>
                        <td>

                            <form class="edit" action="editarEntidade.php" method="POST">
                                <input type="hidden" name="id"          value="<?=$dados['id_entidade']    ?>">
                                <input type="hidden" name="nome"		    value="<?=$dados['nome_entidade']	 ?>">
                                <input type="hidden" name="sigla"		    value="<?=$dados['sigla_entidade'] ?>">
																<input type="hidden" name="curso" 		  value="<?=$dados['curso_entidade'] ?>">
                                <button class="btn btn-primary">
                                    Editar
                                </button>
                            </form>

                        </td>
                        <td>
                            <form class="delete" method="POST" action="./php/dbDeletarEntidade.php">
                                <input type="hidden" name="id_entidade" value="<?=$dados['id_entidade']?>">
                                <button class="btn btn-danger">
                                    Apagar
                                </button>
                            </form>
                        </td>
                    </tr>

                <?php endwhile ?>
                </tbody>
            </table>


						<a href="home.php">
							<button class="btn btn-danger btn-sm">Retornar</button>
						</a>
						<a href="cadastroEntidade.php">
							<button class="btn btn-success btn-sm">Cadastrar entidade</button>
						</a>


		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	</body>
</html>
