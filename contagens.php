<?php

$link = mysql_connect('localhost','root','');


$conexao = mysql_select_db('clinica',$link);


$consulta = mysql_query("SELECT * FROM clientes");
$NumeroLinhas = mysql_num_rows($consulta);


$consultamedico=mysql_query("SELECT * FROM medicos");
$numeromedico=mysql_num_rows($consultamedico);




$consultacbo=mysql_query("SELECT * FROM cbo");
$numerocbo=mysql_num_rows($consultacbo);

?>