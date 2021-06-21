<?php

include 'conexao.php';

$id = $_POST['id'];

$tituloLivro = $_POST['tituloLivro'];

$autor = $_POST['autor'];

$tema = $_POST['tema'];

$dataPub = $_POST['dataPub'];

$quantCop = $_POST['quantCop'];

$categoria = $_POST['categoria'];


$sql = "UPDATE `acervo` SET `tituloLivro`='$tituloLivro',`autor`='$autor',`tema`='$tema',`dataPub`='$dataPub',`categoria`='$categoria',`quantCop`='$quantCop' WHERE id_livro = $id";

$atualizar = mysqli_query($conexao, $sql);


?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="container" style="align-items: center;">
	<center>
			<div style="margin-top: 250px">
			<h3>ATUALIZADO COM SUCESSO!!!</h3>
					</div>
				<div style="margin-top: center;">
			<a href="listagem.php" class= "btn btn-success" style="color:#fff">Voltar</a>
			<a href="index.php" class="btn btn-primary" style="color:#fff">Início</a>
			<a href="listagem.php" class="btn btn-primary" style="color:#fff">Início</a>
		</div>
	</center>	
</div>