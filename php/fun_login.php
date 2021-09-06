<?php 

	
	require_once 'dbconexao.php';
    
    

	$login = $_POST['username']; 
	$senha = $_POST['senha'];
	$entrar = $_POST['entrar'];

	if (isset($entrar)) {

		$verifica = mysqli_query($conn, "SELECT * FROM users WHERE username = '$login' AND senha = '$senha'");

		if ($login == "" || $login == null and $senha == "" || $senha == null) {?>
		   	
		   	<script language='javascript' type='text/javascript'>alert('Campos de login e senha estão vazios!');window.location.href='index.php';</script>

		<?php  } 

		if ($login == "" || $login == null) {?>
			
			<script language='javascript' type='text/javascript'>alert('Campo de login vazio!');window.location.href='index.php';</script>

	<?php }

		if ($senha == "" || $senha == null){?>

			<script language='javascript' type='text/javascript'>alert('Campo de senha vazio!');window.location.href='index.php';</script>
		
	<?php }


		if (mysqli_num_rows($verifica)<=0){ 
         echo 'username = '.$login.' senha = '.$senha;
?>	
			
			<script language='javascript' type='text/javascript'>
				alert('Login e/ou senha incorretos!');
				window.location.href='modLogin.php';
			</script>
			
			
	<?php } else { ?>
<?php
			header("location: Academia/index.php");
                 } 
        }  
?>



 