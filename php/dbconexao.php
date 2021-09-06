<?php

$nomedoServidor = "localhost";
$nomedoUsuario = "root";
$senhadobancodeDados = "";
$nomedobancodeDados = "db_os";

$conn = mysqli_connect($nomedoServidor, $nomedoUsuario,$senhadobancodeDados,$nomedobancodeDados);

//Caso ocorra algum problema quando a conexão for solicitada
if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}
?>