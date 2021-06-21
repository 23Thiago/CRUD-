<?php

include 'conexao.php';

$tituloLivro = $_POST['tituloLivro'];

$autor = $_POST['autor'];

$tema = $_POST['tema'];

$dataPub = $_POST['dataPub'];

$quantCop = $_POST['quantCop'];

$categoria = $_POST['categoria'];

 

$sql = "INSERT INTO `acervo`(`tituloLivro`, `autor`, `tema`, `dataPub`, `categoria`, `quantCop`) VALUES ('$tituloLivro','$autor','$tema','$dataPub','$categoria','$quantCop')";

$inserir = mysqli_query($conexao, $sql);

?>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="container" style="width: 500px; margin-top: 20px;">
	<center>
	<h4> Livro Adicionado com Sucesso </h4>
</center>
<div style= "padding-top: 20px;">
	<center>
<a href="adicionar_livro.php" role="button" class= "btn btn-primary">Cadastrar Novo Livro</a>
<a href="index.php" role="button" class= "btn btn-success">Início</a>
</center>
	</div>
</div>