<?php

include 'conexao.php';

$id = $_POST['id'];


$id_user = ($array_)['id_user'];	
$nome_user = ($array_)['nome_user'];
$dataNasc = ($array_)['dataNasc'];
$escolaridade = ($array_)['escolaridade'];
$endereco = ($array_)['endereco'];
$tel = ($array_)['tel'];
$genero = ($array_)['genero'];
$email = ($array_)['email'];

$sql = "UPDATE `user_solicit` SET `dataNasc`='$dataNasc',`escolaridade`='$escolaridade',`endereco`='$endereco',`tel`='$tel',`genero`='$genero',`email`='$email',`nome_user`='$nome_user' WHERE id_user = $id";

$atualizar = mysqli_query($conexao, $sql);



?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="container" style="width: 500px; margin-top: 20px;">
	<center>
	<h4> Registro Adicionado com Sucesso !!! </h4>
</center>
<div style= "padding-top: 20px;">
	<center>
<a href="editar_solicitantes1.php" role="button" class= "btn btn-primary">Editar Solicitante</a>
<a href="index.php" role="button" class= "btn btn-success">Início</a>
</center>
	</div>
</div>