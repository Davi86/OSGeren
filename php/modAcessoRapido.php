<!--MODAL ALUNO-->
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
                        <input name="endereco" id="endereco" type="text" class="form-control-sm form-control mb-2" id="endereco" placeholder="Endereço" required="" aria-required="true">
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
<!--MODAL FUNCIONARIO-->
<div class="modal fade" id="cadastroFunc" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="TituloModalCentralizado">Cadastrar Funcionario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form id="fun-formulario">
                    <div class="form-group">
                        <input type="hidden" name="id" id="fun-id">
                        <input name="nome" type="text" class="form-control-sm form-control mb-2" id="fun-nome" placeholder="Nome Completo" required="" aria-required="true">
                        <div class="form-inline">
                            <input name="cpf" type="text" class="form-control-sm form-control pr-4 mb-2 mr-1" id="fun-cpf" placeholder="CPF" required="" aria-required="true">
                            <input name="idade" type="text" class="form-control form-control-sm  mb-2 mr-1 " id="fun-idade" placeholder="Idade" required="" aria-required="true">
                            <select id="fun-sexo" name="sexo" class="form-control form-control-sm mb-2" required="" aria-required="true">
                                <option value="Sexo:">Sexo:</option>
                                <option value="Masculino">Masculino</option>
                                <option Value="Feminino">Feminino</option>
                            </select>
                        </div>
                        <div class="form-inline">
                            <input name="cep" id="fun-cep" type="text" class="form-control-sm form-control mb-2 mr-2 pr-5" id="cep" placeholder="cep" required="" aria-required="true">
                            <input name="telefone" type="text" class="form-control-sm form-control mb-2 pr-5" id="fun-telefone" placeholder="Telefone" required="" aria-required="true">
                        </div>
                        <input name="endereco" type="text" class="form-control-sm form-control mb-2" id="fun-endereco" placeholder="Endereço" required="" aria-required="true">
                        <input name="email" type="text" class="form-control-sm form-control mb-2" id="fun-email" placeholder="E-mail" required="" aria-required="true">
                        <input name="username" type="text" class="form-control-sm form-control mb-2" id="fun-username" placeholder="Usuario" required="" aria-required="true">
                        <div class="form-inline">
                            <input name="senha" type="password" class="form-control-sm form-control mb-2 mr-2 pr-5" id="fun-senha" placeholder="Senha" required="" aria-required="true">
                            <input name="conf-senha" type="password" class="form-control-sm form-control mb-2 pr-5" id="fun-conf-senha" placeholder="Confirmar Senha" required="" aria-required="true">
                        </div>


                    </div>
                    <div id="fun-resultado"></div>

                </form>
                <div class="modal-footer">
                    <button id="fun-fechar" type="button" class="btn btn-outline-secondary" data-dismiss="modal">Fechar</button>
                    <button id="fun-salvar" type="submit" class="btn btn-outline-success">Cadastrar</button>

                </div>

            </div>
        </div>
    </div>
</div>
<!--MODAL MENSALIDADE-->
<div class="modal fade" id="cadastroMensalidades" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="TituloModalCentralizado">Cadastrar Mensalidade</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form id="men-formulario">
                    <div class="form-group">
                        <input type="hidden" name="men-id" id="id">
                        <select id="men-nome_aluno" name="nome_aluno" class="form-control form-control-sm mb-2 mr-1 pr-3" required="" aria-required="true">
                            <option value="">Aluno:</option>
                            <?php 
                                $resultado_alunos = "SELECT * FROM alunos";
                                $sql = mysqli_query($conn,$resultado_alunos);
                                while ($row_alunos = mysqli_fetch_assoc($sql)) {
					       ?>
                            <option value="<?php echo $row_alunos['nome']; ?>">
                                <?php echo $row_alunos['nome']; ?>
                            </option>
                            <?php 
                            }
                        ?>
                        </select>

                        <div class="form-inline">
                            <select id="men-mes" name="mes" class="form-control form-control-sm mb-2 mr-1 pr-3" required="" aria-required="true">
                                <option value="">Mês:</option>
                                <option value="Janeiro">Janeiro</option>
                                <option Value="Fevereiro">Fevereiro</option>
                                <option Value="Março">Março</option>
                                <option Value="Abril">Abril</option>
                                <option Value="Maio">Maio</option>
                                <option Value="Junho">Junho</option>
                                <option Value="Julho">Julho</option>
                                <option Value="Agosto">Agosto</option>
                                <option Value="Setembro">Setembro</option>
                                <option Value="Outubro">Outubro</option>
                                <option Value="Novembro">Novembro</option>
                                <option Value="Dezembro">Dezembro</option>
                            </select>
                            <select id="men-mod_turma" name="mod_turma" class="form-control form-control-sm mb-2 mr-1 pr-3" required="" aria-required="true">
                                <option value="">Modalidade:</option>
                                <?php 
                                $resultado_modalidades = "SELECT * FROM modalidades";
                                $sql = mysqli_query($conn,$resultado_modalidades);
                                while ($row_modalidades = mysqli_fetch_assoc($sql)) {
					       ?>
                                <option value="<?php echo $row_modalidades['nome']; ?>">
                                    <?php echo $row_modalidades['nome']; ?>
                                </option>
                                <?php 
                            }
                        ?>
                            </select>
                            <select id="men-status" name="status" class="form-control form-control-sm mb-2 mr-1 pr-3" required="" aria-required="true">
                                <option value="">Status:</option>
                                <option value="Pago">Pago</option>
                                <option Value="Não Pago">Não Pago</option>
                            </select>
                        </div>



                    </div>
                    <div id="men-resultado"></div>

                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Fechar</button>
                    <button id="men-salvar" type="submit" class="btn btn-outline-success">Cadastrar</button>

                </div>

            </div>
        </div>
    </div>
