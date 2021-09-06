<?php 
require 'dbconexao.php';

$acao = $_GET['acao'];
$total = 0;

//if(isset($_GET['id'])){
//     $id            = $_GET['id'];
//     $acao          = 'e';
//}
//if(isset($_GET['nome'])){
//    $nome           = $_GET['nome'];
//    $cpf 			= $_GET['cpf'];
//    $email 			= $_GET['email'];
//    $cep 			= $_GET['cep'];
//    $endereco 		= $_GET['endereco'];
//    $telefone 		= $_GET['telefone'];
//    $data_nasc	    = $_GET['data_nasc'];
//    
//}else{
//    $acao           = 'd';
//}

if($acao == 'total'){
   
    $select = "SELECT categoria, valor FROM caixa";
    $result = mysqli_query($conn, $select);
    $rows = mysqli_num_rows($result);
    if($rows <= 0){
        
    }else{
        while($linha = mysqli_fetch_array($result)){
            if($linha['categoria'] == 'Entrada'){
                $total += $linha['valor'];
            }else{
                $total -= $linha['valor'];
            };
        };
    };
    echo "Total Geral = R$".$total;
}elseif($acao == 'ed'){
    $id        = $_GET['id'];
    $descricao = $_GET['descricao'];
    $categoria = $_GET['categoria'];
    $valor     = $_GET['valor'];
    $dia       = $_GET['dia'];
    $mes       = $_GET['mes'];
    $ano       = $_GET['ano'];
    
    $update = "UPDATE caixa SET dia = '$dia' , mes = '$mes', ano = '$ano', descricao = '$descricao', categoria = '$categoria', valor = '$valor' WHERE id = '$id';";
    if(mysqli_query($conn,$update)){
        $result =  'Salvo com Sucesso!';
    }else{
        $result = "Erro! ".mysqli_error($conn);
	};
    echo $result;
}elseif($acao == 'rm'){
    $mes = $_GET['mes'];
    $select = "SELECT * FROM caixa WHERE mes = '$mes'";
    $result = mysqli_query($conn, $select);
    $rows = mysqli_num_rows($result);
    if($mes !=''){
        if($rows > 0 ){
            while($campo = mysqli_fetch_array($result)){
                echo '<tr id=" '.$campo['id'].' " class="linha" data-toggle="modal" data-target="#ed-movCaixa"
                        data-id="'.$campo['id'].'" 
                        data-dia="'.$campo['dia'].'" 
                        data-mes="'.$campo['mes'].'" 
                        data-ano="'.$campo['ano'].'" 
                        data-descricao="'.$campo['descricao'].'"
                        data-categoria="'.$campo['categoria'].'" 
                        data-valor="'.$campo['valor'].'"
                        >';
                echo '  <td>' . $campo['dia'] . '/'.$campo['mes'].'/'.$campo['ano'].'</td>';
                echo '  <td>' . $campo['descricao'] . '</td>';
                echo '  <td>' . $campo['categoria'] . '</td>';
                echo '  <td>R$' . $campo['valor'] . '</td>';
                echo '</tr>';
            };
        }else{
            $result = "Nenhum resultado encontrado...";
            echo $result;
        };
    }else{
        $select = "SELECT * FROM caixa;";
        $result = mysqli_query($conn, $select);
        $rows = mysqli_num_rows($result);
        if($rows > 0 ){
            while($campo = mysqli_fetch_array($result)){
                echo '<tr id=" '.$campo['id'].' " class="linha" data-toggle="modal" data-target="#ed-movCaixa"
                        data-id="'.$campo['id'].'" 
                        data-dia="'.$campo['dia'].'" 
                        data-mes="'.$campo['mes'].'" 
                        data-ano="'.$campo['ano'].'" 
                        data-descricao="'.$campo['descricao'].'"
                        data-categoria="'.$campo['categoria'].'" 
                        data-valor="'.$campo['valor'].'"
                        >';
                echo '  <td>' . $campo['dia'] . '/'.$campo['mes'].'/'.$campo['ano'].'</td>';
                echo '  <td>' . $campo['descricao'] . '</td>';
                echo '  <td>' . $campo['categoria'] . '</td>';
                echo '  <td>R$' . $campo['valor'] . '</td>';
                echo '</tr>';
            };
        }else{
            $result = "Nenhum resultado encontrado...";
            echo $result;
        };
    };    
        
}elseif($acao == 'mensal'){
    $mes = $_GET['mes'];
    $select = "SELECT categoria, valor FROM caixa WHERE mes = '$mes'";
    $result = mysqli_query($conn, $select);
    $rows = mysqli_num_rows($result);
    if($rows <= 0){
        $select = "SELECT categoria, valor FROM caixa";
        $result = mysqli_query($conn, $select);
        while($linha = mysqli_fetch_array($result)){
            if($linha['categoria'] == 'Entrada'){
                $total += $linha['valor'];
            }else{
                $total -= $linha['valor'];
            };
        };
        echo "Total Geral = R$".$total;
    }else{
        while($linha = mysqli_fetch_array($result)){
            if($linha['categoria'] == 'Entrada'){
                $total += $linha['valor'];
            }else{
                $total -= $linha['valor'];
            };
        };
        echo "Total Mensal = R$".$total;
    };
    
}elseif($acao == 'ex'){
    $id = $_GET['id'];
    $sql = "DELETE from caixa WHERE id = '$id' ;";
    if(mysqli_query($conn,$sql)){
        $result =  'Salvo com Sucesso!';
    }else{
        $result = "Erro! ".mysqli_error($conn);
	};
    echo $result;
}else{
    $descricao = $_GET['descricao'];
    $categoria = $_GET['categoria'];
    $valor     = str_replace(",",".",$_GET['valor']);
    $dia       = $_GET['dia'];
    $mes       = $_GET['mes'];
    $ano       = $_GET['ano'];
    
    $sql = "INSERT INTO caixa(descricao, categoria, valor, dia, mes, ano) VALUES ('$descricao', '$categoria', '$valor', '$dia', '$mes', '$ano')";
    if(mysqli_query($conn,$sql)){
        $result =  'Salvo com Sucesso!';
    }else{
        $result = "Erro! ".mysqli_error($conn);
	};
    echo $result;
};
        
		
        
//        if($acao == 'c'){
//            $sql = "INSERT INTO cliente(nome,cpf,email,cep,endereco,telefone,data_nasc) 
// 	    		Values ('$nome','$cpf','$email','$cep','$endereco','$telefone','$data_nasc')";
//        }
//        elseif($acao == 'e'){
//            
//            $sql = "UPDATE cliente SET nome = '$nome', email = '$email', cpf = '$cpf' , data_nasc = '$data_nasc', cep = '$cep', telefone = '$telefone' WHERE id = '$id';";
//        }else{
//            $sql = "DELETE from cliente WHERE id = '$id' ;";
//        }
//
//        
//
// 		if(mysqli_query($conn,$sql)){
//           
//           $result =  'Salvo com Sucesso!';
//		}
//		else
//		{
//			
//            $result = "Erro! ".mysqli_error($conn);
//		}



?>
