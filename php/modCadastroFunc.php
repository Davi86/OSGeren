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
<div class="modal fade" id="cadastroFunc" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="TituloModalCentralizado">Cadastrar Funcionario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form id="formularioFunc">
                    <div class="form-group">
                        <input type="hidden" name="id" id="idFunc">
                        <input name="nome" type="text" class="form-control-sm form-control mb-2" id="nomeFunc" placeholder="Nome Completo" required="" aria-required="true">
                    </div>
                    <div class="form-inline">
                        <div class="form-group">
                            <input name="cpf" type="text" class="form-control-sm form-control pr-4 mb-2 mr-1" id="cpfFunc" placeholder="CPF" required="" aria-required="true" maxlength="11" minleigth="11" onkeypress='return SomenteNumero(event)'>
                        </div>
                        <div class="form-group">
                            <input name="cep" type="text" class="form-control-sm form-control mb-2 mr-2 pr-5" id="cepFunc" placeholder="cep" required="" aria-required="true" onkeypress='return SomenteNumero(event)'>
                        </div>
                        <div class="form-group">
                            <input name="telefone" type="text" class="form-control-sm form-control mb-2 pr-5" id="telefoneFunc" placeholder="Telefone" required="" aria-required="true" onkeypress='return SomenteNumero(event)'>
                        </div>
                    </div>
                    <div class="form-group">
                        <input name="endereco" id="enderecoFunc" type="text" class="form-control-sm form-control mb-2"  placeholder="Endereço" required="" aria-required="true">
                    </div>
                    <div class="form-group">
                        <input name="email" type="text" class="form-control-sm form-control mb-2" id="emailFunc" placeholder="E-mail" required="" aria-required="true" onblur="validacaoEmail(formulario.email)">
                        <div id="msgErroEmailFunc" class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <input name="username" type="text" class="form-control-sm form-control mb-2" id="usernameFunc" placeholder="Usuario" required="" aria-required="true">
                    </div>
                    <div class="form-inline">
                        <div class="form-group">
                            <input name="senha" type="password" class="form-control-sm form-control mb-2 mr-2 pr-5" id="senhaFunc" placeholder="Senha" required="" aria-required="true" data-minleigth="6">
                        </div>
                        <div class="form-group">
                            <input name="conf-senha" type="password" class="form-control-sm form-control mb-2 pr-5" id="conf-senhaFunc" placeholder="Confirmar Senha" required="" aria-required="true">
                        </div>
                    </div>
                    <div id="resultadoFunc"></div>

                </form>
            </div>
            <div class="modal-footer">
                <button id="fecharFunc" type="button" class="btn btn-outline-secondary" data-dismiss="modal">Fechar</button>
                <button id="salvarFunc" type="submit" class="btn btn-outline-success">Cadastrar</button>

            </div>
        </div>
    </div>
</div>

