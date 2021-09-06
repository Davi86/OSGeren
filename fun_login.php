<?php 

	
	require_once 'php/dbconexao.php';
    
    

	$login = $_POST['username']; 
	$senha = $_POST['senha'];
	

	

		$verifica = mysqli_query($conn, "SELECT * FROM funcionario WHERE username = '$login' AND senha = '$senha'");

		if ($login == "" || $login == null and $senha == "" || $senha == null) {

           ?><script type="text/javascript">alert("Preencha todos os campos!");window.location.href='index.php';  </script><?php
        }elseif ($login == "" || $login == null) {
        
           ?><script type="text/javascript">alert("Insira o Login!");window.location.href='index.php';  </script><?php
        }elseif ($senha == "" || $senha == null){
        
            ?><script type="text/javascript">alert"Insira a Senha!");window.location.href='index.php';  </script><?php
        }else{
            if (mysqli_num_rows($verifica)<=0){ 
        
        ?><script type="text/javascript">alert("Login ou Senha Invalidos!"); window.location.href='index.php'; </script><?php
            
            }else{
//                echo "Logado com Sucesso!";
                header('location: inicial.php');
            }
        }


		
    
?>



 