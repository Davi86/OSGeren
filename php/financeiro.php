<?php



           

            require_once 'dbconexao.php';
            

              $sql  = "Select * ";
              $sql .= "from caixa ";
              $sql .= "order by id;";

              $seleciona = mysqli_query($conn, $sql);
              $rows = mysqli_num_rows($seleciona);



?>
<div class="contaniner animado">
    <h4 class="tituloPagina">Financeiro</h4>
    <div class="input-group input-group-md mb-3 pt-3 row">
        
        <div class="input-group-prepend">
            <span class="input-group-text mb-4" id="inputGroup-sizing-md">Resumo Mensal:</span>
        </div>
        
        
            <select name="mes" id="mes" class="form-control">
                <option value="">Mês:</option>
                <option value="1">Janeiro</option>
                <option value="2">Fevereiro</option>
                <option value="3">Março</option>
                <option value="4">Abril</option>
                <option value="5">Maio</option>
                <option value="6">Junho</option>
                <option value="7">Julho</option>
                <option value="8">Agosto</option>
                <option value="9">Setembro</option>
                <option value="10">Outubro</option>
                <option value="11">Novembro</option>
                <option value="12">Dezembro</option>
            </select>
        
        
        <div class="col-3"><button id="" class="btn btn-outline-info mr-6 ml-6 mb-4" data-toggle="modal" data-target="#movCaixa">Nova Movimentação</button>
        </div>

        <?php require_once 'modMovCaixa.php'; ?>
    </div>
    <div id="tabelaFinanceiro">
        <table id="" class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Data</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Valor</th>

            </thead>
            <tbody id="conteudoTabela">
                <?php     
                    //A função mysqli_fetch_array() retorna os registros do SELECT que estão na variável $seleciona em uma estrutura de ARRAY
                    while ($campo = mysqli_fetch_array($seleciona)){ 
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
            ?>

            </tbody>
        </table>
    </div>
</div>
<div class="footer">
    <h5 id="totalGeral">00</h5>
</div>



<style>
    .footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        color: black;
        text-align: center;
    }

</style>
<script type="text/javascript">
    $(document).ready(function() {
        var url = "php/func_financeiro.php?acao=total";
        $.get(url, function(dataReturn) {
            $("#totalGeral").html(dataReturn);
        });
        $(".animado").css({
            "opacity": '1'
        });
    });
    $('#ed-movCaixa').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget); // Botão que acionou o modal
        var id = button.data('id'); // Extrai informação dos atributos data-*
        var dia = button.data('dia');
        var mes = button.data('mes');
        var ano = button.data('ano');
        var descricao = button.data('descricao');
        var categoria = button.data('categoria');
        var valor = button.data('valor');
        var modal = $(this);

        modal.find('#ed-movId').val(id);
        modal.find('#ed-movData').val(dia + '/' + mes + '/' + ano);
        modal.find('#ed-movDescricao').val(descricao);
        modal.find('#ed-movCategoria').val(categoria);
        modal.find('#ed-movValor').val(valor);
    });
    $("#ed-movCaixa").on('hidden.bs.modal', function(event) {
        var url = 'php/financeiro.php';
        $.get(url, function(dataReturn) {
            $("#conteudo").html(dataReturn);
        });
    });
    $("#mes").change(function() {
        var mes = $("#mes").val();
        var url = "php/func_financeiro.php?acao=rm&mes=" + mes;
        //alert(url);
        $.get(url, function(dataReturn) {
            $("#conteudoTabela").html(dataReturn);
        });
        var url2 = "php/func_financeiro.php?acao=mensal&mes=" + mes;
        $.get(url2, function(dataReturn) {
            $("#totalGeral").html(dataReturn);
        });
    });

</script>
