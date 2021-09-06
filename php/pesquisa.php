<?php
	//Incluir a conexão com banco de dados
	include_once('dbconexao.php');
	
	//Recuperar o valor da palavra
	$palavra = $_GET['palavra'];
    $tabela = $_GET['tabela'];
    

	//Pesquisar no banco de dados nome do curso referente a palavra digitada pelo usuário
	$palavra = "SELECT * FROM " . $tabela ." WHERE nome LIKE '%$palavra%'";
	$resultado_pesquisa = mysqli_query($conn, $palavra);
	
	if(mysqli_num_rows($resultado_pesquisa) <= 0){
		echo "Nenhum resultado encontrado...";
	}else{
        if($tabela == 'cliente'){
           while($campo = mysqli_fetch_assoc($resultado_pesquisa)){
                    echo '<tr id=" '.$campo['id'].' " class="linha pointer" data-toggle="modal" data-target="#editarCliente" 
                            data-id="'.$campo['id'].'" 
                            data-nome="'.$campo['nome'].'" 
                            data-cpf="'.$campo['cpf'].'" 
                            data-cep="'.$campo['cep'].'" 
                            data-endereco="'.$campo['endereco'].'"
                            data-telefone="'.$campo['telefone'].'" 
                            data-email="'.$campo['email'].'"
                            data-data_nasc="'.$campo['data_nasc'].'">';
                    echo '  <td>' . $campo['id'] . '</td>';
                    echo '  <td>' . $campo['nome'] . '</td>';
                    echo '  <td>' . $campo['cpf'] . '</td>';
                    echo '  <td>' . $campo['telefone'] . '</td>';
                    echo '</tr>';	
           } 
        }elseif($tabela == 'funcionario'){
            while ($campo = mysqli_fetch_array($resultado_pesquisa)){ 
                        echo '<tr id=" '.$campo['id'].' " class="linha pointer" data-toggle="modal" data-target="#editarFunc" 
                            data-id="'.$campo['id'].'" 
                            data-nome="'.$campo['nome'].'" 
                            data-cpf="'.$campo['cpf'].'" 
                            data-cep="'.$campo['cep'].'"
                            data-endereco="'.$campo['endereco'].'" 
                            data-telefone="'.$campo['telefone'].'"
                            data-email="'.$campo['email'].'" 
                            data-username="'.$campo['username'].'" 
                            data-senha="'.$campo['senha'].'"
                            data-conf-senha="'.$campo['senha'].'">';
                        echo '  <td id="id1 value="1">' . $campo['id'] . '</td>';
                        echo '  <td>' . $campo['nome'] . '</td>';
                        echo '  <td>' . $campo['username'] . '</td>';
                        echo '  <td>' . $campo['telefone'] . '</td>';
                        echo '</tr>';	
            }
        }elseif($tabela =='modalidades'){
            while ($campo = mysqli_fetch_array($resultado_pesquisa)){ 
                         echo '<tr id=" '.$campo['id'].' " class="linha pointer" data-toggle="modal" data-target="#editarModal" 
                        data-id=" '.$campo['id'].'" 
                        data-nome=" '.$campo['nome'].'" 
                        data-num_alunos=" '.$campo['num_alunos'].'" 
                        data-dias_semana=" '.$campo['dias_semana'].'" 
                        data-valor=" '.$campo['valor'].'" 
                        
                        ">';
                            echo '  <td id="id1 value="1">' . $campo['id'] . '</td>';
                            echo '  <td>' . $campo['nome'] . '</td>';
                            echo '  <td>' . $campo['num_alunos'] . '</td>';
                            echo '  <td>' . $campo['dias_semana'] . '</td>';
                            echo '  <td>' . $campo['valor'] . '</td>';
                        echo '</tr>';
            }
        }elseif($tabela =='turmas'){
             while ($campo = mysqli_fetch_array($resultado_pesquisa)){ 
                        echo '<tr id=" '.$campo['id'].' " class="linha pointer" data-toggle="modal" data-target="#editarTurmas" 
                        data-id=" '.$campo['id'].'" 
                        data-nome=" '.$campo['nome'].'" 
                        data-turno=" '.$campo['turno'].'" 
                        data-modalidade=" '.$campo['mod_turma'].'" 
                        
                        ">';
                            echo '  <td id="id1 value="1">' . $campo['id'] . '</td>';
                            echo '  <td>' . $campo['nome'] . '</td>';
                            echo '  <td>' . $campo['turno'] . '</td>';
                            
                        echo '</tr>';	
                    };
        }elseif($tabela == 'grupo_musc'){
            while ($campo = mysqli_fetch_array($resultado_pesquisa)){ 
                        echo '<tr id=" '.$campo['id'].' " class="linha pointer" data-toggle="modal" data-target="#editarGrupoMusc" 
                        data-id=" '.$campo['id'].'" 
                        data-nome=" '.$campo['nome'].'" 
                        
                        ">';
                            echo '  <td id="id1 value="1">' . $campo['id'] . '</td>';
                            echo '  <td>' . $campo['nome'] . '</td>';
                            
                        echo '</tr>';	
                    };
        }elseif($tabela =='exercicios'){
            while ($campo = mysqli_fetch_array($resultado_pesquisa)){ 
                        echo '<tr id=" '.$campo['id'].' " class="linha pointer" data-toggle="modal" data-target="#editarExercicios" 
                        data-id=" '.$campo['id'].'" 
                        data-nome=" '.$campo['nome'].'" 
                        
                        ">';
                            echo '  <td id="id1 value="1">' . $campo['id'] . '</td>';
                            echo '  <td>' . $campo['nome'] . '</td>';
                            
                        echo '</tr>';	
                    };
        }elseif($tabela == 'interessados'){
            while ($campo = mysqli_fetch_array($resultado_pesquisa)){ 
                        echo '<tr id=" '.$campo['id'].' " class="linha pointer" data-toggle="modal" data-target="#editarInteressados" 
                        data-id=" '.$campo['id'].'" 
                        data-nome=" '.$campo['nome'].'" 
                        data-email=" '.$campo['email'].'" 
                        data-telefone=" '.$campo['tel'].'" 
                        data-descricao=" '.$campo['descricao'].' "
                        ">';
                            echo '  <td id="id1 value="1">' . $campo['id'] . '</td>';
                            echo '  <td>' . $campo['nome'] . '</td>';
                            echo '  <td>' . $campo['email'] . '</td>';
                            echo '  <td>' . $campo['tel'] . '</td>';
                        echo '</tr>';	
                    };
        }
    }
?>