<!--MODAL EDITAR-->
<div class="modal fade" id="editarFunc" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="TituloModalCentralizado">Editar cadastro Funcionario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form id="edformularioFunc">
                    <div class="form-group">
                        <input name="ed-id" id="ed-idFunc" type="hidden">
                        <input name="nome" type="text" class="form-control-sm form-control mb-2" id="ed-nomeFunc" placeholder="Nome Completo" required="" aria-required="true">
                        <div class="form-inline">
                            <input name="cpf" id="ed-cpfFunc" type="text" class="form-control-sm form-control pr-4 mb-2 mr-1" placeholder="CPF" required="" aria-required="true" onkeypress='return SomenteNumero(event)' maxlength="11">
                            <input name="cep" id="ed-cepFunc" type="text" class="form-control-sm form-control mb-2 mr-2 pr-5" id="ed-cepFunc" placeholder="cep" required="" aria-required="true" onkeypress='return SomenteNumero(event)'>
                            <input name="telefone" id="ed-telefoneFunc" type="text" class="form-control-sm form-control mb-2 pr-5" placeholder="Telefone" required="" aria-required="true" onkeypress='return SomenteNumero(event)'>

                        </div>
                        <input name="endereco" id="ed-enderecoFunc" type="text" class="form-control-sm form-control mb-2" placeholder="Endereço" required="" aria-required="true">
                        <input name="edemail" id="ed-emailFunc" type="text" class="form-control-sm form-control" placeholder="E-mail" required="" aria-required="true" onblur="EDvalidacaoEmail(edformulario.edemail)">
                        <div id="edmsgErroEmailFunc" class="help-block with-errors"></div>
                        <input name="username" id="ed-usernameFunc" type="text" class="form-control-sm form-control mt-2 mb-2" placeholder="Usuario" required="" aria-required="true">
                        <div class="form-inline">
                            <input name="senha" id="ed-senhaFunc" type="password" class="form-control-sm form-control mb-2 mr-2 pr-5" placeholder="Senha" required="" aria-required="true">
                            <input name="conf-senha" id="ed-conf-senhaFunc" type="password" class="form-control-sm form-control mb-2 pr-5" placeholder="Confirmar Senha" required="" aria-required="true">
                        </div>
                        <div id="ed-resultado"></div>
                    </div>
                </form>
                <div class="modal-footer">
                    <button id="ed-fecharFunc" type="button" class="btn btn-outline-secondary" data-dismiss="modal">Fechar</button>
                    <button id="excluirFunc" type="submit" class="btn btn-outline-danger">Excluir</button>
                    <button id="editarFunc" type="submit" class="btn btn-outline-success">Salvar</button>


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
    $("#fecharFunc").click(function() {
        $("#formulario input").val("");
        $("#formulario textarea").val("");
        $("#formulario input").prop('checked', false);
        $('#resultado').html('');
        var url = "php/pesquisa.php?palavra=&tabela=funcionario";
        $(function() {
            $.get(url, function(dataReturn) {
                $("#conteudoTabela").html(dataReturn);
            });
        });
    });
    $("#salvarFunc").click(function() {
        if ($('#nomeFunc').val() == '' ||
            $('#cpfFunc').val() == '' ||
            $('#cepFunc').val() == '' ||
            $('#enderecoFunc').val() == '' ||
            $('#telefoneFunc').val() == '' ||
            $('#usernameFunc').val() == '' ||
            $('#emailFunc').val() == '' ||
            $('#msgErroEmailFunc').html() != '' ||
            $('#senhaFunc').val() == '' ||
            $('#conf-senhaFunc').val() == '' ||
            $('#senhaFunc').val() != $('#conf-senhaFunc').val()) {

            var resultado = "Insira todos os dados!";

            if ($('#nomeFunc').val() == '') {
                $('#nomeFunc').css({
                    'border-color': 'red'
                });
            };
            if ($('#cpfFunc').val() == '') {
                $('#cpfFunc').css({
                    'border-color': 'red'
                });
            };
            if ($('#cepFunc').val() == '') {
                $('#cepFunc').css({
                    'border-color': 'red'
                });
            };
            if ($('#enderecoFunc').val() == '') {
                $('#enderecoFunc').css({
                    'border-color': 'red'
                });
            };
            if ($('#telefoneFunc').val() == '') {
                $('#telefoneFunc').css({
                    'border-color': 'red'
                });
            };
            if ($('#usernameFunc').val() == '') {
                $('#usernameFunc').css({
                    'border-color': 'red'
                });
            };
            if ($('#emailFunc').val() == '') {
                $('#emailFunc').css({
                    'border-color': 'red'
                });
            };
            if ($('#msgErroEmailFunc').html() != '') {
                $('#emailFunc').css({
                    'border-color': 'red'
                });
            };
            if ($('#senhaFunc').val() == '') {
                $('#senhaFunc').css({
                    'border-color': 'red'
                });
            };
            if ($('#conf-senhaFunc').val() == '') {
                $('#conf-senhaFunc').css({
                    'border-color': 'red'
                });
            };
            if ($('#senhaFunc').val() != $('#conf-senhaFunc').val()) {
                $('#senhaFunc').css({
                    'border-color': 'red'
                });
                $('#conf-senhaFunc').css({
                    'border-color': 'red'
                });
                resultado = "As Senhas não Conferem!";
            }


            $('#resultadoFunc').html(resultado);
        } else {
            //alert('teste');
            var id = $("#idFunc").val();
            var nome = $('#nomeFunc').val();
            var cpf = $('#cpfFunc').val();
            var email = $('#emailFunc').val();
            var cep = $('#cepFunc').val();
            var endereco = $('#enderecoFunc').val();
            var telefone = $('#telefoneFunc').val();
            var username = $('#usernameFunc').val();
            var email = $("#emailFunc").val();
            var senha = $('#senhaFunc').val();
            var url = 'php/func_editarFunc.php?&nome=' + nome + '&cpf=' + cpf + '&email=' + email + '&cep=' + cep + '&endereco=' + endereco + '&telefone=' + telefone + '&username=' + username + '&email=' + email + '&senha=' + senha;
            //alert(url);

            $.get(url, function(dataReturn) {
                $('#resultadoFunc').html(dataReturn);

            });

        }

    });
    $(document).ready(function() {


        function limpa_formulário_cep() {
            // Limpa valores do formulário de cep.
            $("#enderecoFunc").val("");
        }
        //Quando o campo cep perde o foco.
        $("#cepFunc").blur(function() {

            //Nova variável "cep" somente com dígitos.
            var cep = $(this).val().replace(/\D/g, '');

            //Verifica se campo cep possui valor informado.
            if (cep != "") {

                //Expressão regular para validar o CEP.
                var validacep = /^[0-9]{8}$/;

                //Valida o formato do CEP.
                if (validacep.test(cep)) {

                    //Preenche os campos com "..." enquanto consulta webservice.
                    $("#enderecoFunc").val("...");
                    //Consulta o webservice viacep.com.br/
                    $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function(dados) {

                        if (!("erro" in dados)) {
                            //Atualiza os campos com os valores da consulta.
                            $("#enderecoFunc").val('Rua: ' + dados.logradouro + ' Bairro: ' + dados.bairro + ' ' + dados.localidade + ' - ' + dados.uf);

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
    $("#editarFunc").click(function() {
        if ($('#ed-nomeFunc').val() == '' ||
            $('#ed-cpfFunc').val() == '' ||
            $('#ed-cepFunc').val() == '' ||
            $('#ed-enderecoFunc').val() == '' ||
            $('#ed-telefoneFunc').val() == '' ||
            $('#ed-usernameFunc').val() == '' ||
            $('#ed-emailFunc').val() == '' ||
            $('#edmsgErroEmailFunc').html() != '' ||
            $('#ed-senhaFunc').val() == '' ||
            $('#ed-conf-senhaFunc').val() == '' ||
            $('#ed-senhaFunc').val() !=
            $('#ed-conf-senhaFunc').val()) {
            var resultado = 'Insira todos os dados!';
            if ($('#ed-nomeFunc').val() == '') {
                $('#ed-nomeFunc').css({
                    'border-color': 'red'
                });
            };
            if ($('#ed-cpfFunc').val() == '') {
                $('#ed-cpfFunc').css({
                    'border-color': 'red'
                });
            };
            if ($('#ed-cepFunc').val() == '') {
                $('#ed-cepFunc').css({
                    'border-color': 'red'
                });
            };
            if ($('#ed-enderecoFunc').val() == '') {
                $('#ed-enderecoFunc').css({
                    'border-color': 'red'
                });
            };
            if ($('#ed-telefoneFunc').val() == '') {
                $('#ed-telefoneFunc').css({
                    'border-color': 'red'
                });
            };
            if ($('#ed-usernameFunc').val() == '') {
                $('#ed-usernameFunc').css({
                    'border-color': 'red'
                });
            };
            if ($('#ed-emailFunc').val() == '') {
                $('#ed-emailFunc').css({
                    'border-color': 'red'
                });
            };
            if ($('#edmsgErroEmailFunc').html() != '') {
                $('#ed-emailFunc').css({
                    'border-color': 'red'
                });
            };
            if ($('#ed-senhaFunc').val() == '') {
                $('#ed-senhaFunc').css({
                    'border-color': 'red'
                });
            };
            if ($('#ed-conf-senhaFunc').val() == '') {
                $('#ed-conf-senhaFunc').css({
                    'border-color': 'red'
                });
            };
            if ($('#ed-senhaFunc').val() != $('#ed-conf-senhaFunc').val()) {
                $('#ed-senhaFunc').css({
                    'border-color': 'red'
                });
                $('#ed-conf-senhaFunc').css({
                    'border-color': 'red'
                });
                resultado = "As Senhas não Conferem!";
            }


            $('#ed-resultadoFunc').html(resultado);
        } else {
            //alert('teste');
            var id = $("#ed-idFunc").val();
            var nome = $('#ed-nomeFunc').val();
            var cpf = $('#ed-cpfFunc').val();
            var email = $('#ed-emailFunc').val();
            var cep = $('#ed-cepFunc').val();
            var endereco = $('#ed-enderecoFunc').val();
            var telefone = $('#ed-telefoneFunc').val();
            var username = $('#ed-usernameFunc').val();
            var email = $("#ed-emailFunc").val();
            var senha = $('#ed-senhaFunc').val();
            var url = 'php/func_editarFunc.php?&id=' + id + '&nome=' + nome + '&cpf=' + cpf + '&email=' + email + '&cep=' + cep + '&endereco=' + endereco + '&telefone=' + telefone + '&username=' + username + '&email=' + email + '&senha=' + senha;
            //alert(url);

            $.get(url, function(dataReturn) {
                $('#ed-resultadoFunc').html(dataReturn);

            });

        }

    });
    $("#excluirFunc").click(function() {
        var id = $("#ed-idFunc").val();
        var url = 'php/func_editarFunc.php?&id=' + id;
        $.get(url, function(dataReturn) {
            $("#ed-resultadoFunc").html(dataReturn);
        });
        //LIMPA CAMPOS
        $(function() {
            $("#ed-formularioFunc input").val("");
            $("#ed-formularioFunc textarea").val("");
            $("#ed-formularioFunc input").prop('checked', false);
        });
    });
    $("#ed-fecharFunc").click(function() {
        $("#ed-formularioFunc input").val("");
        $("#ed-formularioFunc textarea").val("");
        $("#ed-formularioFunc input").prop('checked', false);
        $('#ed-resultadoFunc').html('');
        var url = "php/pesquisa.php?palavra=&tabela=funcionario";
        $(function() {
            $.get(url, function(dataReturn) {
                $("#conteudoTabela").html(dataReturn);
            });
        });
    });
    $(document).ready(function() {


        function limpa_formulário_cep() {
            // Limpa valores do formulário de cep.
            $("#ed-enderecoFunc").val("");
        }
        //Quando o campo cep perde o foco.
        $("#ed-cepFunc").blur(function() {

            //Nova variável "cep" somente com dígitos.
            var cep = $(this).val().replace(/\D/g, '');

            //Verifica se campo cep possui valor informado.
            if (cep != "") {

                //Expressão regular para validar o CEP.
                var validacep = /^[0-9]{8}$/;

                //Valida o formato do CEP.
                if (validacep.test(cep)) {

                    //Preenche os campos com "..." enquanto consulta webservice.
                    $("#ed-enderecoFunc").val("...");
                    //Consulta o webservice viacep.com.br/
                    $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function(dados) {

                        if (!("erro" in dados)) {
                            //Atualiza os campos com os valores da consulta.
                            $("#ed-enderecoFunc").val('Rua: ' + dados.logradouro + ' Bairro: ' + dados.bairro + ' ' + dados.localidade + ' - ' + dados.uf);

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
