<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastramento de Solicitantes; Biblioteca Mario de Andrade</title>
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<style type="text/css">
	
#tamanhoContainer {
	width: 500px;
}

</style> 

</head>
<body>

<div class="container" id="tamanhoContainer" style="margin-top: 20px;">
	
		<center>
			<h4> CADASTRO NOVOS SOLICITANTES </h4>
		</center>
			
			<form action="inserir_solicitante1.php" method="post" style= "margin-top: 10px;">	
	
		<div class="form-group">
   		 <label for="nome_user">Nome:</label>
   		 <input type="string" class="form-control" name="nome_user" placeholder="Insira o nome do solicitante" required>
   		</div>

	    <div class="form-group">
   		 <label for="dataNasc">Data de Nascimento:</label>
   		 <input type="date" class="form-control" name="dataNasc" placeholder="Insira a data de nascimento" required>
		</div>
		
		
		<div class="form-group">
   		 <label for="endereco">Endereço:</label>
   		 <input type="text" class="form-control" name="endereco" placeholder="Insira o endereço" required>
		</div>

		<div class="form-group">
   		 <label for="tel">Telefone:</label>
   		 <input type="text" class="form-control" name="tel" placeholder="Insira o telefone" required>
		</div>


		<div class="form-group">
   		 <label for="email">Email:</label>
   		 <input type="text" class="form-control" name="email" placeholder="Insira o email" required>
		</div>

	 <div class="form-group">
   		 <label for="genero">Genêro:</label>
      		<select class="form-control" name="genero" required> 
   		 	<option>Feminino</option>
   		 	<option>Masculino</option>
   		 	<option>Outro</option>
   		 </select>


   	 <div class="form-group">
   		<label for="escolaridade">Escolaridade:</label>
      	<select class="form-control" name="escolaridade" required> 
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
	</div>
</div>
	<div style= "text-align: right;">
		<a type="submit" href="index.php" class="btn btn-primary">Voltar</a>
		<a type="submit" href="listar_solicitantes1.php" class="btn btn-warning">Lista de Solicitantes</a>		
		<button type="submit" id="botao" class="btn btn-success">Cadastrar</button>
	</div>
  </form>
 </div>
</body>
</html>