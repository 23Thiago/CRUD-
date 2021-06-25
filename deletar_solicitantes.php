<?php 

include 'conexao.php';

$id = $_GET['id'];

$sql = "DELETE FROM `user_solicit` WHERE id_user = $id";

$deletar = mysqli_query($conexao, $sql);

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="container" style="align-items: center;">
	<center>
			<div style="margin-top: 250px">
			<h3>REGISTRO EXCLUIDO COM SUCESSO!!!</h3>
					</div>
				<div style="margin-top: center;">
			<a href="listar_solicitantes1.php" class= "btn btn-success" style="color:#fff">Voltar</a>
			<a href="index.php" class="btn btn-primary" style="color:#fff">Início</a>
			<a href="inserir_solicitantes.php" class="btn btn-primary" style="color:#fff">Adicionar</a>
		</div>
	</center>	
</div>