<?php

$link = mysql_connect('localhost','root','');


$conexao = mysql_select_db('clinica',$link);


$consulta = mysql_query("SELECT * FROM `clientes`");
$NumeroLinhas = mysql_num_rows($consulta);



?>