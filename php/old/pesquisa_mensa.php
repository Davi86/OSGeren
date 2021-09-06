<?php
	//Incluir a conexão com banco de dados
	include_once('dbconexao.php');
	
	//Recuperar o valor da palavra
	$palavra = $_GET['palavra'];
    $tabela = $_GET['tabela'];
    

	//Pesquisar no banco de dados nome do curso referente a palavra digitada pelo usuário
	$palavra = "SELECT * FROM " . $tabela ." WHERE nome_aluno LIKE '%$palavra%'";
	$resultado_pesquisa = mysqli_query($conn, $palavra);
	
	if(mysqli_num_rows($resultado_pesquisa) <= 0){
		echo "Nenhum resultado encontrado...";
	}else{
        
            while ($campo = mysqli_fetch_array($resultado_pesquisa)){ 
                        echo '<tr id=" '.$campo['id'].' " class="linha pointer" data-toggle="modal" data-target="#editarMensalidades" 
                        data-id=" '.$campo['id'].'" 
                        data-nome=" '.$campo['nome_aluno'].'" 
                        data-turno=" '.$campo['mes'].'" 
                        data-modalidade=" '.$campo['modalidade'].'" 
                        data-status=" '.$campo['status'].'" 
                        
                        ">';
                            echo '  <td id="id1 value="1">' . $campo['id'] . '</td>';
                            echo '  <td>' . $campo['nome_aluno'] . '</td>';
                            echo '  <td>' . $campo['mes'] . '</td>';
                            echo '  <td>' . $campo['modalidade'] . '</td>';
                            echo '  <td>' . $campo['status'] . '</td>';
                            
                        echo '</tr>';	
                    };
        }
?>