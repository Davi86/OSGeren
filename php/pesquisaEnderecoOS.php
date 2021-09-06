<?php
	//Incluir a conexão com banco de dados
	include_once('dbconexao.php');
	
	//Recuperar o valor da palavra
	$id = $_GET['id'];
    $tabela = $_GET['tabela'];

	//Pesquisar no banco de dados nome do curso referente a palavra digitada pelo usuário
	$palavra = "SELECT * FROM " . $tabela ." WHERE id = ".$id;
	$resultado_pesquisa = mysqli_query($conn, $palavra);
    
	while($campo = mysqli_fetch_assoc($resultado_pesquisa)){
                echo "Endereço: ".$campo['endereco']."<br>Telefone: ".$campo['telefone'];
            };
    
      
?>