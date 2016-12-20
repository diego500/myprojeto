<?php

$nome = $_POST['nome'];
$convenio= $_POST['convenio'];

echo $nome;
print $convenio;



 $username = "root";
 $password="";

 $conn = new PDO('mysql:host=localhost;dbname=clinica', $username, $password);
























   //     $nome = filter_input(INPUT_get, "nome", FILTER_SANITIZE_MAGIC_QUOTES);
	//	$convenio = filter_input(INPUT_get, "1", FILTER_SANITIZE_MAGIC_QUOTES);
      //  $convenio2= filter_input(INPUT_POST, "1", FILTER_SANITIZE_MAGIC_QUOTES);
		//$convenio3= filter_input(INPUT_POST, "2", FILTER_SANITIZE_MAGIC_QUOTES);
		//$convenio4= filter_input(INPUT_POST, "convenio3", FILTER_SANITIZE_MAGIC_QUOTES);
		//$convenio5= filter_input(INPUT_POST, "convenio4", FILTER_SANITIZE_MAGIC_QUOTES);
	//	$convenio6= filter_input(INPUT_POST, "convenio5", FILTER_SANITIZE_MAGIC_QUOTES);
	
	
	
/*
$sql = 'INSERT INTO clientes (nome, convenio, convenio2, convenio3, convenio4, convenio5, convenio6)
							   VALUES(:nome, :convenio, :convenio2, :convenio3, :convenio4, :convenio5, :convenio6)';
 
			$stm = $conn->prepare($sql);
			$stm->bindValue(':nome', $nome);
			$stm->bindValue(':convenio', $convenio);
			$stm->bindValue(':convenio2',$convenio2);
			$stm->bindValue(':convenio3', $convenio3);
			$stm->bindValue(':convenio4', $convenio4);
			$stm->bindValue(':convenio5', $convenio5);
			$stm->bindValue(':convenio6', $convenio6);
			$retorno = $stm->execute();
*/
?>