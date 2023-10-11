<?php

	$servidor = 'localhost';
	$usuario = 'root';
	$senha = ''; 
	$banco = 'empresax'; 

	$_conecta = mysqli_connect($servidor, $usuario, $senha, $banco) or die ("erro ".mysqli_error());
	mysqli_set_charset($_conecta,"utf8");

//teste conexao 
/* 
 if($conexao){

 	echo "<script>alert('Conexão OK');</script>";
 }
else {
	echo "<script>alert('Conexão Falhou');</script>".mysqli_error();
}
*/
?> 