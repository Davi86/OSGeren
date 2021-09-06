<!--
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script  type="text/javascript" src="js/jquery/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

</head>
-->
<!--MODAL CADASTRAR-->
<div class="modal fade" id="cadastroOS" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
        <div class="modal-content" id="modalOS">
            <div class="modal-header">
                <h5 class="modal-title" id="TituloModalCentralizado">Ordem de Serviço</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="tabContainer" id="ordemDeServico">
                    <div class="buttonContainer">
                        <button class="btn" onclick="showPanel(0,'#bdc3c7')">Descrição</button>
                        <button class="btn" onclick="showPanel(1,'#bdc3c7')">Relatorio</button>
                        <button class="btn" onclick="showPanel(2,'#bdc3c7')">Chat</button>

                    </div>
                    <form id="formularioOS">

                        <!--ABA DESCRIÇÃO-->
                        <div class="tabPanel">
                            <div class="form-group">

                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-5">
                                            <label for="os-id" class="pb-0 mb-0">Numero:</label>
                                            <br>
                                            <input type="text" name="os-id" id="os-id" class="form-control-sm form-control mb-2 mt-0 pt-0" size="widht: 50px;" readonly>
                                        </div>
                                        <div class="col-md-3 col-sm-5">
                                            <label for="data_aber" class="pb-0 mb-0">Emissão:</label>
                                            <br>
                                            <input type="text" id="data_aber" name="data_aber" class="form-control-sm form-control mb-2 mt-0 pt-0" value="<?php $data = getdate(date("U")); echo $data['mday']."/". $data['mon']."/". $data['year']; ?>" readonly>
                                        </div>
                                        <div class="col-md-3 col-sm-5">
                                            <label for="situacao" class="pb-0 mb-0">Situação</label>
                                            <select id="os-situacao" name="os-situacao" class="form-control form-control-sm mb-2 mt-0 pt-0" required="" aria-required="true">
                                                <option Value="Em Aberto">Em Aberto</option>
                                                <option Value="Aguardando Aprovação">Aguardando Aprovação</option>
                                                <option Value="Aprovado">Aprovado</option>
                                                <option Value="Nao Aprovado">Não Aprovado</option>
                                                <option Value="Pronto">Pronto</option>
                                                <option Value="Concluido">Concluído</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-8">
                                            <label for="os-nome" class="pb-0 mb-0">Cliente:</label>
                                            <br>
                                            <input id="os-id-cliente" name="os-id-cliente" type="hidden">
                                            <input id="os-nome" name="os-nome" type="text" class="form-control-sm form-control mb-2 mt-0 pt-0" placeholder="Nome Completo" required="" aria-required="true">

                                        </div>
                                        <div class="col-4">
                                            <label for="os-valor" class="pb-0 mb-0">Valor:</label>
                                            <br>
                                            <input id="os-valor" name="os-valor" type="text" class="form-control-sm form-control pr-4 mb-2 mt-0 pt-0" placeholder="R$">
                                        </div>
                                    </div>
                                    <div id="os-resultadoNomes" class="mb-2" style="max-height: 100px; border: solid 1px lightgray; border-radius: 2px; overflow: auto;"></div>
                                    <div id="os-dadosCliente" class="mb-2" style="max-height: 100px; border: solid 1px lightgray; border-radius: 2px; overflow: auto;"></div>

                                    <div class="row">
                                        <div class="col-12">
                                            <label for="os-aparelho" class="pb-0 mb-0">Descrção do Aparelho:</label>
                                            <br>
                                            <textarea id="os-aparelho" name="os-aparelho" cols="30" rows="2" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="os-defeito" class="pb-0 mb-0">Defeito Apresentado:</label>
                                            <br>
                                            <textarea id="os-defeito" name="os-defeito" cols="30" rows="2" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-9" style="display: block"></div>
                                        <div class="col-3">
                                            <label for="data_concl" class="pb-0 mb-0">Conclusão:</label>
                                            <input type="text" id="data_concl" name="data_concl" class="form-control-sm form-control mb-2 mt-0 pt-0" readonly>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--ABA RELATORIO-->
                        <div class="tabPanel">
                            <textarea id="os-relatorio" name="os-relatorio" cols="30" rows="10" class="" style="height: 100%; max-height: 490px;"></textarea>
                        </div>
                        <!--ABA CHAT-->
                        <div class="tabPanel">
                            <div class="container-fluid">
                                <div class="row">
                                    <div id="areaChat" class="col-12" style="background: lightgray; height: 400px;"></div>
                                </div>
                                <div class="row">
                                    <div class="col-12 form-inline">
                                        <input id="msg" type="text" class="form-control mt-2" style="wight: 200px;">
                                        <button id="enviarMsg" class="btn btn-outline-secondary mt-2">Enviar</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <div id="os-resultado"></div>
                    <button id="os-fechar" type="button" class="btn btn-outline-secondary" data-dismiss="modal">Fechar</button>
                    <button id="os-salvar" type="submit" class="btn btn-outline-success">Salvar</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--MODAL EDITAR-->
