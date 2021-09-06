<?php 
require 'dbconexao.php';

$acao = 'c';

if(isset($_GET['id'])){
     $id            = $_GET['id'];
     $acao          = 'e';
}
if(isset($_GET['nome_aluno'])){
    $nome           = $_GET['nome_aluno'];
    $mes 	        = $_GET['mes'];
    $mod_turma		= $_GET['mod_turma'];
    $status	    	= $_GET['status'];
   
    
    
}else{
    $acao           = 'd';
}

        if($acao == 'c'){
            $sql = "INSERT INTO pagar_mensa (nome_aluno, mes, modalidade, status) 
 	    		Values ('$nome','$mes','$mod_turma','$status')";
        }
        elseif($acao == 'e'){
            
            $sql = "UPDATE pagar_mensa  SET nome_aluno = '$nome', mes = '$mes', modalidade = '$mod_turma', status = '$status' WHERE id = '$id';";
        }else{
            $sql = "DELETE from pagar_mensa WHERE id = '$id' ;";
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
