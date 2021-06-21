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

<div class="container" id="tamanhoContainer" style="margin-top: 30px;">
	
			<center>
			<h4> CADASTRO DE LIVROS NO ACERVO </h4>
			</center>
		<form action="inserir_livro.php" method="post" style= "margin-top: 20px;">
	
		
		<div class="form-group">
   		 <label for="Título do Livro">Título do Livro:</label>
   		 <input type="string" class="form-control" name="tituloLivro" placeholder="Insira o título completo do livro" autocomplete="off"  required>

		 <div class="form-group">
   		 <label for="Autor">Autor:</label>
   		 <input type="string" class="form-control" name="autor" placeholder="Insira o nome completo do autor" autocomplete="off"  required>
		</div>
		
		 <div class="form-group">
   		 <label for="Tema">Tema:</label>
   		 <input type="string" class="form-control" name="tema" placeholder="Insira o tema completo do livro" autocomplete="off"  required>
		</div>

		 <div class="form-group">
   		 <label for="Data de Publicação">Data de Publicação:</label>
   		 <input type="date" class="form-control" name="dataPub" placeholder="Insira a data de publicação do exemplar" autocomplete="off" required>
		</div>

		 <div class="form-group">
   		 <label for="Quantidade de Cópias">Quantidade de Cópias:</label>
   		 <input type="number" class="form-control" name="quantCop" placeholder="Insira a quantidade de cópias a ser cadastrada" autocomplete="off"  required>
		</div>

		 <div class="form-group">
   		 <label >Categoria:</label>
   		 <select class="form-control" name="categoria" required>

   		 	<?php 

   		 	include 'conexao.php';
   		 	$sql = "SELECT * FROM categoria order by nome_categoria ASC";
   		 	$inserir = mysqli_query($conexao, $sql);

   		 	while ($array = mysqli_fetch_array($inserir)) {

   		 		$id_categoria = $array['id_categoria'];
   		 		$nome_categoria = $array['nome_categoria'];
   		 	?>

			<option><?php echo $nome_categoria ?></option>
			
      		<?php }	?>
    						</select>
						</div>
					</div>
				<div style= "text-align: right;">
			<a type="submit" href="index.php" class="btn btn-primary">Voltar</a>		
			<button type="submit" id="botao" class="btn btn-success">Cadastrar</button>
		</div>
	</form>
</div>






	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>