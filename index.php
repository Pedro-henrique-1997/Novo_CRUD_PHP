<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de usuarios</title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

	<h2>Lista de Usuarios</h2>

	<?php

	include_once "conexao.php";

	$consultar = $conectar->query("SELECT * FROM usuarios");

	echo "<a href='insert_usu.php'><button type='button' class='btn btn-success'>Cadastrar</button></a>";

	echo "<table class='table'>
  <thead class='thead-dark'>
    <tr>
      <th scope='col'>Nome</th>
      <th scope='col'>Login</th>      
     <th scope='col'>Acoes</th>
    </tr>
  </thead>";

  while($linha = $consultar->fetch(PDO::FETCH_ASSOC)){
  	echo " <tr>
      
      <td>$linha[nome]</td>
      <td>$linha[login]</td>      
      <td><a href='delete_usu.php?id=$linha[id]'><button type='button' class='btn btn-danger'>Excluir</button></a></td>
      <td><a href='edit_user.php?id=$linha[id]'><button type='button' class='btn btn-warning'>Editar</button></a></td>
    </tr>";
  }
  
echo "</table>";

echo $consultar->rowCount() . "Registro(s) Inseridos";

?>



</body>
</html>