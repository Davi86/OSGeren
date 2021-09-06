<!--
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="js/jquery/jquery.js"></script>
    <script src="js/jquery/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">

</head>
-->
<!--MODAL CADASTRAR-->
<div class="modal fade" id="cadastroModal" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-md" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="TituloModalCentralizado">Cadastrar Modalidade</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">

            <form id="formulario">
                <div class="form-group">
                    <input type="hidden" name="id" id="id">
                    <input name="nome" type="text" class="form-control-sm form-control mb-2" id="nome" placeholder="Nome da Modalidade" required="" aria-required="true">
                    <div class="form-inline">
                        <input name="num_alunos" type="text" class="form-control-sm form-control  mb-2 mr-1" id="num_alunos" placeholder="Num de Alunos" required="" aria-required="true" style="width:155px;">
                        <select id="num_dias" name="dias_semana" class="form-control form-control-sm mb-2 mr-1 pr-3" required="" aria-required="true">
                            <option value="num_dias">Num. Dias:</option>
                            <option value=" 1">1</option>
                            <option Value=" 2">2</option>
                            <option Value=" 3">3</option>
                            <option Value=" 4">4</option>
                            <option Value=" 5">5</option>
                            <option Value=" 6">6</option>
                        </select>
                        <label class="mb-2" for="valor">R$</label><input name="valor" type="text" class="form-control form-control-sm  mb-2 " id="valor" placeholder="valor" required="" aria-required="true">
                    </div>



                </div>
                <div id="resultado"></div>

            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Fechar</button>
                <button id="salvar" type="submit" class="btn btn-outline-success">Cadastrar</button>

            </div>

        </div>
    </div>
</div>
</div>
<!--MODAL EDITAR-->
<div class="modal fade" id="editarModal" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="TituloModalCentralizado">Editar cadastro de Modalidade</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form id="formulario">
                    <div class="form-group">
                        <input type="hidden" name="id" id="ed-id">
                        <input name="nome" type="text" class="form-control-sm form-control mb-2" id="ed-nome" placeholder="Nome da Modalidade" required="" aria-required="true">
                        <div class="form-inline">
                            <input name="num_alunos" type="text" class="form-control-sm form-control  mb-2 mr-1" id="ed-num_alunos" placeholder="Num de Alunos" required="" aria-required="true"style="width:155px;">
                            <select id="ed-num_dias" name="num_dias" class="form-control form-control-sm mb-2 mr-1 pr-3" required="" aria-required="true">
                                <option value="num_dias">Num. Dias:</option>
                                <option value="1">1</option>
                                <option Value="2">2</option>
                                <option Value="3">3</option>
                                <option Value="4">4</option>
                                <option Value="5">5</option>
                                <option Value="6">6</option>
                            </select>
                            <label class="mb-2" for="ed-valor">R$</label><input name="valor" type="text" class="form-control form-control-sm  mb-2 " id="ed-valor" placeholder="valor" required="" aria-required="true">
                        </div>
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
    $("#valor").mask('#.##0,00',{reverse:true});
    $("#salvar").click(function() {
        if ($('#nome').val() == '' || $('#num_alunos').val() == '' || $('#num_dias').val() == 'num_dias' || $('#valor').val() == '') {

            var resultado = "Insira todos os dados!";

            if ($('#nome').val() == '') {
                $('#nome').css({
                    'border-color': 'red'
                });
            };
            if ($('#num_alunos').val() == '') {
                $('#num_alunos').css({
                    'border-color': 'red'
                });
            };
            if ($('#valor').val() == '') {
                $('#valor').css({
                    'border-color': 'red'
                });
            };
            if ($('#num_dias').val() == 'num_dias') {
                $('#num_dias').css({
                    'border-color': 'red'
                });
            };

            $('#resultado').html(resultado);
        } else {
            //alert('teste');
            var id = $("#id").val();
            var nome = $('#nome').val();
            var num_alunos = $('#num_alunos').val();
            var valor = $('#valor').val();
            var num_dias = $('#num_dias').val();

            var url = 'php/func_editarModal.php?&nome=' + nome + '&num_alunos=' + num_alunos + '&num_dias=' + num_dias + '&valor=' + valor;
            //alert(url);

            $.get(url, function(dataReturn) {
                $('#resultado').html(dataReturn);

            });

        }

    });

    //MODAL EDITAR
    $("#ed-valor").mask('#.##0,00',{reverse:true});
    $("#editar").click(function() {
        if ($('#ed-nome').val() == '' || $('#ed-num_alunos').val() == '' || $('#ed-num_dias').val() == 'num_dias' || $('#ed-valor').val() == '') {

            var resultado = "Insira todos os dados!";

            if ($('#ed-nome').val() == '') {
                $('#ed-nome').css({
                    'border-color': 'red'
                });
            };
            if ($('#ed-num_alunos').val() == '') {
                $('#ed-num_alunos').css({
                    'border-color': 'red'
                });
            };
            if ($('#ed-valor').val() == '') {
                $('#ed-valor').css({
                    'border-color': 'red'
                });
            };
            if ($('#ed-num_dias').val() == 'num_dias') {
                $('#ed-num_dias').css({
                    'border-color': 'red'
                });
            };

            $('#ed-resultado').html(resultado);
        } else {
            //alert('teste');
            var id = $("#ed-id").val();
            var nome = $('#ed-nome').val();
            nome = $.trim(nome);
            var num_alunos = $('#ed-num_alunos').val();
            var valor = $('#ed-valor').val();
            var num_dias = $('#ed-num_dias').val();
            num_dias = $.trim(num_dias);
            var url = 'php/func_editarModal.php?&id='+ id +'&nome=' + nome + '&num_alunos=' + num_alunos + '&num_dias=' + num_dias + '&valor=' + valor;
            //alert(url);

            $.get(url, function(dataReturn) {
                $('#ed-resultado').html(dataReturn);

            });

        }

    });
    $("#excluir").click(function() {
        var id = $("#ed-id").val();
        var url = 'php/func_editarModal.php?&id=' + id;
        $.get(url, function(dataReturn) {
            $("#ed-resultado").html(dataReturn);
        });
        //LIMPA CAMPOS
        $(function() {
            $("#ed-formulario input").val("");
            $("#ed-formulario textarea").val("");
            $("#ed-formulario input").prop('checked', false);
        });
    });

</script>
