<?php 

include 'conexao.php'


$id = $_GET['id'];


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edição de Solicitantes</title>
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<style type="text/css">
	
#tamanhoContainer {
	width: 700px;
}

</style> 

</head>
<body>

<div class="container" id="tamanhoContainer" style="margin-top: 30px;">
	
			<center>
			<h4> CADASTRO DE LIVROS NO ACERVO </h4>
			</center>
		<form action="inserir_livro.php" method="post" style= "margin-top: 20px;">


		<?php 

			$sql = "SELECT * FROM `user_solicit` WHERE id_user = $id";
			$busca2 = mysqli_query($conexao, $sql);

			while ($array_ = mysqli_fetch_array($busca2)) {

			$id_user = ($array_)['id_user'];	
			$nome_user = ($array_)['nome_user'];
			$dataNasc = ($array_)['dataNasc'];
			$escolaridade = ($array_)['escolaridade'];
			$endereco = ($array_)['endereco'];
			$tel = ($array_)['tel'];
			$genero = ($array_)['genero'];
			$email = ($array_)['email'];


		?>
	
		<div class="form-group">
   		 <label for="id_user">ID Livro:</label>
   		 <input type="number" class="form-control" name="id_user" value= "<?php echo $id_user ?>" disabled>
   		 <input type="number" class="form-control" name="id" value= "<?php echo $id ?>" style="display: none;">

		<div class="form-group">
   		 <label for="nome_user">Título do Livro:</label>
   		 <input type="string" class="form-control" name="nome_user" value="<?php echo $nome_user ?>">
   		</div>

		 <div class="form-group">
   		 <label for="dataNasc">Data de Nascimento:</label>
   		 <input type="date" class="form-control" name="dataNasc"value="<?php echo $dataNasc ?>" >
		</div>
		
		
		 <div class="form-group">
   		 <label for="endereco">Endereço:</label>
   		 <input type="text" class="form-control" name="endereco" value="<?php echo $endereco ?>">
		</div>

		 <div class="form-group">
   		 <label for="tel">Telefone:</label>
   		 <input type="text" class="form-control" name="tel" value="<?php echo $tel ?>">
		</div>

		 <div class="form-group">
   		 <label for="genero">Genêro:</label>
      		<select class="form-control" name="genero"> 
   		 	<option>Feminino</option>
   		 	<option>Masculino</option>
   		 	<option>Outro</option>
   		 </select>


   		<div class="form-group">
   		<label for="escolaridade">Escolaridade:</label>
      	<select class="form-control" name="escolaridade"> 
   		 	<option>Ensimo Fundamental Incompleto</option>
   		 	<option>Ensino Fundamental Cursando</option>
   		 	<option>Ensino Fundamental Completo</option>
   		 	<option>Ensino Médio Incompleto</option> 
   		 	<option>Ensino Médio Cursando</option> 
   		 	<option>Ensino Médio Completo</option> 
   		 	<option>Ensino Superior Incompleto</option> 
   		 	<option>Ensino Superior Cursando</option> 
   		 	<option>Ensino Superior Completo</option>
   		 </select>   	


   		 	
    						</select>
						</div>
					</div>
				<div style= "text-align: right;">
			<a type="submit" href="index.php" class="btn btn-primary">Voltar</a>		
			<button type="submit" id="botao" class="btn btn-success">Cadastrar</button>
		</div>
	</form>

<?php } ?>
</div>






	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>


