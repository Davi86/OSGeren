<?php 
require 'dbconexao.php';

$acao = 'c';

if(isset($_GET['id'])){
     $id            = $_GET['id'];
     $acao          = 'e';
}
if(isset($_GET['nome'])){
    $nome           = $_GET['nome'];
    $turno 	        = $_GET['turno'];
    $mod_turma		= $_GET['mod_turma'];
   
    
    
}else{
    $acao           = 'd';
}

       
   
		
        
        if($acao == 'c'){
            $sql = "INSERT INTO turmas (nome,turno,mod_turma) 
 	    		Values ('$nome','$turno','$mod_turma')";
        }
        elseif($acao == 'e'){
            
            $sql = "UPDATE turmas  SET nome = '$nome', turno = '$turno', mod_turma = '$mod_turma' WHERE id = '$id';";
        }else{
            $sql = "DELETE from turmas WHERE id = '$id' ;";
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
