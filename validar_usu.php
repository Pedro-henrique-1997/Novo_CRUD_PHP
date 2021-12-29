<?php

include_once "conexao.php";

try{

	$nome = filter_var($_POST['nome']);
	$login = filter_var($_POST['login']);
	

	$insert =  $conectar->prepare("INSERT INTO usuarios (nome, login) VALUES(:nome, :login)");
	$insert->bindParam(":nome", $nome);
	$insert->bindParam(":login", $login);
	$insert->execute();
    
    header("Location:index.php");

}catch(PDOException $e){
	echo "Erro" . $e->getMessage();
}

?>