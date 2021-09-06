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
    $idade 			= $_GET['idade'];
    $sexo 			= $_GET['sexo'];
    $cep 			= $_GET['cep'];
    $endereco 		= $_GET['endereco'];
    $telefone 		= $_GET['telefone'];
    $data_inicio	= $_GET['data_inicio'];
    $data_venc      = $_GET['diaVenc'];
    $anamnese 		= $_GET['anamnese'];
    
}else{
    $acao           = 'd';
}

       
        
		
        
        if($acao == 'c'){
            $sql = "INSERT INTO alunos(nome,cpf,idade,sexo,cep,endereco,telefone,data_inicio,data_venc,anamnese) 
 	    		Values ('$nome','$cpf','$idade','$sexo','$cep','$endereco','$telefone','$data_inicio','$data_venc','$anamnese')";
        }
        elseif($acao == 'e'){
            
            $sql = "UPDATE alunos SET nome = '$nome', idade = '$idade', cpf = '$cpf', sexo = '$sexo', data_inicio = '$data_inicio', cep = '$cep', telefone = '$telefone', data_venc = '$data_venc' WHERE id = '$id';";
        }else{
            $sql = "DELETE from alunos WHERE id = '$id' ;";
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
