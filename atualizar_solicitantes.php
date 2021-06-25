<?php

include 'conexao.php';


$id = isset($_POST['id']);

//$id_user = $_POST['id_user'];	
$nome_user = $_POST['nome_user'];
$dataNasc = $_POST['dataNasc'];
$escolaridade = $_POST['escolaridade'];
$endereco = $_POST['endereco'];
$tel = $_POST['tel'];
$genero = $_POST['genero'];
$email = $_POST['email'];

$sql = '';

$acao = '';

$url = '';

$botao = '';

if ($_POST['action'] == 'cadastro') 
{
	$sql = "INSERT INTO user_solicit (`dataNasc`, `escolaridade`, `endereco`, `tel`, `genero`, `email`, `nome_user`) VALUES ('$dataNasc','$escolaridade','$endereco','$tel','$genero','$email','$nome_user')";

	$acao = "Adicionado";

	$url = 'cadastro_solicitantes1.php';

	$botao = "Adicionar Novo Solicitante";
	
} else if ($_POST['action'] == 'editar') 
{
	$id = $_POST['id'];

	$sql = "UPDATE `user_solicit` SET `dataNasc`='$dataNasc',`escolaridade`='$escolaridade',`endereco`='$endereco',`tel`='$tel',`genero`='$genero',`email`='$email',`nome_user`='$nome_user' WHERE id_user = $id";

	$acao = "Atualizado";

	$url = "listar_solicitantes1.php";

	$botao = "Atualizar Solicitante";
}

$atualizar = mysqli_query($conexao, $sql);


?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="container" style="width: 500px; margin-top: 20px;">
	<center>
		<h4><?php echo "Registro $acao com Sucesso !!!" ?></h4>
	</center>
	<div style= "padding-top: 20px;">
		<center>
			<a href= "<?= $url ?>" role="button" class= "btn btn-primary"><?= $botao ?></a>
			<a href="index.php" role="button" class= "btn btn-success">Início</a>
		</center>
	</div>	
</div>