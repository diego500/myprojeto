<?php 
    $root = 'root';
	$senha ='';

    $id = $_GET['id']; 
	
   
try {
  $pdo = new PDO('mysql:host=localhost;dbname=clinica', $root, $senha);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
  $stmt = $pdo->prepare('DELETE FROM clientes WHERE id = :id');
  $stmt->bindParam(':id', $id); 
  $stmt->execute();
  echo '<script>alert("Parabens! Cliente excluido com sucesso!"); </script>'; 
  echo '<script> window.close(); </script>';
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
?>