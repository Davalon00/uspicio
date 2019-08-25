<?php
	session_start();
	if(!isset($_SESSION['email'])){
		header("Location: index.php");
		exit;}

	include './php/dbSelecionarAluno.php';
?>
<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		<meta charset ="UTF-8">
		<title>Alunos</title>
	</head>
	<body>
		<<div>
				<h1 style="background-color: #9193a1; color: #fff; height:6%; border-bottom: 2px solid #595959; border-top: 2px solid #595959; ">Listagem de Alunos</h1>
		</div>

		<table class="table table-striped table-light">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">RG</th>
										<th scope="col">Número USP</th>
                </tr>
                </thead>
                <tbody>
                <?php while($dados = mysqli_fetch_assoc($search)):?>

                    <tr>
                        <th scope="row">   <?=$dados['id_aluno']     ?>		</th>
                        <td>			         <?=$dados['nome_aluno']   ?>   </td>
                        <td>			         <?=$dados['email_aluno']  ?>		</td>
                        <td>			         <?=$dados['rg_aluno']           ?>		</td>
												<td>			         <?=$dados['numusp_aluno'] ?>		</td>
                        <td>

                            <form class="edit" action="editarAluno.php" method="POST">
                                <input type="hidden" name="id"          value="<?=$dados['id_aluno']    ?>">
                                <input type="hidden" name="nome"		    value="<?=$dados['nome_aluno']	?>">
                                <input type="hidden" name="email"		    value="<?=$dados['email_aluno']	?>">
																<input type="hidden" name="rg"          value="<?=$dados['rg_aluno']          ?>">
																<input type="hidden" name="numusp" 		  value="<?=$dados['numusp_aluno']    ?>">
                                <button class="btn btn-primary">
                                    Editar
                                </button>
                            </form>

                        </td>
                        <td>
                            <form class="delete" method="POST" action="./php/dbDeletarAluno.php">
                                <input type="hidden" name="id_aluno" value="<?=$dados['id_aluno']?>">
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
			<button class="btn btn-danger btn-sm" href="#">Retornar</button>
		</a>
		<a href="cadastroAluno.php">
			<button class="btn btn-success btn-sm" href="#">Cadastrar</button>
		</a>





		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	</body>
</html>
