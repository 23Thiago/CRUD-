<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Listagem de Livros</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<style type="text/css">
	
#tamanhoContainer {
	align-items: 500px;
}

</style> 

</head>
<body>

<div class="container" id="tamanhoContainer" style="margin-top: 40px;">
	<center>
		<h3>Lista de Livros</h3>
<br>
	
	<div style="text-align: center;">
	<table class="table">
	 <thead class="thead-dark">	 
  	 <tr>
      <th scope= "col">ID</th>
      <th scope="col">Título</th>
      <th scope="col">Autor</th>
      <th scope="col">Tema</th>
      <th scope="col">Data de Publicação</th>
      <th scope="col">Nº de Cópias</th>
      <th scope="col">Categoria</th>     
      <th scope= "col">Ação</th>
      </div>

    </tr>
  </thead>
    <tr>


<?php
	include 'conexao.php';
	$sql = "SELECT * FROM acervo";
	$busca_ = mysqli_query($conexao,$sql);

	while ($array_ = mysqli_fetch_array($busca_)) {

		
		$id_livro = ($array_)['id_livro'];	
		$tituloLivro = ($array_)['tituloLivro'];
		$autor = ($array_)['autor'];
		$tema = ($array_)['tema'];
		$dataPub = ($array_)['dataPub'];
		$quantCop = ($array_)['quantCop'];
		$categoria = ($array_)['categoria'];
?>

	<tr>
 		<td><?php echo $id_livro  ?></td>

 		<td><?php echo $tituloLivro  ?></td>

  		<td><?php echo $autor  ?></td>
  		
  		<td><?php echo $tema  ?></td>
  		
  		<td><?php echo $dataPub  ?></td>
  		
  		<td><?php echo $quantCop  ?></td>
  		
  		<td><?php echo $categoria  ?></td>

		<td> 
			<center>
				
			<a class="btn btn-warning btn-sm" style="color:#fff" href="editar_livro.php?id=<?php echo $id_livro ?> " role="button">&nbsp;EDITAR </a> 
			<a class="btn btn-danger btn-sm" style="color:#fff" href="deletar_livro.php?id=<?php echo $id_livro ?> " role="button">&nbsp;EXCLUIR</a>

		</center>

		</td>
   	</tr>	
    
<?php } ?>

    </tr>
	</table>
		<div style= "text-align: right;">
			<a type="submit" href="index.php" class="btn btn-primary">Voltar</a>	 
		</div>

</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>