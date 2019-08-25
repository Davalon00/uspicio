<?php
	session_start();
	if(!isset($_SESSION['email'])){
		header("Location: index.php");
		exit;}

	include './php/dbSelecionarEvento.php';
?>
<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		<meta charset ="UTF-8">
		<title>Eventos</title>
	</head>
	<body>
		<div>
				<h1 style="background-color: #9193a1; color: #fff; height:6%; border-bottom: 2px solid #595959; border-top: 2px solid #595959; ">Listagem de Eventos</h1>
		</div>

		<table class="table table-striped table-light">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Data Inicial</th>
										<th scope="col">Data Final</th>
                    <th scope="col">Hora Inicial</th>
                    <th scope="col">Hora Final</th>
										<th scope="col">Descrição</th>
                </tr>
                </thead>
                <tbody>
                <?php while($dados = mysqli_fetch_assoc($search)):?>

                    <tr>
                        <th scope="row">   <?=$dados['id_evento']     		?>		</th>
                        <td>			         <?=$dados['nome_evento']   		?>    </td>
                        <td>			         <?=$dados['datai_evento']  		?>		</td>
                        <td>			         <?=$dados['dataf_evento']  		?>		</td>
												<td>			         <?=$dados['horai_evento']  		?>		</td>
                        <td>			         <?=$dados['horaf_evento']  		?>		</td>
												<td>			         <?=$dados['descricao_evento']  ?>		</td>
                        <td>

                            <form class="edit" action="editarEvento.php" method="POST">
                                <input type="hidden" name="id"          value="<?=$dados['id_evento']    		 ?>">
                                <input type="hidden" name="nome"		    value="<?=$dados['nome_evento']	 		 ?>">
                                <input type="hidden" name="datai"		    value="<?=$dados['datai_evento'] 		 ?>">
																<input type="hidden" name="dataf"       value="<?=$dados['dataf_evento'] 		 ?>">
																<input type="hidden" name="horai" 		  value="<?=$dados['horai_evento'] 		 ?>">
                                <input type="hidden" name="horaf" 		  value="<?=$dados['horaf_evento'] 		 ?>">
																<input type="hidden" name="descricao" 	value="<?=$dados['descricao_evento'] ?>">
                                <button class="btn btn-primary">
                                    Editar
                                </button>
                            </form>

                        </td>
                        <td>
                            <form class="delete" method="POST" action="./php/dbDeletarEvento.php">
                                <input type="hidden" name="id_evento" value="<?=$dados['id_evento']?>">
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
		<a href="cadastroEvento.php">
			<button class="btn btn-success btn-sm">Cadastrar evento</button>
		</a>
			<button class="btn btn-success btn-sm">Emitir certificado</button>



		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	</body>
</html>