</div>
<!--MODAL INTERESSADOS-->
<div class="modal fade" id="editarInteressados" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="TituloModalCentralizado">Interessados</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="ed-formulario">
                    <div class="form-group">
                        <input type="hidden" name="id" id="ed-id">
                        <input name="nome" type="text" disabled class="form-control-sm form-control mb-2" id="ed-nome" placeholder="Nome Completo" required="" aria-required="true">
                        <input name="email" type="text" disabled class="form-control-sm form-control mb-2" id="ed-email" placeholder="Nome Completo" required="" aria-required="true">
                        <input name="telefone" type="text" disabled class="form-control-sm form-control mb-2" id="ed-telefone" placeholder="Telefone" required="" aria-required="true" style="width: 300px;">
                        <textarea id="ed-descricao" name="descricao" disabled class="form-control-sm form-control mb-2" id="exampleFormControlTextarea1" rows="3" placeholder="Anamnese" required="" aria-required="true"></textarea>
                    </div>
                    <div id="ed-resultado"></div>
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Fechar</button>
                    <button id="excluir" type="submit" class="btn btn-outline-danger">Excluir</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    //MODAL ALUNO
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


        function limpa_formulário_cep() {
            // Limpa valores do formulário de cep.
            $("#endereco").val("");
        }
        //Quando o campo cep perde o foco.
        $("#cep").blur(function() {

            //Nova variável "cep" somente com dígitos.
            var cep = $(this).val().replace(/\D/g, '');

            //Verifica se campo cep possui valor informado.
            if (cep != "") {

                //Expressão regular para validar o CEP.
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
    //MODAL FUNCIONARIO
    $("#fun-fechar").click(function() {
        $("#fun-formulario input").val("");
        $("#fun-formulario textarea").val("");
        $("#fun-formulario input").prop('checked', false);
    });
    $("#fun-salvar").click(function() {
        if ($('#fun-nome').val() == '' || $('#fun-cpf').val() == '' || $('#fun-idade').val() == '' || $('#fun-cep').val() == '' || $('#fun-endereco').val() == '' || $('#fun-telefone').val() == '' || $('#fun-username').val() == '' || $('#fun-sexo').val() == 'Sexo:' || $('#fun-email').val() == '' || $('#fun-senha').val() == '' || $('#fun-conf-senha').val() == '' || $('#fun-senha').val() != $('#fun-conf-senha').val()) {

            var resultado = "Insira todos os dados!";

            if ($('#fun-nome').val() == '') {
                $('#fun-nome').css({
                    'border-color': 'red'
                });
            };
            if ($('#fun-cpf').val() == '') {
                $('#fun-cpf').css({
                    'border-color': 'red'
                });
            };
            if ($('#fun-idade').val() == '') {
                $('#fun-idade').css({
                    'border-color': 'red'
                });
            };
            if ($('#fun-sexo').val() == 'Sexo:') {
                $('#fun-sexo').css({
                    'border-color': 'red'
                });
            };
            if ($('#fun-cep').val() == '') {
                $('#fun-cep').css({
                    'border-color': 'red'
                });
            };
            if ($('#fun-endereco').val() == '') {
                $('#fun-endereco').css({
                    'border-color': 'red'
                });
            };
            if ($('#fun-telefone').val() == '') {
                $('#fun-telefone').css({
                    'border-color': 'red'
                });
            };
            if ($('#fun-username').val() == '') {
                $('#fun-username').css({
                    'border-color': 'red'
                });
            };
            if ($('#fun-email').val() == '') {
                $('#fun-email').css({
                    'border-color': 'red'
                });
            };
            if ($('#fun-senha').val() == '') {
                $('#fun-senha').css({
                    'border-color': 'red'
                });
            };
            if ($('#fun-conf-senha').val() == '') {
                $('#fun-conf-senha').css({
                    'border-color': 'red'
                });
            };
            if ($('#fun-senha').val() != $('#conf-senha').val()) {
                $('#fun-senha').css({
                    'border-color': 'red'
                });
                $('#fun-conf-senha').css({
                    'border-color': 'red'
                });
                resultado = "As Senhas não Conferem!";
            }


            $('#resultado').html(resultado);
        } else {
            //alert('teste');
            var id = $("#fun-id").val();
            var nome = $('#fun-nome').val();
            var cpf = $('#fun-cpf').val();
            var idade = $('#fun-idade').val();
            var sexo = $('#fun-sexo').val();
            var email = $('#fun-email').val();
            var cep = $('#fun-cep').val();
            var endereco = $('#fun-endereco').val();
            var telefone = $('#fun-telefone').val();
            var username = $('#fun-username').val();
            var email = $("#fun-email").val();
            var senha = $('#fun-senha').val();
            var url = 'php/func_editarFunc.php?&nome=' + nome + '&cpf=' + cpf + '&idade=' + idade + '&sexo=' + sexo + '&email=' + email + '&cep=' + cep + '&endereco=' + endereco + '&telefone=' + telefone + '&username=' + username + '&email=' + email + '&senha=' + senha;
            //alert(url);

            $.get(url, function(dataReturn) {
                $('#fun-resultado').html(dataReturn);

            });

        }

    });
    $(document).ready(function() {


        function limpa_formulário_cep() {
            // Limpa valores do formulário de cep.
            $("#fun-endereco").val("");
        }
        //Quando o campo cep perde o foco.
        $("#fun-cep").blur(function() {

            //Nova variável "cep" somente com dígitos.
            var cep = $(this).val().replace(/\D/g, '');

            //Verifica se campo cep possui valor informado.
            if (cep != "") {

                //Expressão regular para validar o CEP.
                var validacep = /^[0-9]{8}$/;

                //Valida o formato do CEP.
                if (validacep.test(cep)) {

                    //Preenche os campos com "..." enquanto consulta webservice.
                    $("#fun-endereco").val("...");
                    //Consulta o webservice viacep.com.br/
                    $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function(dados) {

                        if (!("erro" in dados)) {
                            //Atualiza os campos com os valores da consulta.
                            $("#fun-endereco").val('Rua: ' + dados.logradouro + ' Bairro: ' + dados.bairro + ' ' + dados.localidade + ' - ' + dados.uf);

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
    //MODAL MENSALIDADE
    $("#men-fechar").click(function() {
        $("#men-formulario input").val("");
        $("#men-formulario textarea").val("");
        $("#men-formulario input").prop('checked', false);
    });
    $("#men-salvar").click(function() {
        if ($('#men-nome_aluno').val() == '' || $('#men-mes').val() == '' || $('#men-mod_turma').val() == '' || $('#men-status').val() == '') {

            var resultado = "Insira todos os dados!";
            //alert($('#nome').val());
            if ($('#men-nome_aluno').val() == '') {
                $('#men-nome_aluno').css({
                    'border-color': 'red'
                });
            };
            if ($('#men-mes').val() == '') {
                $('#men-mes').css({
                    'border-color': 'red'
                });
            };
            if ($('#men-mod_turma').val() == '') {
                $('#men-mod_turma').css({
                    'border-color': 'red'
                });
            };
            if ($('#men-status').val() == '') {
                $('#men-status').css({
                    'border-color': 'red'
                });
            };

            $('#men-resultado').html(resultado);
        } else {
            //alert('teste');
            var id = $("#men-id").val();
            var nome_aluno = $('#men-nome_aluno').val();
            var mes = $('#men-mes').val();
            var mod_turma = $('#men-mod_turma').val();
            var status = $('#men-status').val();

            var url = 'php/func_editarMensalidades.php?&nome_aluno=' + nome_aluno + '&mes=' + mes + '&mod_turma=' + mod_turma + '&status=' + status;
            //alert(url);

            $.get(url, function(dataReturn) {
                $('#men-resultado').html(dataReturn);

            });

        }

    });
    //MODAL INTERESSADOS
    $("#excluir").click(function() {
        var id = $("#ed-id").val();
        var url = 'php/func_editarInteressados.php?&id=' + id;
        $.get(url, function(dataReturn) {
            $("#ed-resultado").html(dataReturn);
        });
        $(function() {
            $("#ed-formulario input").val("");
            $("#ed-formulario textarea").val("");
            $("#ed-formulario input").prop('checked', false);
        });
    });
    $('#editarInteressados').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget); // Botão que acionou o modal
        var id = button.data('id'); // Extrai informação dos atributos data-*
        var nome = button.data('nome');
        var email = button.data('email');
        var telefone = button.data('telefone');
        var descricao = button.data('descricao');
        var modal = $(this);

        modal.find('#ed-id').val(id);
        modal.find('#ed-nome').val(nome);
        modal.find('#ed-email').val(email);
        modal.find('#ed-telefone').val(telefone);
        modal.find('#ed-descricao').val(descricao);

    });

</script>
