<?php



           

            require_once 'dbconexao.php';
            

              $sql  = "Select * ";
              $sql .= "from ordem ";
              $sql .= "order by id;";

              $seleciona = mysqli_query($conn, $sql);
              $rows = mysqli_num_rows($seleciona);



?>
<div class="contaniner animado">
    <h4 class="tituloPagina">Ordem de Serviço</h4>
    <div class="input-group input-group-md mb-3 pt-3">
        <div class="input-group-prepend">
            <span class="input-group-text mb-2" id="inputGroup-sizing-md">Nome</span>
        </div>
        <input id="pesquisar" type="text" class="form-control mb-2" aria-label="Pesquisar" aria-describedby="Campo de pesquisa" placeholder="Nome do Cliente ou numero da O.S." style="width:30vw;">
        <button id="cadastrar" class="btn btn-outline-info mr-5 ml-5 mb-2" data-toggle="modal" data-target="#cadastroOS">Cadastrar</button>
        <?php require_once 'modCadastroOS.php'; ?>


    </div>
    <div id="tabelaOrdem">
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Situação</th>
                    <th id="Coluna_aparelho" scope="col">Aparelho</th>
                    <th scope="col">Data de Emissão</th>

                </tr>
            </thead>
            <tbody id="conteudoTabela">
                <?php     
 
                  
                    //A função mysqli_fetch_array() retorna os registros do SELECT que estão na variável $seleciona em uma estrutura de ARRAY
                    while ($campo = mysqli_fetch_array($seleciona)){ 
                        
                        echo '<tr id="'.$campo['id'].'" class="linha pointer" data-toggle="modal" data-target="#ed-cadastroOS" 
                            data-id="'.$campo['id'].'"
                            data-id-cliente="'.$campo['id_cliente'].'"
                            data-cliente="'.$campo['cliente'].'" 
                            data-aparelho="'.$campo['aparelho'].'" 
                            data-defeito="'.$campo['defeito'].'"
                            data-situacao="'.$campo['situacao'].'" 
                            data-relatorio="'.$campo['relatorio'].'"
                            data-valor="'.$campo['valor'].'" 
                            data-data_aber="'.$campo['data_aber'].'" 
                            data-data_concl="'.$campo['data_concl'].'"">';
                        echo '  <td id="id1" value="1">' . $campo['id'] . '</td>';
                        echo '  <td>' . $campo['cliente'] . '</td>';
                        echo '  <td>' . $campo['situacao'] . '</td>';
                        echo '  <td><div id="div2">' . $campo['aparelho'] . '</div></td>';
                        echo '  <td>' . $campo['data_aber'] . '</td>';
                        echo '</tr>';	
                    };
        
          
?>
            </tbody>
        </table>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $("#pesquisar").focus();
        $(".animado").css({
            "opacity": '1'
        });
    });

    $("#pesquisarSituacao").change(function() {
        var pesquisa = $("#pesquisar").val();
        var tabela = "ordem";
        var situacao = $(this).val();
        var url = "php/pesquisaOS.php?palavra=" + pesquisa + "&tabela=" + tabela + "&situacao=" + situacao + "&acao=bpsit";
        //alert(url);
        $.get(url, function(dataReturn) {
            $("#conteudoTabela").html(dataReturn);
        });

    });

    $("#pesquisar").keyup(function() {
        var pesquisa = $(this).val();
        var tabela = "ordem";
        var situacao = $("#pesquisarSituacao").val();
        var url = "php/pesquisaOS.php?palavra=" + pesquisa + "&tabela=" + tabela + "&situacao=" + situacao + "&acao=c";
        //alert(url);
        if (pesquisa != '') {
            $.get(url, function(dataReturn) {
                $("#conteudoTabela").html(dataReturn);
            });
        } else {
            $(function() {
                $.get(url, function(dataReturn) {
                    $("#conteudoTabela").html(dataReturn);
                });
            });
        };
    });

    $('#ed-cadastroOS').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget); // Botão que acionou o modal
        var id = button.data('id'); // Extrai informação dos atributos data-*
        var cliente = button.data('cliente');
        var id_cliente = button.data('id-cliente');
        var aparelho = button.data('aparelho');
        var defeito = button.data('defeito');
        var situacao = button.data('situacao');
        var relatorio = button.data('relatorio');
        var valor = button.data('valor');
        var data_aber = button.data('data_aber');
        var data_concl = button.data('data_concl');

        var modal = $(this);
        modal.find('#ed-os-id').val(id);
        modal.find('#ed-os-nome').val(cliente);
        modal.find('#ed-os-id-cliente').val(id_cliente);
        modal.find('#ed-os-aparelho').val(aparelho);
        modal.find('#ed-os-defeito').val(defeito);
        modal.find('#ed-situacao').val(situacao);
        modal.find('#ed-os-relatorio').val(relatorio);
        modal.find('#ed-os-valor').val(valor);
        modal.find("#ed-data_aber").val(data_aber);
        modal.find('#ed-data_concl').val(data_concl);
        var url = "php/pesquisaEnderecoOS.php?id=" + id_cliente + "&tabela=cliente";
        $.get(url, function(dataReturn) {
            modal.find('#ed-os-dadosCliente').html(dataReturn);
        });


        if (situacao == "Concluido") {
            $("#ed-os-nome").prop("readonly", true);
            $("#ed-os-aparelho").prop("readonly", true);
            $("#ed-os-defeito").prop("readonly", true);
            $("#ed-os-situacao").prop("disabled", true);
            $("#ed-os-relatorio").prop("readonly", true);
            $("#ed-os-valor").prop("readonly", true);
            $("#salvar").prop("disabled", true);
        };

    });
    $("#ed-cadastroOS").on('hidden.bs.modal', function(event) {
        var url = 'php/os.php';
        $.get(url, function(dataReturn) {
            $("#conteudo").html(dataReturn);
        });
    });
    $("#cadastroOS").on('hidden.bs.modal', function(event) {
        var url = 'php/os.php';
        $.get(url, function(dataReturn) {
            $("#conteudo").html(dataReturn);
        });
    });

</script>
