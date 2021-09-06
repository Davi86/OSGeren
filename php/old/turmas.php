<?php
            require_once 'dbconexao.php';


        
            
              $sql  = "Select * ";
              $sql .= "from turmas ";
              $sql .= "order by id;";

              $seleciona = mysqli_query($conn, $sql);
              $rows = mysqli_num_rows($seleciona);



?>
<div class="container animado">
    <h4 class="tituloPagina">Turmas</h4>
    <div class="input-group input-group-md mb-3 pt-3">

        <div class="input-group-prepend">
            <span class="input-group-text mb-2" id="inputGroup-sizing-md">Pesquisar</span>
        </div>
        <input id="pesquisar" type="text" class="form-control mb-2" aria-label="Pesquisar" aria-describedby="Campo de pesquisa" onchange="buscarAlunos()">
        <button id="cadastrar" class="btn btn-outline-info mr-5 ml-5 mb-2" data-toggle="modal" data-target="#cadastroTurmas">Cadastrar</button>
        <?php require_once 'modCadastroTurmas.php'; ?>


    </div>

    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome da Turma</th>
                <th scope="col">Turno</th>

                <th scope="col"></th>
            </tr>
        </thead>
        <tbody id="conteudoTabela">
            <?php     
 
                  
                    //A função mysqli_fetch_array() retorna os registros do SELECT que estão na variável $seleciona em uma estrutura de ARRAY
                    while ($campo = mysqli_fetch_array($seleciona)){ 
                        echo '<tr id=" '.$campo['id'].' " class="linha pointer" data-toggle="modal" data-target="#editarTurmas" 
                        data-id=" '.$campo['id'].'" 
                        data-nome=" '.$campo['nome'].'" 
                        data-turno=" '.$campo['turno'].'" 
                        data-mod_turma=" '.$campo['mod_turma'].'" 
                        
                        ">';
                            echo '  <td id="id1 value="1">' . $campo['id'] . '</td>';
                            echo '  <td>' . $campo['nome'] . '</td>';
                            echo '  <td>' . $campo['turno'] . '</td>';
                            
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
            opacity: '1'
        });
    });


    $("#pesquisar").keyup(function() {
        //window.alert("funciona");
        var pesquisa = $(this).val();
        var tabela = "turmas";
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
                var url = 'php/turmas.php';
                $.get(url, function(dataReturn) {
                    $("#conteudo").html(dataReturn);
                });
            });
        }
    });

    $('#editarTurmas').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget); // Botão que acionou o modal
        var id = button.data('id'); // Extrai informação dos atributos data-*
        var nome = button.data('nome');
        nome = $.trim(nome);
        var turno = button.data('turno');
        var mod_turma = button.data('mod_turma');
        mod_turma = $.trim(mod_turma);
        turno = $.trim(turno);
        var modal = $(this);

        modal.find('#ed-id').val(id);
        modal.find('#ed-nome').val(nome);
        modal.find('#ed-turno').val(turno);
        modal.find('#ed-mod_turma').val(mod_turma);



    });

</script>
