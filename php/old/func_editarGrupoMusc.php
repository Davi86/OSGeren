<?php 
require 'dbconexao.php';

$acao = 'c';

if(isset($_GET['id'])){
     $id            = $_GET['id'];
     $acao          = 'e';
}
if(isset($_GET['nome'])){
    $nome           = $_GET['nome'];
    
   
    
    
}else{
    $acao           = 'd';
}

       
   
		
        
        if($acao == 'c'){
            $sql = "INSERT INTO grupo_musc (nome) 
 	    		Values ('$nome')";
        }
        elseif($acao == 'e'){
            
            $sql = "UPDATE grupo_musc  SET nome = '$nome' WHERE id = '$id';";
        }else{
            $sql = "DELETE from grupo_musc WHERE id = '$id' ;";
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
