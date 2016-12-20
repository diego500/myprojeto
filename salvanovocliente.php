<?php

try{
  // Faz conexão com banco de daddos
  $pdo = new PDO("mysql:host=localhost;dbname=clinica;","root", "");
}catch(PDOException $e){
  // Caso ocorra algum erro na conexão com o banco, exibe a mensagem
  echo 'Falha ao conectar no banco de dados: '.$e->getMessage();
  die;
}
// Prepara uma sentença para ser executada
$statement = $pdo->prepare('INSERT INTO clientes (nome, convenio) VALUES (:nome, :convenio)');

// Filtra os dados e armazena em variáveis (o filtro padrão é FILTER_SANITIZE_STRING que remove tags HTML)

$nome  = $_GET['nome'];
$convenio = $_GET['convenio'];


// Adiciona os dados acima para serem executados na sentença
$statement->bindParam(':nome',     $nome);
$statement->bindParam(':convenio', $convenio);


// Executa a sentença já com os valores
if($statement->execute()){
  // Definimos a mensagem de sucesso


  echo "<script>window.location='http://localhost/Clinica/myprojeto/clientes.php';alert('parabens, Cadastro realizado com sucesso');</script>";
 
 
 
}else{
  // Definimos a mensagem de erro
  echo '<script>alert("0.0! Erro ao Cadastrar "); </script>'; 
  echo '<script> window.close(); </script>';
}

?>