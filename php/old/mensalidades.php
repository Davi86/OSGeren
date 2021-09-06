<?php
            require_once 'dbconexao.php';


        
            
              $sql  = "Select * ";
              $sql .= "from pagar_mensa ";
              $sql .= "order by id;";

              $seleciona = mysqli_query($conn, $sql);
              $rows = mysqli_num_rows($seleciona);



?>
<div class="container animado">
<h4 class="tituloPagina">Mensalidades</h4>
<div class="input-group input-group-md mb-3 pt-3">
    <div class="input-group-prepend">
        <span class="input-group-text mb-2" id="inputGroup-sizing-md">Pesquisar</span>
    </div>
    <input id="pesquisar" type="text" class="form-control mb-2" aria-label="Pesquisar" aria-describedby="Campo de pesquisa">
    <button id="cadastrar" class="btn btn-outline-info mr-5 ml-5 mb-2" data-toggle="modal" data-target="#cadastroMensalidades">Cadastrar</button>
    <?php require_once 'modCadastroMensalidades.php'; ?>


</div>

<table class="table">
    <thead class="thead-light">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome do Aluno</th>
            <th scope="col">Mês</th>
            <th scope="col">Modalidade</th>
            <th scope="col">Status</th>

            <th scope="col"></th>
        </tr>
    </thead>
    <tbody id="conteudoTabela">
        <?php     
 
                  
                    //A função mysqli_fetch_array() retorna os registros do SELECT que estão na variável $seleciona em uma estrutura de ARRAY
                    while ($campo = mysqli_fetch_array($seleciona)){ 
                        echo '<tr id="'.$campo['id'].'" class="linha pointer" data-toggle="modal" data-target="#editarMensalidades" 
                        data-id="'.$campo['id'].'" 
                        data-nome_aluno="'.$campo['nome_aluno'].'" 
                        data-mes="'.$campo['mes'].'" 
                        data-modalidade="'.$campo['modalidade'].'" 
                        data-status="'.$campo['status'].'" 
                        
                        ">';
                            echo '  <td id="id1 value="1">' . $campo['id'] . '</td>';
                            echo '  <td>' . $campo['nome_aluno'] . '</td>';
                            echo '  <td>' . $campo['mes'] . '</td>';
                            echo '  <td>' . $campo['modalidade'] . '</td>';
                            echo '  <td>' . $campo['status'] . '</td>';
                            
                        echo '</tr>';	
                    };
        
          
?>
    </tbody>
</table>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $("#pesquisar").focus();
         $(".animado").css({
            "opacity": '1'
        });
    });


    $("#pesquisar").keyup(function() {
        //window.alert("funciona");
        var pesquisa = $(this).val();
        var tabela = "pagar_mensa";
        var url = "php/pesquisa_mensa.php?palavra=" + pesquisa + "&tabela=" + tabela;
        //alert(url);
        //Verificar se há algo digitado
        if (pesquisa != '') {
            //alert("passou aqui"+ pesquisa + tabela);
            $.get(url, function(dataReturn) {
                $("#conteudoTabela").html(dataReturn);
            });
        } else {
            $(function() {
                $.get(url, function(dataReturn) {
                    $("#conteudoTabela").html(dataReturn);
                });
            });
        }
    });

    $('#editarMensalidades').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget); // Botão que acionou o modal
        var id = button.data('id'); // Extrai informação dos atributos data-*
        var nome_aluno = button.data('nome_aluno');
        var mes = button.data('mes');
        var modalidade = button.data('modalidade');
        var status = button.data('status');
        id = $.trim(id);
        mes = $.trim(mes);
        nome_aluno = $.trim(nome_aluno);
        modalidade = $.trim(modalidade);
        status = $.trim(status);
        var modal = $(this);
        //alert(id + ' ' + nome_aluno + ' ' + mes + ' ' + modalidade + ' ' + status);
        modal.find('#ed-id').val(id);
        modal.find('#ed-nome_aluno').val(nome_aluno);
        modal.find('#ed-mes').val(mes);
        modal.find('#ed-modalidade').val(modalidade);
        modal.find('#ed-status').val(status);



    });

</script>
