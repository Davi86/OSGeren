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
<div class="modal fade" id="cadastroAluno" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="TituloModalCentralizado">Cadastrar Aluno</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form id="formulario">
                    <div class="form-group">
                        <input type="hidden" name="id" id="id">
                        <input name="nome" type="text" class="form-control-sm form-control mb-2" id="nome" placeholder="Nome Completo" required="" aria-required="true">
                        <div class="form-inline">
                            <input name="cpf" type="text" class="form-control-sm form-control pr-4 mb-2 mr-1" id="cpf" placeholder="CPF" required="" aria-required="true">
                            <input name="idade" type="text" class="form-control form-control-sm  mb-2 mr-1 " id="idade" placeholder="Idade" required="" aria-required="true">
                            <select id="sexo" name="sexo" class="form-control form-control-sm mb-2" required="" aria-required="true">
                                <option value="Sexo:">Sexo:</option>
                                <option value="Masculino">Masculino</option>
                                <option Value="Feminino">Feminino</option>
                            </select>
                        </div>
                        <input name="cep" id="cep" type="text" class="form-control-sm form-control mb-2" id="cep" placeholder="cep" required="" aria-required="true">
                        <input name="endereco" id="endereco" type="text" class="form-control-sm form-control mb-2" id="endereco" placeholder="Endere??o" required="" aria-required="true">
                        <input name="telefone" type="text" class="form-control-sm form-control mb-2" id="telefone" placeholder="Telefone" required="" aria-required="true">
                        <div class="form-inline"><label for="data_inicio">Data de Inicio: </label><input id="data_inicio" name="data_inicio" class="form-control  mb-2 ml-2" type="date" required="" aria-required="true" style="width: 175px;"></div>
                        <div class="form-check form-check-inline">
                            <label id="dataVenc" for="radio-group">Dia de Pagamento:</label>
                            <input class="form-check-input mb-2 ml-2" type="radio" name="diaVenc" id="diaVenc" value="1" required="" aria-required="true"><label class="mb-2" for="radio-1">1</label>
                            <input class="form-check-input mb-2 ml-2" type="radio" name="diaVenc" id="diaVenc" value="5" required="" aria-required="true"><label class="mb-2" for="radio-5">5</label>
                            <input class="form-check-input mb-2 ml-2" type="radio" name="diaVenc" id="diaVenc" value="10" required="" aria-required="true"><label class="mb-2" for="radio-10">10</label>
                            <input class="form-check-input mb-2 ml-2" type="radio" name="diaVenc" id="diaVenc" value="15" required="" aria-required="true"><label class="mb-2" for="radio-15">15</label>
                            <input class="form-check-input mb-2 ml-2" type="radio" name="diaVenc" id="diaVenc" value="20" required="" aria-required="true"><label class="mb-2" for="radio-20">20</label>
                            <input class="form-check-input mb-2 ml-2" type="radio" name="diaVenc" id="diaVenc" value="25" required="" aria-required="true"><label class="mb-2" for="radio-25">25</label>
                            <input class="form-check-input mb-2 ml-2" type="radio" name="diaVenc" id="diaVenc" value="30" required="" aria-required="true"><label class="mb-2" for="radio-30">30</label>
                        </div>
                        <textarea id="anamnese" name="anamnese" class="form-control-sm form-control mb-2" id="exampleFormControlTextarea1" rows="3" placeholder="Anamnese" required="" aria-required="true"></textarea>
                    </div>
                    <div id="resultado"></div>

                </form>
                <div class="modal-footer">
                    <button id="fechar" type="button" class="btn btn-outline-secondary" data-dismiss="modal">Fechar</button>
                    <button id="salvar" type="submit" class="btn btn-outline-success">Cadastrar</button>

                </div>

            </div>
        </div>
    </div>
