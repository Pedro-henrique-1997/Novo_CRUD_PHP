<!DOCTYPE html>
<html>
<head>
	<title>Cadastrando o usuario</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<h2>Insira os dados do usuario</h2>

	<form method="POST" action="validar_usu.php">
  <div>
    <label for="exampleInputEmail1">Nome</label>
    <input type="text" class="form-control" id="nome" aria-describedby="emailHelp" placeholder="Seu Nome" name="nome">
    
  </div>
 
  
  <div>
    <label for="exampleInputPassword1">Login</label>
    <input type="text" class="form-control" id="login" placeholder="Login" name="login">
  </div>
  <input type="submit" name="cadastar">
</form>

</body>
</html>