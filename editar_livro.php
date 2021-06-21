<?php

include 'conexao.php';

$id = $_GET['id'];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastramento de Exemplares; Biblioteca Mario de Andrade</title>
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<style type="text/css">
	
#tamanhoContainer {
	width: 700px;
}

</style> 

</head>
<body>

<div class="container" id="tamanhoContainer" style="margin-top: 40px;">
	
			<center>
			<h4> EDITAR LIVROS DO ACERVO </h4>
			</center>
		<form action="atualizar_livro.php" method="post" style= "margin-top: 20px;">
			
<?php
	
	$sql = "SELECT * FROM acervo WHERE id_livro = $id";
	$busca_ = mysqli_query($conexao,$sql);
	
	while ($array_ = mysqli_fetch_array($busca_))
	
	{
		$id_livro = ($array_)['id_livro'];	
		$tituloLivro = ($array_)['tituloLivro'];
		$autor = ($array_)['autor'];
		$tema = ($array_)['tema'];
		$dataPub = ($array_)['dataPub'];
		$quantCop = ($array_)['quantCop'];
		$categoria = ($array_)['categoria'];

		?>
		
		


		 <div class="form-group">
   		 <label for="Título do Livro">ID Livro:</label>
   		 <input type="number" class="form-control" name="id_livro" value= "<?php echo $id_livro ?>" disabled>
   		 <input type="number" class="form-control" name="id" value= "<?php echo $id ?>" style="display: none;">



		 <div class="form-group">
   		 <label for="Título do Livro">Título do Livro:</label>
   		 <input type="string" class="form-control" name="tituloLivro" value= "<?php echo $tituloLivro ?>">

		 <div class="form-group">
   		 <label for="Autor">Autor:</label>
   		 <input type="string" class="form-control" name="autor" value= "<?php echo $autor ?>">
		</div>
		
		 <div class="form-group">
   		 <label for="Tema">Tema:</label>
   		 <input type="string" class="form-control" name="tema" value= "<?php echo $tema ?>">
		</div>

		 <div class="form-group">
   		 <label for="Data de Publicação">Data de Publicação:</label>
   		 <input type="date" class="form-control" name="dataPub" value= "<?php echo $dataPub ?>">
		</div>

		 <div class="form-group">
   		 <label for="Quantidade de Cópias">Quantidade de Cópias:</label>
   		 <input type="number" class="form-control" name="quantCop" value= "<?php echo $quantCop ?>">
		</div>

		 <div class="form-group">
   		 <label >Categoria:</label>
   		 <select class="form-control" name="categoria">
			<option>Astronomia</option>
			<option>Astrologia</option>
      		<option>Ciência</option>
      		<option>Crônicas</option>
      		<option>Direito</option>
      		<option>Drama</option>
      		<option>Ficção</option>
      		<option>Geografia</option>
      		<option>História Brasileira</option>
      		<option>Infantis</option>
      		<option>Jornalismo</option>
      		<option>Literatura Brasileira</option>
			<option>Literatura Francesa</option>
			<option>Literatura Inglêsa</option>
			<option>Literatura Portuguesa</option>
			<option>Matemática</option>
			<option>Medicina</option>
			<option>Poesia</option>
      		<option>Religião</option>
      		<option>Turismo</option>
    						</select>
						</div>
					</div>
				<div style= "text-align: right;">
			<button type="submit" class="btn btn-success">EDITAR</button>
		</div>

	<?php } ?>
	</form>
</div>






	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>