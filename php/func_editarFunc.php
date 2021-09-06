<?php 
require 'dbconexao.php';

$acao = 'c';

if(isset($_GET['id'])){
     $id            = $_GET['id'];
     $acao          = 'e';
}
if(isset($_GET['nome'])){
    $nome           = $_GET['nome'];
    $cpf 			= $_GET['cpf'];
    $cep 			= $_GET['cep'];
    $endereco 		= $_GET['endereco'];
    $telefone 		= $_GET['telefone'];
    $username	    = $_GET['username'];
    $email          = $_GET['email'];
    $senha 		    = $_GET['senha'];
    
}else{
    $acao           = 'd';
}
        
        if($acao == 'c'){
            $sql = "INSERT INTO funcionario(nome,cpf,cep,endereco,telefone,username,email,senha) 
 	    		Values ('$nome','$cpf','$cep','$endereco','$telefone','$username','$email','$senha')";
        }
        elseif($acao == 'e'){
            
            $sql = "UPDATE funcionario SET nome = '$nome' , cpf = '$cpf', username = '$username', cep = '$cep', endereco = '$endereco', telefone = '$telefone', email = '$email', senha = '$senha' WHERE id = '$id';";
        }else{
            $sql = "DELETE from funcionario WHERE id = '$id' ;";
        }

             

 		if(mysqli_query($conn,$sql)){
           
           $result =  'Salvo com Sucesso!';
		}
		else
		{
			
            $result = "Erro! ".mysqli_error($conn);
		}

echo $result;

?>
