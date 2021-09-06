<?php
require 'dbconexao.php';

$acao = $_GET['acao'];
$id = $_GET['id'];
$mensagem = $_GET['msg'];
if($acao == 'msg'){
     $sql = "INSERT INTO ordem(chat) Values ('$mensagem') WHERE id = '$id'";
     if(mysqli_query($conn,$sql)){
        echo $mensagem;     
     };
};

?>