</div>
<!--MODAL EDITAR-->
<div class="modal fade" id="editarAluno" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="TituloModalCentralizado">Editar cadastro Aluno</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form id="ed-formulario">
                    <div class="form-group">
                        <input type="hidden" name="id" id="ed-id">
                        <input name="nome" type="text" class="form-control-sm form-control mb-2" id="ed-nome" placeholder="Nome Completo" required="" aria-required="true">
                        <div class="form-inline">
                            <input name="cpf" type="text" class="form-control-sm form-control pr-4 mb-2 mr-1" id="ed-cpf" placeholder="CPF" required="" aria-required="true">
                            <input name="idade" type="text" class="form-control form-control-sm  mb-2 mr-1 " id="ed-idade" placeholder="Idade" required="" aria-required="true">
                            <select id="ed-sexo" name="sexo" class="form-control form-control-sm mb-2" required="" aria-required="true">
                                <option value="Sexo:">Sexo:</option>
                                <option value="Masculino">Masculino</option>
                                <option value="Feminino">Feminino</option>
                            </select>
                        </div>
                        <input name="cep" id="ed-cep" type="text" class="form-control-sm form-control mb-2" id="cep" placeholder="cep" required="" aria-required="true">
                        <input name="endereco" id="ed-endereco" type="text" class="form-control-sm form-control mb-2" placeholder="Endere??o" required="" aria-required="true">
                        <input name="telefone" type="text" class="form-control-sm form-control mb-2" id="ed-telefone" placeholder="Telefone" required="" aria-required="true">
                        <div class="form-inline"><label for="data_inicio">Data de Inicio: </label><input id="ed-data_inicio" name="data_inicio" class="form-control  mb-2 ml-2" type="date" required="" aria-required="true" style="width: 175px;"></div>
                        <div class="ed-dataVenc form-check form-check-inline">
                            <label id="" for="radio-group">Dia de Pagamento:</label>
                            <input class=" form-check-input mb-2 ml-2" type="radio" name="ed-diaVenc" id="ed-diaVenc 1" value="1" required="" aria-required="true"><label class="mb-2" for="radio-1">1</label>
                            <input class=" form-check-input mb-2 ml-2" type="radio" name="ed-diaVenc" id="ed-diaVenc 5" value="5" required="" aria-required="true"><label class="mb-2" for="radio-5">5</label>
                            <input class=" form-check-input mb-2 ml-2" type="radio" name="ed-diaVenc" id="ed-diaVenc 10" value="10" required="" aria-required="true"><label class="mb-2" for="radio-10">10</label>
                            <input class=" form-check-input mb-2 ml-2" type="radio" name="ed-diaVenc" id="ed-diaVenc 15" value="15" required="" aria-required="true"><label class="mb-2" for="radio-15">15</label>
                            <input class=" form-check-input mb-2 ml-2" type="radio" name="ed-diaVenc" id="ed-diaVenc 20" value="20" required="" aria-required="true"><label class="mb-2" for="radio-20">20</label>
                            <input class=" form-check-input mb-2 ml-2" type="radio" name="ed-diaVenc" id="ed-diaVenc 25" value="25" required="" aria-required="true"><label class="mb-2" for="radio-25">25</label>
                            <input class=" form-check-input mb-2 ml-2" type="radio" name="ed-diaVenc" id="ed-diaVenc 30" value="30" required="" aria-required="true"><label class="mb-2" for="radio-30">30</label>
                        </div>
                        <textarea id="ed-anamnese" name="anamnese" class="form-control-sm form-control mb-2" id="exampleFormControlTextarea1" rows="3" placeholder="Anamnese" required="" aria-required="true"></textarea>
                    </div>
                    <div id="ed-resultado"></div>

                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Fechar</button>
                    <button id="excluir" type="submit" class="btn btn-outline-danger">Excluir</button>
                    <button id="editar" type="submit" class="btn btn-outline-success">Salvar</button>


                </div>

            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    //MODAL CADASTRO
    $("#fechar").click(function() {
        $("#formulario input").val("");
        $("#formulario textarea").val("");
        $("#formulario input").prop('checked', false);
    });
    $("#salvar").click(function adicionarAluno() {
        if ($('#nome').val() == '' || $('#cpf').val() == '' || $('#idade').val() == '' || $('#cep').val() == '' || $('#endereco').val() == '' || $('#telefone').val() == '' || $('#data_inicio').val() == '' || $('#sexo').val() == 'Sexo:') {

            if ($('#nome').val() == '') {
                $('#nome').css({
                    'border-color': 'red'
                });
            };
            if ($('#cpf').val() == '') {
                $('#cpf').css({
                    'border-color': 'red'
                });
            };
            if ($('#idade').val() == '') {
                $('#idade').css({
                    'border-color': 'red'
                });
            };
            if ($('#sexo').val() == 'Sexo:') {
                $('#sexo').css({
                    'border-color': 'red'
                });
            };
            if ($('#cep').val() == '') {
                $('#cep').css({
                    'border-color': 'red'
                });
            };
            if ($('#endereco').val() == '') {
                $('#endereco').css({
                    'border-color': 'red'
                });
            };
            if ($('#telefone').val() == '') {
                $('#telefone').css({
                    'border-color': 'red'
                });
            };
            if ($('#data_inicio').val() == '') {
                $('#data_inicio').css({
                    'border-color': 'red'
                });
            };
            if ($("[name=diaVenc]").prop("checked")) {


            } else {
                $('.form-check').css({
                    'color': 'red'
                });
            };
            $('#resultado').html("Insira todos os dados!");
        } else {
            //alert('teste');
            var id = $("#id").val();
            var nome = $('#nome').val();
            var cpf = $('#cpf').val();
            var idade = $('#idade').val();
            var sexo = $('#sexo').val();
            var email = $('#email').val();
            var cep = $('#cep').val();
            var endereco = $('#endereco').val();
            var telefone = $('#telefone').val();
            var data_inicio = $('#data_inicio').val();
            var diaVenc = $("[name=diaVenc]").val();
            var anamnese = $('#anamnese').val();
            var url = 'php/func_editarAluno.php?&nome=' + nome + '&cpf=' + cpf + '&idade=' + idade + '&sexo=' + sexo + '&email=' + email + '&cep=' + cep + '&endereco=' + endereco + '&telefone=' + telefone + '&data_inicio=' + data_inicio + '&diaVenc=' + diaVenc + '&anamnese=' + anamnese;
            //alert(url);

            $.get(url, function(dataReturn) {
                $('#resultado').html(dataReturn);

            });
            $(function() {

                $("#formulario input").val("");
                $("#formulario textarea").val("");
                $("#formulario input").prop('checked', false);


                //                        $('#nome').val() == '';
                //                        $('#cpf').val() == '';
                //                        $('#idade').val() == '';
                //                        $('#email').val() == '';
                //                        $('#cep').val() == '';
                //                        $('#endereco').val() == '';
                //                        $('#telefone').val() == '';
                //                        $('#data_inicio').val() == '';
                //                        $('#sexo').val() == 'Sexo:';
            });
        }

    });
    $(document).ready(function() {


        function limpa_formul??rio_cep() {
            // Limpa valores do formul??rio de cep.
            $("#endereco").val("");
        }
        //Quando o campo cep perde o foco.
        $("#cep").blur(function() {

            //Nova vari??vel "cep" somente com d??gitos.
            var cep = $(this).val().replace(/\D/g, '');

            //Verifica se campo cep possui valor informado.
            if (cep != "") {

                //Express??o regular para validar o CEP.
                var validacep = /^[0-9]{8}$/;

                //Valida o formato do CEP.
                if (validacep.test(cep)) {

                    //Preenche os campos com "..." enquanto consulta webservice.
                    $("#endereco").val("...");
                    //Consulta o webservice viacep.com.br/
                    $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function(dados) {

                        if (!("erro" in dados)) {
                            //Atualiza os campos com os valores da consulta.
                            $("#endereco").val('Rua: ' + dados.logradouro + ' Bairro: ' + dados.bairro + ' ' + dados.localidade + ' - ' + dados.uf);

                        } //end if.
                        else {
                            //CEP pesquisado n??o foi encontrado.
                            limpa_formul??rio_cep();
                            alert("CEP n??o encontrado.");
                        }
                    });
                } //end if.
                else {
                    //cep ?? inv??lido.
                    limpa_formul??rio_cep();
                    alert("Formato de CEP inv??lido.");
                }
            } //end if.
            else {
                //cep sem valor, limpa formul??rio.
                limpa_formul??rio_cep();
            }
        });
    });
    //MODAL EDITAR
    $("#editar").click(function adicionarAluno() {
        if ($('#ed-nome').val() == '' || $('#ed-cpf').val() == '' || $('#ed-idade').val() == '' || $('#ed-cep').val() == '' || $('#ed-endereco').val() == '' || $('#ed-telefone').val() == '' || $('#ed-data_inicio').val() == '' || $('#ed-sexo').val() == 'Sexo:') {

            if ($('#ed-nome').val() == '') {
                $('#ed-nome').css({
                    'border-color': 'red'
                });
            };
            if ($('#ed-cpf').val() == '') {
                $('#ed-cpf').css({
                    'border-color': 'red'
                });
            };
            if ($('#ed-idade').val() == '') {
                $('#ed-idade').css({
                    'border-color': 'red'
                });
            };
            if ($('#ed-sexo').val() == 'Sexo:') {
                $('#ed-sexo').css({
                    'border-color': 'red'
                });
            };
            if ($('#ed-cep').val() == '') {
                $('#ed-cep').css({
                    'border-color': 'red'
                });
            };
            if ($('#ed-endereco').val() == '') {
                $('#ed-endereco').css({
                    'border-color': 'red'
                });
            };
            if ($('#ed-telefone').val() == '') {
                $('#ed-telefone').css({
                    'border-color': 'red'
                });
            };
            if ($('#ed-data_inicio').val() == '') {
                $('#ed-data_inicio').css({
                    'border-color': 'red'
                });
            };
            if ($("[name=ed-diaVenc]").prop("checked")) {


            } else {
                $('.ed-dataVenc').css({
                    'color': 'red'
                });
            };
            $('#ed-resultado').html("Insira todos os dados!");
        } else {
            //alert('teste');
            var id = $("#ed-id").val();
            var nome = $('#ed-nome').val();
            var cpf = $('#ed-cpf').val();
            var idade = $('#ed-idade').val();
            var sexo = $('#ed-sexo').val();
            var email = $('#ed-email').val();
            var cep = $('#ed-cep').val();
            var endereco = $('#ed-endereco').val();
            var telefone = $('#ed-telefone').val();
            var data_inicio = $('#ed-data_inicio').val();
            var diaVenc = $("[name=ed-diaVenc]").val();
            var anamnese = $('#ed-anamnese').val();
            var url = 'php/func_editarAluno.php?&id=' + id + '&nome=' + nome + '&cpf=' + cpf + '&idade=' + idade + '&sexo=' + sexo + '&email=' + email + '&cep=' + cep + '&endereco=' + endereco + '&telefone=' + telefone + '&data_inicio=' + data_inicio + '&diaVenc=' + diaVenc + '&anamnese=' + anamnese;
            alert(url);

            $.get(url, function(dataReturn) {
                $('#ed-resultado').html(dataReturn);

            });

        }

    });

    $("#excluir").click(function() {
        var id = $("#ed-id").val();
        var url = 'php/func_editarAluno.php?&id=' + id;
        $.get(url, function(dataReturn) {
            $("#ed-resultado").html(dataReturn);
        });
        $(function() {
            $("#ed-formulario input").val("");
            $("#ed-formulario textarea").val("");
            $("#ed-formulario input").prop('checked', false);
        });
    });

    $(document).ready(function() {


        function limpa_formul??rio_cep() {
            // Limpa valores do formul??rio de cep.
            $("#ed-endereco").val("");
        }
        //Quando o campo cep perde o foco.
        $("#ed-cep").blur(function() {

            //Nova vari??vel "cep" somente com d??gitos.
            var cep = $(this).val().replace(/\D/g, '');

            //Verifica se campo cep possui valor informado.
            if (cep != "") {

                //Express??o regular para validar o CEP.
                var validacep = /^[0-9]{8}$/;

                //Valida o formato do CEP.
                if (validacep.test(cep)) {

                    //Preenche os campos com "..." enquanto consulta webservice.
                    $("#ed-endereco").val("...");
                    //Consulta o webservice viacep.com.br/
                    $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function(dados) {

                        if (!("erro" in dados)) {
                            //Atualiza os campos com os valores da consulta.
                            $("#ed-endereco").val('Rua: ' + dados.logradouro + ' Bairro: ' + dados.bairro + ' ' + dados.localidade + ' - ' + dados.uf);

                        } //end if.
                        else {
                            //CEP pesquisado n??o foi encontrado.
                            limpa_formul??rio_cep();
                            alert("CEP n??o encontrado.");
                        }
                    });
                } //end if.
                else {
                    //cep ?? inv??lido.
                    limpa_formul??rio_cep();
                    alert("Formato de CEP inv??lido.");
                }
            } //end if.
            else {
                //cep sem valor, limpa formul??rio.
                limpa_formul??rio_cep();
            }
        });
    });

</script>
