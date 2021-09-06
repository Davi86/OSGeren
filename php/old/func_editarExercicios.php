<?php 
require 'dbconexao.php';

$acao = 'c';

if(isset($_GET['id'])){
     $id            = $_GET['id'];
     $acao          = 'e';
}
if(isset($_GET['nome'])){
    $nome           = $_GET['nome'];
    $id_grupo_musc	        = $_GET['id_grupo_musc'];
    
}else{
    $acao           = 'd';
}
        if($acao == 'c'){
            $sql = "INSERT INTO exercicios (nome,id_grupo_musc) 
 	    		Values ('$nome','$id_grupo_musc')";
        }
        elseif($acao == 'e'){
            
            $sql = "UPDATE exercicios  SET nome = '$nome', id_grupo_musc = '$id_grupo_musc' WHERE id = '$id';";
        }else{
            $sql = "DELETE from exercicios WHERE id = '$id' ;";
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
