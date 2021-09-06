
<?php 
require 'dbconexao.php';


		$nome 			= $_GET['nome'];
		$cpf 			= $_GET['cpf'];
		$idade 			= $_GET['idade'];
		$sexo 			= $_GET['sexo'];
		$cep 			= $_GET['cep'];
		$endereco 		= $_GET['endereco'];
		$email 			= $_GET['email'];
		$telefone 		= $_GET['telefone'];
		$data_inicio	= $_GET['data_inicio'];
        $data_venc      = $_GET['diaVenc'];
        $anamnese 		= $_GET['anamnese'];

        

 	    $sql = "INSERT INTO alunos(nome,cpf,idade,sexo,cep,endereco,telefone,data_inicio,data_venc,anamnese) 
 	    		Values ('$nome','$cpf','$idade','$sexo','$cep','$endereco','$telefone','$data_inicio','$data_venc','$anamnese')";
 	   
 		
 		if(mysqli_query($conn,$sql)){
           
           $result =  'Cadastro Realizado com Sucesso';
		}
		else
		{
			
            $result = "Erro ao registrar o Aluno !".mysqli_error($conn);
		}

echo $result;

?>
