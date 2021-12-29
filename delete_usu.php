<?php

include_once "conexao.php";

try{
    
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
	
	

	$deletar =  $conectar->prepare("DELETE FROM usuarios WHERE id = :id");	
	$deletar->bindParam(":id", $id);
	$deletar->execute();
    
    header("Location:index.php");

}catch(PDOException $e){
	echo "Erro" . $e->getMessage();
}

?>