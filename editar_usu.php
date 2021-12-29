<?php

include_once "conexao.php";

try{
    
    $id = filter_var($_POST['id']);
	$nome = filter_var($_POST['nome']);
	$login = filter_var($_POST['login']);
	

	$insert =  $conectar->prepare("UPDATE usuarios SET nome = :nome, login = :login WHERE id = :id");
	$insert->bindParam(":nome", $nome);
	$insert->bindParam(":login", $login);
	$insert->bindParam(":id", $id);
	$insert->execute();
    
    header("Location:index.php");

}catch(PDOException $e){
	echo "Erro" . $e->getMessage();
}

?>