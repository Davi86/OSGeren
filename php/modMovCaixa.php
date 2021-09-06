<!--*************************MODAL CADASTRAR*************************-->
<div class="modal fade" id="movCaixa" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-md" role="document">
        <div class="modal-content" id="modalOS">
            <div class="modal-header">
                <h5 class="modal-title" id="TituloModalCentralizado">Novo Movimento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formularioMov" action="">
                    <div class="container">
                        <div class="row">
                            <div class="col-3">
                                <input id="movData" type="text" class="form-control mb-2 form-control-sm" aria-label="Data" aria-describedby="Data de Emissão" value="<?php $data = getdate(date("U")); echo $data['mday']."/". $data['mon']."/". $data['year']; ?>" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <input id="movDescricao" class="form-control mb-2 form-control-sm" type="text" placeholder="Descrição">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <select name="movCategoria" id="movCategoria" class="form-control mb-2 form-control-sm">
                                    <option value="">Categoria:</option>
                                    <option value="Entrada">Entrada</option>
                                    <option value="Saida">Saída</option>
                                </select>
                            </div>
                            <div class="col-2 input-group-prepend"><span class="input-group-text form-control-sm">Valor</span></div>
                            <div class="col-6">
                                <input id="movValor" class="form-control mb-2 form-control-sm" type="text" placeholder="valor">
                            </div>
                        </div>

                    </div>
                </form>

                <div class="modal-footer">
                    <div id="resultadoMov"></div>
                    <button id="fecharMov" type="button" class="btn btn-outline-secondary" data-dismiss="modal">Fechar</button>
                    <button id="salvarMov" type="submit" class="btn btn-outline-success">Salvar</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--*************************MODAL EDITAR*************************-->
<div class="modal fade" id="ed-movCaixa" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-md" role="document">
        <div class="modal-content" id="modalOS">
            <div class="modal-header">
                <h5 class="modal-title" id="TituloModalCentralizado">Editar Movimento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="ed-formularioMov"action="">
                    <div class="container">
                        <div class="row">
                            <div class="col-3">
                                <input id="ed-movData" type="text" class="form-control mb-2 form-control-sm" aria-label="Data" aria-describedby="Data de Emissão" readonly>
                            </div>
                            <input id="ed-movId" type="hidden">
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <input id="ed-movDescricao" class="form-control mb-2 form-control-sm" type="text" placeholder="Descrição">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <select name="ed-movCategoria" id="ed-movCategoria" class="form-control mb-2 form-control-sm">
                                    <option value="">Categoria:</option>
                                    <option value="Entrada">Entrada</option>
                                    <option value="Saida">Saída</option>
                                </select>
                            </div>
                            <div class="col-2 input-group-prepend"><span class="input-group-text form-control-sm">Valor</span></div>
                            <div class="col-6">
                                <input id="ed-movValor" class="form-control mb-2 form-control-sm" type="text" placeholder="valor">
                            </div>
                        </div>

                    </div>
                </form>

                <div class="modal-footer">
                    <div id="ed-resultadoMov"></div>
                    <button id="ed-fecharMov" type="button" class="btn btn-outline-secondary" data-dismiss="modal">Fechar</button>
                    <button id="excluirMov" type="button" class="btn btn-outline-danger">Excluir</button>
                    <button id="ed-salvarMov" type="submit" class="btn btn-outline-success">Salvar</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    //MODAL CADASTRAR
    $("#fecharMov").click(function() {
        $("#formulario input").val("");
        $("#formulario select").val("");
        $('#resultado').html('');
        var url = "php/func_financeiro.php?acao=total";
//        $(function() {
//            $.get(url, function(dataReturn) {
//                $("#conteudoTabela").html(dataReturn);
//            });
//        });
    });
    $("#salvarMov").click(function adicionarCliente() {
        if ($('#movDescricao').val() == '' || $('#movCategoria').val() == '' || $('#movValor').val() == '') {

            if ($('#movDescricao').val() == '') {
                $('#movDescricao').css({
                    'border-color': 'red'
                });
            };
            if ($('#movCategoria').val() == '') {
                $('#movCategoria').css({
                    'border-color': 'red'
                });
            };
            if ($('#movValor').val() == '') {
                $('#movValor').css({
                    'border-color': 'red'
                });
            };
            $('#resultadoMov').html("Insira todos os dados!");
        } else {
            //alert('teste');
            var descricao = $('#movDescricao').val();
            var categoria = $('#movCategoria').val();
            var valor = $('#movValor').val();
            var dia = <?php $data = getdate(date("U")); echo $data['mday']; ?>;
            var mes = <?php $data = getdate(date("U")); echo $data['mon']; ?>;
            var ano = <?php $data = getdate(date("U")); echo $data['year']; ?>;

            var url = 'php/func_financeiro.php?acao=c&descricao=' + descricao + '&categoria=' + categoria + '&valor=' + valor + '&dia=' + dia + '&mes=' + mes + '&ano=' + ano;
            //alert(url);

            $.get(url, function(dataReturn) {
                $('#resultadoMov').html(dataReturn);
                //alert('teste');
            });
            $(function() {

                $("#formularioMov input").val("");
            });
        }
    });
    //MODAL EDITAR
    $("#ed-fecharMov").click(function() {
        $("#ed-formularioMov input").val("");
        $("#ed-formularioMov select").val("");
        $('#ed-resultadoMov').html('');
       
    });
    $("#ed-salvarMov").click(function adicionarCliente() {
        if ($('#ed-movDescricao').val() == '' || $('#ed-movCategoria').val() == '' || $('#ed-movValor').val() == '') {

            if ($('#ed-movDescricao').val() == '') {
                $('#ed-movDescricao').css({
                    'border-color': 'red'
                });
            };
            if ($('#ed-movCategoria').val() == '') {
                $('#ed-movCategoria').css({
                    'border-color': 'red'
                });
            };
            if ($('#ed-movValor').val() == '') {
                $('#ed-movValor').css({
                    'border-color': 'red'
                });
            };
            $('#ed-resultadoMov').html("Insira todos os dados!");
        } else {
            //alert('teste');
            var id = $("#ed-movId").val();
            var descricao = $('#ed-movDescricao').val();
            var categoria = $('#ed-movCategoria').val();
            var valor = $('#ed-movValor').val();
            var dia = <?php $data = getdate(date("U")); echo $data['mday']; ?>;
            var mes = <?php $data = getdate(date("U")); echo $data['mon']; ?>;
            var ano = <?php $data = getdate(date("U")); echo $data['year']; ?>;

            var url = 'php/func_financeiro.php?acao=ed&id=' + id + '&descricao=' + descricao + '&categoria=' + categoria + '&valor=' + valor + '&dia=' + dia + '&mes=' + mes + '&ano=' + ano;

            $.get(url, function(dataReturn) {
                $('#ed-resultadoMov').html(dataReturn);
                //alert('teste');
            });
            $(function() {

                $("#ed-formularioMov input").val("");
            });
        }
    });
        $("#excluirMov").click(function() {
        var id = $("#ed-movId").val();
        var url = 'php/func_financeiro.php?acao=ex&id=' + id;
        $.get(url, function(dataReturn) {
            $("#ed-resultadoMov").html(dataReturn);
        });
        $(function() {
            $("#ed-formularioMov input").val("");
            $("#ed-formularioMov textarea").val("");
            $("#ed-formularioMov input").prop('checked', false);
        });
    });
</script>
