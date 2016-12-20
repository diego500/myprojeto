<?php
    $root = 'root';
	$senha ='';
   
    $nome = $_POST["nome"];
    $nascimento = $_POST["nascimento"];
    $id = $_POST["id"];
  
   
try {
  $pdo = new PDO('mysql:host=localhost;dbname=clinica', $root, $senha);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
  $stmt = $pdo->prepare('UPDATE clientes SET nome = :nome, nascimento = :nascimento WHERE id = :id');
  $stmt->execute(array(
    ':id'   => $id,
    ':nome' => $nome, 
	':nascimento' => $nascimento
  ));
     
  echo '<script>alert("Parabens! auteração relizada com sucesso!"); </script>'; 
  echo "<meta HTTP-EQUIV='refresh' CONTENT='5;URL=inicio.php'>";
  echo '<script> window.close(); </script>';
 
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
?>