<div class="modal fade" id="ed-cadastroOS" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
        <div class="modal-content" id="ed-modalOS">
            <div class="modal-header">
                <h5 class="modal-title" id="TituloModalCentralizado">Ordem de Serviço</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="tabContainer2" id="ed-ordemDeServico">
                    <div class="buttonContainer2">
                        <button class="btn btn2" onclick="showPanel2(0,'#bdc3c7')">Descrição</button>
                        <button class="btn btn2" onclick="showPanel2(1,'#bdc3c7')">Relatorio</button>
                        <button class="btn btn2" onclick="showPanel2(2,'#bdc3c7')">Chat</button>

                    </div>
                    <form id="ed-formularioOS">

                        <!--ABA DESCRIÇÃO-->
                        <div class="tabPanel2">
                            <div class="form-group">

                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-5">
                                            <label for="ed-os-id" class="pb-0 mb-0">Numero:</label>
                                            <br>
                                            <input type="text" name="ed-os-id" id="ed-os-id" class="form-control-sm form-control mb-2 mt-0 pt-0" size="widht: 50px;" readonly>
                                        </div>
                                        <div class="col-md-3 col-sm-5">
                                            <label for="ed-data_aber" class="pb-0 mb-0">Emissão:</label>
                                            <br>
                                            <input type="text" id="ed-data_aber" name="ed-data_aber" class="form-control-sm form-control mb-2 mt-0 pt-0" readonly>
                                        </div>
                                        <div class="col-md-3 col-sm-5">
                                            <label for="ed-situacao" class="pb-0 mb-0">Situação</label>
                                            <select id="ed-situacao" name="ed-situacao" class="form-control form-control-sm mb-2 mt-0 pt-0" required="" aria-required="true">
                                                <option value="Em Aberto">Em Aberto</option>
                                                <option Value="Aguardando Aprovação">Aguardando Aprovação</option>
                                                <option Value="Aprovado">Aprovado</option>
                                                <option Value="Pronto">Pronto</option>
                                                <option Value="Concluido">Concluído</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-8">
                                            <input id="ed-os-id-cliente" name="ed-os-id-cliente" type="hidden">
                                            <label for="ed-os-nome" class="pb-0 mb-0">Cliente:</label>
                                            <br>
                                            <input id="ed-os-nome" name="ed-os-nome" type="text" class="form-control-sm form-control mb-2 mt-0 pt-0" placeholder="Nome Completo" required="" aria-required="true">
                                        </div>
                                        <div class="col-4">
                                            <label for="ed-os-valor" class="pb-0 mb-0">Valor:</label>
                                            <br>
                                            <input id="ed-os-valor" name="ed-os-valor" type="text" class="form-control-sm form-control pr-4 mb-2 mt-0 pt-0" placeholder="R$" >
                                        </div>
                                    </div>
                                    <div id="ed-os-resultadoNomes" class="mb-2" style="max-height: 100px; border: solid 1px lightgray; border-radius: 2px;"></div>
                                    <div id="ed-os-dadosCliente" class="mb-2" style="max-height: 100px; border: solid 1px lightgray; border-radius: 2px;"></div>

                                    <div class="row">
                                        <div class="col-12">
                                            <label for="ed-os-aparelho" class="pb-0 mb-0">Descrção do Aparelho:</label>
                                            <br>
                                            <textarea id="ed-os-aparelho" name="ed-os-aparelho" cols="30" rows="2" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="ed-os-defeito" class="pb-0 mb-0">Defeito Apresentado:</label>
                                            <br>
                                            <textarea id="ed-os-defeito" name="ed-os-defeito" cols="30" rows="2" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-9" style="display: block"></div>
                                        <div class="col-3">
                                            <label for="ed-data_concl" class="pb-0 mb-0">Conclusão:</label>
                                            <input type="text" id="ed-data_concl" name="ed-data_concl" class="form-control-sm form-control mb-2 mt-0 pt-0" readonly>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--ABA RELATORIO-->
                        <div class="tabPanel2">
                            <textarea id="ed-os-relatorio" name="ed-os-relatorio" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <!--ABA CHAT-->
                        <div class="tabPanel2">
                            <div class="container-fluid">
                                <div class="row">
                                    <div id="ed-areaChat" class="col-12" style="background: lightgray; height: 400px;"></div>
                                </div>
                                <div class="row">
                                    <div class="col-12 form-inline">
                                        <input id="ed-msg" type="text" class="form-control mt-2" style="wight: 200px;">
                                        <input id="ed-enviarMsg" type="button" value="Enviar">
                                    </div>

                                </div>
                            </div>
                        </div>

                    </form>
                </div>

                <div class="modal-footer">
                    <div id="ed-os-resultado"></div>
                    <button id="ed-os-fechar" type="button" class="btn btn-outline-secondary" data-dismiss="modal">Fechar</button>
                    <button id="ed-os-excluir" type="button" class="btn btn-outline-danger">Excluir</button>
                    <button id="ed-os-editar" type="submit" class="btn btn-outline-success">Salvar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    //FUNÇOES DE VALIDAÇÃO
    function SomenteNumero(e) {
        var tecla = (window.event) ? event.keyCode : e.which;
        if ((tecla > 47 && tecla < 58)) return true;
        else {
            if (tecla == 8 || tecla == 0) return true;
            else return false;
        }
    };
    //FUNÇÕES DAS ABAS
    var tabButtons = document.querySelectorAll(".tabContainer .buttonContainer button");
    var tabPanels = document.querySelectorAll(".tabContainer  .tabPanel");

    function showPanel(panelIndex, colorCode) {
        tabButtons.forEach(function(node) {
            node.style.backgroundColor = "";
            node.style.color = "";
        });
        tabButtons[panelIndex].style.backgroundColor = colorCode;
        tabButtons[panelIndex].style.color = "white";
        tabPanels.forEach(function(node) {
            node.style.display = "none";
        });
        tabPanels[panelIndex].style.display = "block";
        //        tabPanels[panelIndex].style.backgroundColor = colorCode;
    }
    showPanel(0, '#bdc3c7');

    //FUNÇÕES DAS ABAS MODAL EDITAR
    var tabButtons2 = document.querySelectorAll(".tabContainer2 .buttonContainer2 .btn2");
    var tabPanels2 = document.querySelectorAll(".tabContainer2  .tabPanel2");

    function showPanel2(panelIndex, colorCode) {
        tabButtons2.forEach(function(node) {
            node.style.backgroundColor = "";
            node.style.color = "";
        });
        tabButtons2[panelIndex].style.backgroundColor = colorCode;
        tabButtons2[panelIndex].style.color = "white";
        tabPanels2.forEach(function(node) {
            node.style.display = "none";
        });
        tabPanels2[panelIndex].style.display = "block";
        //        tabPanels[panelIndex].style.backgroundColor = colorCode;
    }
    showPanel2(0, '#bdc3c7');

    //MODAL CADASTRO
    $("#fechar").click(function() {
        $("#formularioOS input").val("");
        $("#formularioOS textarea").val("");
        $("#formularioOS select").val("Em Aberto");
        $('#os-resultado').html('');
        var url = "php/pesquisaOS.php?palavra= &tabela=ordem&situacao= &acao=c";
        $(function() {
            $.get(url, function(dataReturn) {
                $("#conteudoTabela").html(dataReturn);
            });
        });

    });
    $("#os-salvar").click(function() {
        if ($('#os-nome').val() == '' || $('#os-aparelho').val() == '' || $('#os-defeito').val() == '') {

            if ($('#os-nome').val() == '') {
                $('#os-nome').css({
                    'border-color': 'red'
                });
            };
            if ($('#os-aparelho').val() == '') {
                $('#os-aparelho').css({
                    'border-color': 'red'
                });
            };
            if ($('#os-defeito').val() == '') {
                $('#os-defeito').css({
                    'border-color': 'red'
                });
            };


            $('#os-resultado').html("Insira todos os dados!");
        } else {
            //alert('teste');
            var id_cliente = $('#os-id-cliente').val();
            var nome_cliente = $('#os-nome').val();
            var valor = $('#os-valor').val();
            var data_aber = $('#data_aber').val();
            var situacao = $('#os-situacao').val();
            var aparelho = $('#os-aparelho').val();
            var defeito = $('#os-defeito').val();
            var relatorio = $('#os-relatorio').val();
            var data_concl = $('#data_concl').val();
            var url = 'php/func_editarOS.php?id_cliente=' + id_cliente + '&nome_cliente=' + nome_cliente + '&valor=' + valor + '&data_aber=' + data_aber + '&situacao=' + situacao + '&aparelho=' + aparelho + '&defeito=' + defeito + '&relatorio=' + relatorio + '&data_concl' + data_concl;
            //alert(url);

            $.get(url, function(dataReturn) {
                $('#os-resultado').html(dataReturn);
            });
            $("#formularioOS input").val("");
            $("#formularioOS textarea").val("");
            $("#formularioOS select").val("Em Aberto");
            $("#os-dadosCliente").html("");

        };
    });

    function teste(idCliente, nomeCliente) {
        $("#os-nome").val(nomeCliente);
        $("#os-id-cliente").val(idCliente);
        $("#os-resultadoNomes").html("");
        var url = "php/pesquisaEnderecoOS.php?id=" + idCliente + "&tabela=cliente";
        $.get(url, function(dataReturn) {
            $("#os-dadosCliente").html(dataReturn);
        });
    };
    $("#os-nome").keyup(function() {
        //window.alert("funciona");
        var pesquisaCliente = $(this).val();
        var tabela = "cliente";
        var url = "php/pesquisaOS.php?palavra=" + pesquisaCliente + "&tabela=" + tabela + "&acao=co";
        //alert(url);
        //Verificar se há algo digitado
        if (pesquisaCliente != '') {
            //alert("passou aqui"+ pesquisa + tabela);
            $.get(url, function(dataReturn) {
                $("#os-resultadoNomes").html(dataReturn);

            });
        } else {
            $(function() {
                $.get(url, function(dataReturn) {
                    $("#os-resultadoNomes").html("");
                });
            });
        }
    });



    //MODAL EDITAR
    $("#ed-os-editar").click(function adicionarAluno() {
        //alert("teste!")
        if ($('#ed-os-nome').val() == '' || $('#ed-os-aparelho').val() == '' || $('#ed-os-defeito').val() == '') {

            if ($('#ed-os-nome').val() == '') {
                $('#ed-os-nome').css({
                    'border-color': 'red'
                });
            };
            if ($('#ed-os-aparelho').val() == '') {
                $('#ed-os-aparelho').css({
                    'border-color': 'red'
                });
            };
            if ($('#ed-os-defeito').val() == '') {
                $('#ed-os-defeito').css({
                    'border-color': 'red'
                });
            };


            $('#ed-os-resultado').html("Insira todos os dados!");
        } else {
            //alert('teste');
            var id = $('#ed-os-id').val();
            var nome_cliente = $('#ed-os-nome').val();
            var id_cliente = $('#ed-os-id-cliente').val();
            var valor = $('#ed-os-valor').val();
            var data_aber = $('#ed-data_aber').val();
            var situacao = $('#ed-situacao').val();
            var aparelho = $('#ed-os-aparelho').val();
            var defeito = $('#ed-os-defeito').val();
            var relatorio = $('#ed-os-relatorio').val();
            
            if ($("#ed-situacao").val() == 'Concluido'){
                var data_concl = "";
                var url = 'php/func_editarOS.php?&id=' + id + '&id_cliente=' + id_cliente + '&nome_cliente=' + nome_cliente + '&valor=' + valor + '&data_aber=' + data_aber + '&situacao=' + situacao + '&aparelho=' + aparelho + '&defeito=' + defeito + '&relatorio=' + relatorio + '&data_concl=' + data_concl;
                alert(url);

                $.get(url, function(dataReturn) {
                    $('#ed-os-resultado').html(dataReturn);

                });

            }else{
                var data_concl = $('#ed-data-concl').val();
                var url = 'php/func_editarOS.php?&id=' + id + '&id_cliente=' + id_cliente + '&nome_cliente=' + nome_cliente + '&valor=' + valor + '&data_aber=' + data_aber + '&situacao=' + situacao + '&aparelho=' + aparelho + '&defeito=' + defeito + '&relatorio=' + relatorio + '&data_concl=' + data_concl;
                //alert(url);

                $.get(url, function(dataReturn) {
                    $('#ed-os-resultado').html(dataReturn);

                });

            };

        };

    });
   
    

    $("#ed-os-nome").keyup(function() {
        //window.alert("funciona");
        var pesquisaCliente = $(this).val();
        var tabela = "cliente";
        var url = "php/pesquisaOS.php?palavra=" + pesquisaCliente + "&tabela=" + tabela + "&acao=eo";
        //alert(url);
        //Verificar se há algo digitado
        if (pesquisaCliente != '') {
            //alert("passou aqui"+ pesquisa + tabela);
            $.get(url, function(dataReturn) {
                $("#ed-os-resultadoNomes").html(dataReturn);

            });
        } else {
            $(function() {
                $.get(url, function(dataReturn) {
                    $("#ed-os-resultadoNomes").html("");
                });
            });
        }
    });

    $("#ed-enviarMsg").click(function() {
        var msg = $("#ed-msg").val();
        msg = "<tr><td>" + msg + "</td></tr><tr style='font-size: 12px;'><td>Remetente. Data. Hora.</td></tr>";
        //alert(msg);
        $("#ed-areaChat").html(msg);
        $("#ed-msg").val("");
        //        var id = $("#ed-os-id-cliente").val(); 
        //        var url = "php/chat.php?acao=msg&id="+id+"mensagem="+msg;
        //         alert(url);
        //        $.get(url,function(dataReturn){
        //            $("#areaMsg").html(dataReturn);
        //        });
    });

    function edteste(idCliente, nomeCliente) {
        $("#ed-os-nome").val(nomeCliente);
        $("#ed-os-id-cliente").val(idCliente);
        $("#ed-os-resultadoNomes").html("");
        var url = "php/pesquisaEnderecoOS.php?id=" + idCliente + "&tabela=cliente";
        $.get(url, function(dataReturn) {
            $("#ed-os-dadosCliente").html(dataReturn);
        });
    };
    $("#ed-os-excluir").click(function() {
        var id = $("#ed-os-id").val();
        var url = 'php/func_editarOS.php?&id=' + id;
        $.get(url, function(dataReturn) {
            $("#ed-resultado").html(dataReturn);
        });
        $(function() {
            $("#ed-formularioOS input").val("");
            $("#ed-formularioOS textarea").val("");
            $("#ed-formularioOS input").prop('checked', false);
        });
    });
    $("#ed-os-fechar").click(function() {
        $("#ed-formularioOS input").val("");
        $("#ed-formularioOS textarea").val("");
        $("#ed-formularioOS select").val("Em Aberto");
        $("#ed-resultado").html(" ");
        var url = "php/pesquisaOS.php?palavra= &tabela=ordem&situacao= &acao=c";
        $(function() {
            $.get(url, function(dataReturn) {
                $("#conteudoTabela").html(dataReturn);
            });
        });

    });

</script>
