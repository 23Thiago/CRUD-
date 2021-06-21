<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lista de Solicitantes</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div class= "container" style="margin-top: 40px;">
	<h3>Lista de Solicitantes</h3>
<br>
	<div style="text-align: center;">
		<table class="table">
	 	<thead class="thead-dark">	 
  	 	<tr>
      	<th scope= "col">Id</th>
      	<th scope="col">Nome</th>
      	<th scope="col">Data de Nascimento</th>
      	<th scope="col">Escolaridade</th>
      	<th scope="col">Endereço</th>
      	<th scope="col">Telefone</th>
      	<th scope="col">Genêro</th>     
      	<th scope= "col">Email</th>
      	<th scope= "col">Ação</th>
      </tr>
    </thead>  
    </div>
      	<tr>
      		<?php

      		include 'conexao.php';
      		$sql = "SELECT * FROM user_solicit";
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
      	 
   	<tr>	
      	 <td><?php echo $id_user ?></td>
      	 
      	 <td><?php echo $nome_user ?></td>

      	 <td><?php echo $dataNasc ?></td>
      	 
      	 <td><?php echo $escolaridade ?></td>
      	 
      	 <td><?php echo $endereco ?></td>
      	 
      	 <td><?php echo $tel ?></td>

      	 <td><?php echo $genero ?></td>

      	 <td><?php echo $email ?></td>

      	 <td><a class="btn btn-warning" style="color:#fff" href="editar_solicitantes1.php?id=<?php echo $id_user ?>" role="button"><i class="far fa-edit"></i>&nbsp;EDITAR</a></td>
      </tr>
      	

      	<?php } ?>
      	 

      </tr>


</div>














	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>