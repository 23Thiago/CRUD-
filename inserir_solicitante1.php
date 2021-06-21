<?php 

include 'conexao.php';

$nome_user = $_POST['nome_user'];

$dataNasc = $_POST['dataNasc'];

$escolaridade = $_POST['escolaridade'];

$endereco = $_POST['endereco'];

$tel = $_POST['tel'];

$genero = $_POST['genero'];

$email = $_POST['email'];

$sql = "INSERT INTO `user_solicit`(`nome_user` ,`dataNasc`, `escolaridade`, `endereco`, `tel`, `genero`, `email`) VALUES ('$nome_user', $dataNasc,'$escolaridade','$endereco',$tel,'$genero','$email')";

$inserir = mysqli_query($conexao, $sql);

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="container" style="width: 500px; margin-top: 20px;">
	<center>
	<h4> Registro Adicionado com Sucesso !!! </h4>
</center>
<div style= "padding-top: 20px;">
	<center>
<a href="cadastro_solicitantes1.php" role="button" class= "btn btn-primary">Cadastrar Novo Solicitante</a>
<a href="index.php" role="button" class= "btn btn-success">Início</a>
</center>
	</div>
</div>