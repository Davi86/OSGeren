<!--
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="js/jquery/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">

</head>
-->
<!--MODAL CADASTRAR-->
<div class="modal fade" id="cadastroCliente" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="TituloModalCentralizado">Cadastrar Cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formularioCliente" data-toggle="validator">
                    <div class="form-group">
                        <input type="hidden" name="idCliente" id="idCliente">
                        <input name="nomeCliente" type="text" class="form-control-sm form-control mb-2" id="nomeCliente" placeholder="Nome Completo" required="" aria-required="true">
                    </div>
                    <div class="form-inline">
                        <div class="form-group">
                            <input name="cpfCliente" type="text" class="form-control-sm form-control pr-4 mb-2 mr-1" id="cpfCliente" placeholder="CPF" required="" aria-required="true" maxlength="11" onkeypress='return SomenteNumero(event)'>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label for="data_nascCliente" style="width: 18vh;"> Data Nasc: </label><input id="data_nascCliente" name="data_nascCliente" class="form-control  mb-2 ml-2" type="date" required="" aria-required="true" style="width: 200px;">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input name="cepCliente" id="cepCliente" type="text" class="form-control-sm form-control mb-2" id="cep" placeholder="cep" required="" aria-required="true" onkeypress='return SomenteNumero(event)'>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <input name="endereco" id="enderecoCliente" type="text" class="form-control-sm form-control mb-2" id="enderecoCliente" placeholder="Endereço" required="" aria-required="true">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <input name="telefoneCliente" type="text" class="form-control-sm form-control mb-2" id="telefoneCliente" placeholder="Telefone" required="" aria-required="true" onkeypress='return SomenteNumero(event)'>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <input name="emailCliente" type="emailCliente" class="form-control-sm form-control mb-2" id="email" placeholder="E-mail" required="" aria-required="true" onblur="validacaoEmail(formulario.email)">
                        <div id="msgErroEmailCliente" class="help-block with-errors"></div>
                    </div>

                    <div id="resultadoCliente"></div>
                </form>
                <div class="modal-footer">
                    <button id="fecharCliente" type="button" class="btn btn-outline-secondary" data-dismiss="modal">Fechar</button>
                    <button id="salvarCliente" type="submit" class="btn btn-outline-success">Cadastrar</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--MODAL EDITAR-->
