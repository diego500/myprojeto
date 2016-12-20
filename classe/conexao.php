<?php 

class conexao {
	
	public $username; 
	public $password; 
	
	
	function conectar(){
            
			 $username = "root";
             $password="";

$conn = new PDO('mysql:host=localhost;dbname=clinica', $username, $password);		
		
		
		
		
		}
	
	
	
	
	
	}





?>