<?php 
require 'dbconexao.php';

$acao = 'c';

if(isset($_GET['id'])){
     $id            = $_GET['id'];
     $acao          = 'e';
}
if(isset($_GET['nome'])){
    $nome           = $_GET['nome'];
    $num_alunos 	= $_GET['num_alunos'];
    $num_dias		= $_GET['num_dias'];
    $valor			= $_GET['valor'];
    
    
}else{
    $acao           = 'd';
}

       
   
		
        
        if($acao == 'c'){
            $sql = "INSERT INTO modalidades(nome,num_alunos,dias_semana,valor) 
 	    		Values ('$nome','$num_alunos','$num_dias','$valor')";
        }
        elseif($acao == 'e'){
            
            $sql = "UPDATE modalidades SET nome = '$nome', num_alunos = '$num_alunos', dias_semana = '$num_dias', valor = '$valor' WHERE id = '$id';";
        }else{
            $sql = "DELETE from modalidades WHERE id = '$id' ;";
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
