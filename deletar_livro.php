<?php 

include 'conexao.php';

$id = $_GET['id'];

$sql = "DELETE FROM acervo WHERE id_livro = $id";

$deletar = mysqli_query($conexao, $sql);

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="container" style="align-items: center;">
	<center>
			<div style="margin-top: 250px">
			<h3>REGISTRO EXCLUIDO COM SUCESSO!!!</h3>
					</div>
				<div style="margin-top: center;">
			<a href="listagem.php" class= "btn btn-success" style="color:#fff">Voltar</a>
			<a href="index.php" class="btn btn-primary" style="color:#fff">Início</a>
			<a href="adicionar_livro.php" class="btn btn-primary" style="color:#fff">Adicionar</a>
		</div>
	</center>	
</div>