<div class="modal fade" id="editarCliente" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="TituloModalCentralizado">Editar cadastro Cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="edformularioCliente" data-toggle="validator">
                    <div class="form-group">
                        <input type="hidden" name="id" id="ed-id">
                        <input name="ed-nome" type="text" class="form-control-sm form-control mb-2" id="ed-nome" placeholder="Nome Completo" required="" aria-required="true">
                    </div>
                    <div class="form-inline">
                        <div class="form-group">
                            <input name="ed-cpfCliente" type="text" class="form-control-sm form-control pr-4 mb-2 mr-1" id="ed-cpfCliente" placeholder="CPF" required="" aria-required="true" maxlength="11">
                        </div>
                        <div class="form-group">
                            <label for="data_nasc" style="width: 10vh;">Data Nasc: </label><input id="ed-data_nascCliente" name="ed-data_nascCliente" class="form-control  mb-2 ml-2" type="date" required="" aria-required="true" style="width: 200px;">
                        </div>
                    </div>
                    <div class="form-group">
                        <input name="ed-cepCliente" id="ed-cepCliente" type="text" class="form-control-sm form-control mb-2" id="cep" placeholder="cep" required="" aria-required="true">
                    </div>
                    <div class="form-group">
                        <input name="ed-enderecoCliente" id="ed-enderecoCliente" type="text" class="form-control-sm form-control mb-2" placeholder="Endereço" required="" aria-required="true">
                    </div>
                    <div class="form-group">
                        <input name="telefone" type="text" class="form-control-sm form-control mb-2" id="ed-telefoneCliente" placeholder="Telefone" required="" aria-required="true">
                    </div>
                    <div class="form-group">
                        <input name="edemail" type="text" class="form-control-sm form-control mb-2" id="ed-emailCliente" placeholder="E-mail" required="" aria-required="true" onblur="EDvalidacaoEmail(edformulario.edemail)">
                        <div  id="edmsgErroEmailCliente" class="help-block with-errors"></div>
                    </div>
                    <div id="ed-resultadoCliente"></div>
                </form>
                <div class="modal-footer">
                    <button id="ed-fecharCliente" type="button" class="btn btn-outline-secondary" data-dismiss="modal">Fechar</button>
                    <button id="excluirCliente" type="submit" class="btn btn-outline-danger">Excluir</button>
                    <button id="editarCliente" type="submit" class="btn btn-outline-success">Salvar</button>


                </div>

            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    //FUNCOES DE VALIDACAO
    //Para campos numericos só aceitarem numeros
    function SomenteNumero(e) {
        var tecla = (window.event) ? event.keyCode : e.which;
        if ((tecla > 47 && tecla < 58)) return true;
        else {
            if (tecla == 8 || tecla == 0) return true;
            else return false;
        }
    };
    //Para validacao do campo de email
    function validacaoEmail(field) {
        var usuario = field.value.substring(0, field.value.indexOf("@"));
        var dominio = field.value.substring(field.value.indexOf("@") + 1, field.value.length);

        if ((usuario.length >= 1) &&
            (dominio.length >= 3) &&
            (usuario.search("@") == -1) &&
            (dominio.search("@") == -1) &&
            (usuario.search(" ") == -1) &&
            (dominio.search(" ") == -1) &&
            (dominio.search(".") != -1) &&
            (dominio.indexOf(".") >= 1) &&
            (dominio.lastIndexOf(".") < dominio.length - 1)) {
            document.getElementById("msgErroEmail").innerHTML = "";
            //alert("E-mail valido");
        } else {
            document.getElementById("msgErroEmail").innerHTML = "<font color='red'>E-mail inválido </font>";
            //alert("E-mail invalido");
        }
    };
    //Validação de email modal Editar
        function EDvalidacaoEmail(field) {
        //alert ("teste");
        var usuario = field.value.substring(0, field.value.indexOf("@"));
        var dominio = field.value.substring(field.value.indexOf("@") + 1, field.value.length);

        if ((usuario.length >= 1) &&
            (dominio.length >= 3) &&
            (usuario.search("@") == -1) &&
            (dominio.search("@") == -1) &&
            (usuario.search(" ") == -1) &&
            (dominio.search(" ") == -1) &&
            (dominio.search(".") != -1) &&
            (dominio.indexOf(".") >= 1) &&
            (dominio.lastIndexOf(".") < dominio.length - 1)) {
            document.getElementById("edmsgErroEmail").innerHTML = "";
            //alert("E-mail valido");
        } else {
            document.getElementById("edmsgErroEmail").innerHTML = "<font color='red'>E-mail inválido </font>";
            //alert("E-mail invalido");
        }
    };
    //MODAL CADASTRO
    $("#fecharCliente").click(function() {
        $("#formularioCliente input").val("");
        $('#resultadoCliente').html('');
        var url = "php/pesquisa.php?palavra= &tabela=cliente";
        $(function() {
            $.get(url, function(dataReturn) {
                $("#conteudoTabela").html(dataReturn);
            });
        });
    });
    $("#salvarCliente").click(function adicionarCliente() {
        if ($('#nomeCliente').val() == '' ||
            $('#cpfCliente').val() == '' ||
            $('#emailCliente').val() == '' ||
            $('#cepCliente').val() == '' ||
            $('#enderecoCliente').val() == '' ||
            $('#telefoneCliente').val() == '' ||
            $('#data_nascCliente').val() == ''||
            $("#msgErroEmailCliente").html() != ''
        ) {

            if ($('#nomeCliente').val() == '') {
                $('#nomeCliente').css({
                    'border-color': 'red'
                });
            };
            if ($('#cpfCliente').val() == '') {
                $('#cpfCliente').css({
                    'border-color': 'red'
                });
            };
            if ($('#cepCliente').val() == '') {
                $('#cepCliente').css({
                    'border-color': 'red'
                });
            };
            if ($('#enderecoCliente').val() == '') {
                $('#enderecoCliente').css({
                    'border-color': 'red'
                });
            };
            if ($('#telefone').val() == '') {
                $('#telefone').css({
                    'border-color': 'red'
                });
            };
            if ($('#data_nascCliente').val() == '') {
                $('#data_nascCliente').css({
                    'border-color': 'red'
                });
            };
            if ($('#emailCliente').val() == '') {
                $('#emailCliente').css({
                    'border-color': 'red'
                });
            }; 
            if ($('#msgErroEmailCliente').html() != '') {
                $('#emailCliente').css({
                    'border-color': 'red'
                });
            };

            $('#resultadoCliente').html("Insira todos os dados!");
        } else {
            //alert('teste');
            var nome = $('#nomeCliente').val();
            var cpf = $('#cpfCliente').val();
            var email = $('#emailCliente').val();
            var cep = $('#cepCliente').val();
            var endereco = $('#enderecoCliente').val();
            var telefone = $('#telefoneCliente').val();
            var data_nasc = $('#data_nascCliente').val();
            var url = 'php/func_editarCliente.php?&nome=' + nome + '&cpf=' + cpf + '&email=' + email + '&cep=' + cep + '&endereco=' + endereco + '&telefone=' + telefone + '&data_nasc=' + data_nasc;
            //alert(url);

            $.get(url, function(dataReturn) {
                $('#resultadoCliente').html(dataReturn);
                //alert('teste');
            });
            $(function() {

                $("#formularioCliente input").val("");
            });
        }

    });
    $(document).ready(function() {


        function limpa_formulário_cep() {
            // Limpa valores do formulário de cep.
            $("#enderecoCliente").val("");
        }
        //Quando o campo cep perde o foco.
        $("#cepCliente").blur(function() {

            //Nova variável "cep" somente com dígitos.
            var cep = $(this).val().replace(/\D/g, '');

            //Verifica se campo cep possui valor informado.
            if (cep != "") {

                //Expressão regular para validar o CEP.
                var validacep = /^[0-9]{8}$/;

                //Valida o formato do CEP.
                if (validacep.test(cep)) {

                    //Preenche os campos com "..." enquanto consulta webservice.
                    $("#enderecoCliente").val("...");
                    //Consulta o webservice viacep.com.br/
                    $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function(dados) {

                        if (!("erro" in dados)) {
                            //Atualiza os campos com os valores da consulta.
                            $("#enderecoCliente").val('Rua: ' + dados.logradouro + ' Bairro: ' + dados.bairro + ' ' + dados.localidade + ' - ' + dados.uf);

                        } //end if.
                        else {
                            //CEP pesquisado não foi encontrado.
                            limpa_formulário_cep();
                            alert("CEP não encontrado.");
                        }
                    });
                } //end if.
                else {
                    //cep é inválido.
                    limpa_formulário_cep();
                    alert("Formato de CEP inválido.");
                }
            } //end if.
            else {
                //cep sem valor, limpa formulário.
                limpa_formulário_cep();
            }
        });
    });
    //MODAL EDITAR
    $("#editarCliente").click(function adicionarCliente() {
        if ($('#ed-nomeCliente').val() == '' || 
            $('#ed-cpfCliente').val() == '' || 
            $('#ed-emailCliente').val() == '' || 
            $('#ed-cepCliente').val() == '' || 
            $('#ed-enderecoCliente').val() == '' || 
            $('#ed-telefoneCliente').val() == '' || 
            $('#ed-data_nascCliente').val() == ''||
            $('#edmsgErroEmailCliente').html()!=''
           ){

            if ($('#ed-nomeCliente').val() == '') {
                $('#ed-nomeCliente').css({
                    'border-color': 'red'
                });
            };
            if ($('#ed-cpfCliente').val() == '') {
                $('#ed-cpfCliente').css({
                    'border-color': 'red'
                });
            };
            if ($('#ed-emailCliente').val() == '') {
                $('#ed-emailCliente').css({
                    'border-color': 'red'
                });
            };
            if ($('#ed-cepCliente').val() == '') {
                $('#ed-cepCliente').css({
                    'border-color': 'red'
                });
            };
            if ($('#ed-enderecoCliente').val() == '') {
                $('#ed-enderecoCliente').css({
                    'border-color': 'red'
                });
            };
            if ($('#ed-telefoneCliente').val() == '') {
                $('#ed-telefoneCliente').css({
                    'border-color': 'red'
                });
            };
            if ($('#ed-data_nascCliente').val() == '') {
                $('#ed-data_nascCliente').css({
                    'border-color': 'red'
                });
            };
            if ($('#edmsgErroEmailCliente').html() != '') {
                $('#ed-emailCliente').css({
                    'border-color': 'red'
                });
            };

            $('#ed-resultado').html("Insira todos os dados!");
        } else {
            //alert('teste');
            var id = $("#ed-idCliente").val();
            var nome = $('#ed-nomeCliente').val();
            var cpf = $('#ed-cpfCliente').val();
            var email = $('#ed-emailCliente').val();
            var cep = $('#ed-cepCliente').val();
            var endereco = $('#ed-enderecoCliente').val();
            var telefone = $('#ed-telefoneCliente').val();
            var data_nasc = $('#ed-data_nascCliente').val();
            var url = 'php/func_editarCliente.php?&id=' + id + '&nome=' + nome + '&cpf=' + cpf + '&email=' + email + '&cep=' + cep + '&endereco=' + endereco + '&telefone=' + telefone + '&data_nasc=' + data_nasc;
            //alert(url);

            $.get(url, function(dataReturn) {
                $('#ed-resultadoCliente').html(dataReturn);

            });

        }

    });
    $("#ed-fecharCliente").click(function() {
        $("#ed-formularioCliente input").val("");
        $('#ed-resultadoCliente').html('');
        var url = "php/pesquisa.php?palavra= &tabela=cliente";
        $(function() {
            $.get(url, function(dataReturn) {
                $("#conteudoTabela").html(dataReturn);
            });
        });
    });
    $("#excluirCliente").click(function() {
        var id = $("#ed-idCliente").val();
        var url = 'php/func_editarCliente.php?&id=' + id;
        $.get(url, function(dataReturn) {
            $("#ed-resultadoCliente").html(dataReturn);
        });
        $(function() {
            $("#ed-formularioCliente input").val("");
            $("#ed-formularioCliente textarea").val("");
            $("#ed-formularioCliente input").prop('checked', false);
        });
    });

    $(document).ready(function() {


        function limpa_formulário_cep() {
            // Limpa valores do formulário de cep.
            $("#ed-enderecoCliente").val("");
        }
        //Quando o campo cep perde o foco.
        $("#ed-cepCliente").blur(function() {

            //Nova variável "cep" somente com dígitos.
            var cep = $(this).val().replace(/\D/g, '');

            //Verifica se campo cep possui valor informado.
            if (cep != "") {

                //Expressão regular para validar o CEP.
                var validacep = /^[0-9]{8}$/;

                //Valida o formato do CEP.
                if (validacep.test(cep)) {

                    //Preenche os campos com "..." enquanto consulta webservice.
                    $("#ed-enderecoCliente").val("...");
                    //Consulta o webservice viacep.com.br/
                    $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function(dados) {

                        if (!("erro" in dados)) {
                            //Atualiza os campos com os valores da consulta.
                            $("#ed-enderecoCliente").val('Rua: ' + dados.logradouro + ' Bairro: ' + dados.bairro + ' ' + dados.localidade + ' - ' + dados.uf);

                        } //end if.
                        else {
                            //CEP pesquisado não foi encontrado.
                            limpa_formulário_cep();
                            alert("CEP não encontrado.");
                        }
                    });
                } //end if.
                else {
                    //cep é inválido.
                    limpa_formulário_cep();
                    alert("Formato de CEP inválido.");
                }
            } //end if.
            else {
                //cep sem valor, limpa formulário.
                limpa_formulário_cep();
            }
        });
    });

</script>
