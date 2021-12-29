<?php
include_once "conexao.php";

$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
$consultar_id = $conectar->query("SELECT * FROM usuarios WHERE id = '$id'");
$linha = $consultar_id->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Cadastrando o usuario</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<h2>Insira os dados do usuario</h2>

	<form method="POST" action="editar_usu.php">
  <div>
    <label for="exampleInputEmail1">Nome</label>
    <input type="text" class="form-control" id="nome" aria-describedby="emailHelp" placeholder="Seu Nome" name="nome" value="<?php echo $linha['nome']?>">
    
  </div>
 
  
  <div>
    <label for="exampleInputPassword1">Login</label>
    <input type="text" class="form-control" id="login" placeholder="Login" name="login" value="<?php echo $linha['login']?>">
  </div>

  <input type="hidden" name="id" value="<?php echo $linha['id']?>">
  <input type="submit" name="cadastar">
</form>

</body>
</html>