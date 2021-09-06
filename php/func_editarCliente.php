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
    $email 			= $_GET['email'];
    $cep 			= $_GET['cep'];
    $endereco 		= $_GET['endereco'];
    $telefone 		= $_GET['telefone'];
    $data_nasc	    = $_GET['data_nasc'];
    
}else{
    $acao           = 'd';
}

       
        
		
        
        if($acao == 'c'){
            $sql = "INSERT INTO cliente(nome,cpf,email,cep,endereco,telefone,data_nasc) 
 	    		Values ('$nome','$cpf','$email','$cep','$endereco','$telefone','$data_nasc')";
        }
        elseif($acao == 'e'){
            
            $sql = "UPDATE cliente SET nome = '$nome', email = '$email', cpf = '$cpf' , data_nasc = '$data_nasc', cep = '$cep', telefone = '$telefone' WHERE id = '$id';";
        }else{
            $sql = "DELETE from cliente WHERE id = '$id' ;";
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
