<?php 
require 'dbconexao.php';

$acao = 'c';

$result2 = '';
if(isset($_GET['id'])){
     if(isset($_GET['data_concl'])){
        $data_concl	    = $_GET['data_concl'];
        $acao ='ec';
    }
     $id            = $_GET['id'];
     $acao          = 'e';
}
if(isset($_GET['id_cliente'])){
    $id_cliente     = $_GET['id_cliente'];
    $nome_cliente   = $_GET['nome_cliente'];
    $valor 			= str_replace(",",".",$_GET['valor']);
    $data_aber 		= $_GET['data_aber'];
    $situacao 		= $_GET['situacao'];
    $aparelho 		= $_GET['aparelho'];
    $defeito 		= $_GET['defeito'];
    $relatorio	    = $_GET['relatorio'];
    
}else{
    $acao           = 'd';
}
        if($acao == 'c'){
            $sql = "INSERT INTO ordem(id_cliente,cliente,aparelho,defeito,situacao,relatorio,valor,data_aber) 
 	    		Values ('$id_cliente','$nome_cliente','$aparelho','$defeito','$situacao','$relatorio','$valor','$data_aber')";
        }
        elseif($acao == 'e'){
            $sql = "UPDATE ordem SET id_cliente = '$id_cliente', cliente = '$nome_cliente' , aparelho = '$aparelho', defeito = '$defeito' , situacao = '$situacao', relatorio = '$relatorio', valor = '$valor', data_aber = '$data_aber'  WHERE id = '$id';";
            
            $result2 = "Não pegou data de conclusao";
            
        }elseif($acao == 'ec'){
            $sql = "UPDATE ordem SET id_cliente = '$id_cliente', cliente = '$nome_cliente', aparelho = '$aparelho', defeito = '$defeito' , situacao = '$situacao', relatorio = '$relatorio', valor = '$valor', data_aber = '$data_aber', data_concl = '$data_concl' WHERE id = '$id';";
            
            $data = getdate(date("U"));
            $dia = $data['mday'];
            $mes = $data['mon'];
            $ano = $data['year'];
            
            $sql2 = "INSERT INTO caixa(categoria, valor, descricao, dia, mes, ano) Values('Entrada', '$valor', 'OS ".$id."', '$dia', '$mes', '$ano';)";
            if(mysqli_query($conn,$sql2)){
                $result2 =  'Entrou no caixa';
		    }else{
                $result2 = "Erro! ".mysqli_error($conn);
            };
            
        }else{
            $sql = "DELETE from ordem WHERE id = '$id' ;";
        };

 		if(mysqli_query($conn,$sql)){
           $result =  'Salvo com Sucesso! ';
		}else{
            $result = "Erro! ".mysqli_error($conn);
		};

echo $result;

?>
