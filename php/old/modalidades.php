<?php
            require_once 'dbconexao.php';


        
            
              $sql  = "Select * ";
              $sql .= "from modalidades ";
              $sql .= "order by id;";

              $seleciona = mysqli_query($conn, $sql);
              $rows = mysqli_num_rows($seleciona);



?>
<div class="container animado">
    <h4 class="tituloPagina">Modalidades</h4>
    <div class="input-group input-group-md mb-3 pt-3">
        <div class="input-group-prepend">
            <span class="input-group-text mb-2" id="inputGroup-sizing-md">Pesquisar</span>
        </div>
        <input id="pesquisar" type="text" class="form-control mb-2" aria-label="Pesquisar" aria-describedby="Campo de pesquisa" onchange="buscarAlunos()">
        <button id="cadastrar" class="btn btn-outline-info mr-5 ml-5 mb-2" data-toggle="modal" data-target="#cadastroModal">Cadastrar</button>
        <?php require_once 'modCadastroModal.php'; ?>


    </div>

    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome da Modalidade</th>
                <th scope="col">Numero de Alunos</th>
                <th scope="col">Dias na Semana</th>
                <th scope="col">Valor</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody id="conteudoTabela">
            <?php     
 
                  
                    //A função mysqli_fetch_array() retorna os registros do SELECT que estão na variável $seleciona em uma estrutura de ARRAY
                    while ($campo = mysqli_fetch_array($seleciona)){ 
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
        var tabela = "modalidades";
        var url = "php/pesquisa.php?palavra=" + pesquisa + "&tabela=" + tabela;
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

    $('#editarModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget); // Botão que acionou o modal
        var id = button.data('id'); // Extrai informação dos atributos data-*
        var nome = button.data('nome');
        var num_alunos = button.data('num_alunos');
        var dias_semana = button.data('dias_semana');
        dias_semana = $.trim(dias_semana);
        var valor = button.data('valor');
        nome = $.trim(nome);
        num_alunos = $.trim(num_alunos);

        var modal = $(this);

        modal.find('#ed-id').val(id);
        modal.find('#ed-nome').val(nome);
        modal.find('#ed-num_alunos').val(num_alunos);
        modal.find('#ed-num_dias').val(dias_semana);
        modal.find('#ed-valor').val(valor);


    });

</script>
