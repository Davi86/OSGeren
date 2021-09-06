<?php
	//Incluir a conexão com banco de dados
	include_once('dbconexao.php');
	
	//Recuperar o valor da palavra
	$palavra    = $_GET['palavra'];
    $tabela     = $_GET['tabela'];
    $acao       = $_GET['acao'];
    

	//Pesquisar no banco de dados nome do curso referente a palavra digitada pelo usuário
//	$palavra = "SELECT * FROM " . $tabela ." WHERE nome LIKE '%$palavra%'";
//	$resultado_pesquisa = mysqli_query($conn, $palavra);
    	
	if($acao == 'co'){
        $palavra = "SELECT * FROM " . $tabela ." WHERE nome LIKE '%$palavra%'"; $resultado_pesquisa = mysqli_query($conn, $palavra);
        while($campo = mysqli_fetch_assoc($resultado_pesquisa)){
            echo "<tr class='linha pointer' onclick='teste(".$campo['id'].", &quot;".$campo["nome"]."&quot;)'  >";
            echo '  <td>' . $campo['nome'] . '</td>';
            echo '</tr>';
        };
    }elseif($acao == 'eo'){
        $palavra = "SELECT * FROM " . $tabela ." WHERE nome LIKE '%$palavra%'"; $resultado_pesquisa = mysqli_query($conn, $palavra);
        while($campo = mysqli_fetch_assoc($resultado_pesquisa)){
            echo "<tr class='linha pointer' onclick='edteste(".$campo['id'].", &quot;".$campo["nome"]."&quot;)'  >";
            echo '  <td>' . $campo['nome'] . '</td>';
            echo '</tr>';
        };
    }elseif($acao == 'bpsit'){
        $situacao = $_GET['situacao'];
        if($situacao != ''){
            $palavra = "SELECT * FROM " . $tabela . " WHERE  situacao = '$situacao' "; 
//          echo $palavra;
            $resultado_pesquisa = mysqli_query($conn, $palavra);
            
            if(mysqli_num_rows($resultado_pesquisa) <= 0){
                echo "Nenhum resultado encontrado...";
            }else{
                while($campo2 = mysqli_fetch_assoc($resultado_pesquisa)){
                    echo '<tr  id=" '.$campo2['id'].' " class="linha pointer" name="'.$campo2['cliente'].' "data-toggle="modal" data-target="#ed-cadastroOS" 
                        data-id="'.$campo2['id'].'" 
                        data-cliente="'.$campo2['cliente'].'" 
                        data-id-cliente="'.$campo2['id_cliente'].'" 
                        data-aparelho="'.$campo2['aparelho'].'" 
                        data-defeito="'.$campo2['defeito'].'" 
                        data-situacao="'.$campo2['situacao'].'"
                        data-relatorio="'.$campo2['relatorio'].'" 
                        data-valor="'.$campo2['valor'].'" 
                        data-data_aber="'.$campo2['data_aber'].'"
                        data-data_concl="'.$campo2['data_concl'].'">';
                    echo '  <td>' . $campo2['id'] . '</td>';
                    echo '  <td>' . $campo2['cliente'] . '</td>';
                    echo '  <td>' . $campo2['situacao'] . '</td>';
                    echo '  <td><div id="div2">' . $campo2['aparelho'] . '</div></td>';
                    echo '  <td>' . $campo2['data_aber'] . '</td>';
                    echo '</tr>';	
                };
            };
        }else{
            $palavra = "SELECT * FROM " . $tabela; 
            $resultado_pesquisa = mysqli_query($conn, $palavra);
            
            while($campo2 = mysqli_fetch_assoc($resultado_pesquisa)){
                echo '<tr  id=" '.$campo2['id'].' " class="linha pointer" name="'.$campo2['cliente'].' "data-toggle="modal" data-target="#ed-cadastroOS" 
                    data-id="'.$campo2['id'].'" 
                    data-cliente="'.$campo2['cliente'].'" 
                    data-id-cliente="'.$campo2['id_cliente'].'" 
                    data-aparelho="'.$campo2['aparelho'].'" 
                    data-defeito="'.$campo2['defeito'].'" 
                    data-situacao="'.$campo2['situacao'].'"
                    data-relatorio="'.$campo2['relatorio'].'" 
                    data-valor="'.$campo2['valor'].'" 
                    data-data_aber="'.$campo2['data_aber'].'"
                    data-data_concl="'.$campo2['data_concl'].'">';
                echo '  <td>' . $campo2['id'] . '</td>';
                echo '  <td>' . $campo2['cliente'] . '</td>';
                echo '  <td>' . $campo2['situacao'] . '</td>';
                echo '  <td><div id="div2">' . $campo2['aparelho'] . '</div></td>';
                echo '  <td>' . $campo2['data_aber'] . '</td>';
                echo '</tr>';	
            };
        };
    }else{
        $palavra = "SELECT * FROM " . $tabela . " WHERE id = '$palavra' OR cliente LIKE '%$palavra%' "; 
        $resultado_pesquisa = mysqli_query($conn, $palavra);
            
        if(mysqli_num_rows($resultado_pesquisa) <= 0){
            echo "Nenhum resultado encontrado...";
        }else{
            while($campo2 = mysqli_fetch_assoc($resultado_pesquisa)){
                echo '<tr  id=" '.$campo2['id'].' " class="linha pointer" name="'.$campo2['cliente'].' "data-toggle="modal" data-target="#ed-cadastroOS" 
                    data-id="'.$campo2['id'].'" 
                    data-cliente="'.$campo2['cliente'].'" 
                    data-id-cliente="'.$campo2['id_cliente'].'" 
                    data-aparelho="'.$campo2['aparelho'].'" 
                    data-defeito="'.$campo2['defeito'].'" 
                    data-situacao="'.$campo2['situacao'].'"
                    data-relatorio="'.$campo2['relatorio'].'" 
                    data-valor="'.$campo2['valor'].'" 
                    data-data_aber="'.$campo2['data_aber'].'"
                    data-data_concl="'.$campo2['data_concl'].'">';
                echo '  <td>' . $campo2['id'] . '</td>';
                echo '  <td>' . $campo2['cliente'] . '</td>';
                echo '  <td>' . $campo2['situacao'] . '</td>';
                echo '  <td><div id="div2">' . $campo2['aparelho'] . '</div></td>';
                echo '  <td>' . $campo2['data_aber'] . '</td>';
                echo '</tr>';	
            };
        };
    };
    
      
?>