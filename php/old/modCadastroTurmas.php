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
<div class="modal fade" id="cadastroTurmas" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="TituloModalCentralizado">Cadastrar Turma</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form id="formulario">
                    <div class="form-group">
                        <input type="hidden" name="id" id="id">
                        <input name="nome" type="text" class="form-control-sm form-control mb-2" id="nome" placeholder="Nome da Turma" required="" aria-required="true">
                        <div class="form-inline">
                            <select id="turno" name="turno" class="form-control form-control-sm mb-2 mr-1 pr-3" required="" aria-required="true">
                                <option value="">Turno:</option>
                                <option value="Manhã">Manhã</option>
                                <option Value="Tarde">Tarde</option>
                                <option Value="Noite">Noite</option>
                            </select>
                            <select id="mod_turma" name="mod_turma" class="form-control form-control-sm mb-2 mr-1 pr-3" required="" aria-required="true">
                                <option value="">Modalidade:</option>
                                <?php 
                                $resultado_modalidades = "SELECT * FROM modalidades";
                                $sql = mysqli_query($conn,$resultado_modalidades);
                                while ($row_modalidades = mysqli_fetch_assoc($sql)) {
					       ?>
                                <option value="<?php echo $row_modalidades['id']; ?>">
                                    <?php echo $row_modalidades['nome']; ?>
                                </option>
                                <?php 
                            }
                        ?>
                            </select>
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
<div class="modal fade" id="editarTurmas" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="TituloModalCentralizado">Editar cadastro de Modalidade</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form id="ed-formulario">
                    <div class="form-group">
                        <input type="hidden" name="id" id="ed-id">
                        <input name="nome" type="text" class="form-control-sm form-control mb-2" id="ed-nome" placeholder="Nome da Turma" required="" aria-required="true">
                        <div class="form-inline">
                            <select id="ed-turno" name="turno" class="form-control form-control-sm mb-2 mr-1 pr-3" required="" aria-required="true">
                                <option value="">Turno:</option>
                                <option value="Manhã">Manhã</option>
                                <option Value="Tarde">Tarde</option>
                                <option Value="Noite">Noite</option>
                            </select>
                            <select id="ed-mod_turma" name="mod_turma" class="form-control form-control-sm mb-2 mr-1 pr-3" required="" aria-required="true">
                                <option value="">Modalidade:</option>
                                <?php 
                                $resultado_modalidades = "SELECT * FROM modalidades";
                                $sql = mysqli_query($conn,$resultado_modalidades);
                                while ($row_modalidades = mysqli_fetch_assoc($sql)) {
					       ?>
                                <option value="<?php echo $row_modalidades['id']; ?>">
                                    <?php echo $row_modalidades['nome']; ?>
                                </option>
                                <?php 
                            }
                        ?>
                            </select>
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
    $("#salvar").click(function() {
        if ($('#nome').val() == '' || $('#turno').val() == '' || $('#mod_turma').val() == '') {

            var resultado = "Insira todos os dados!";
            //alert($('#nome').val());
            if ($('#nome').val() == '') {
                $('#nome').css({
                    'border-color': 'red'
                });
            };
            if ($('#turno').val() == '') {
                $('#turno').css({
                    'border-color': 'red'
                });
            };
            if ($('#mod_turma').val() == '') {
                $('#mod_turma').css({
                    'border-color': 'red'
                });
            };

            $('#resultado').html(resultado);
        } else {
            //alert('teste');
            var id = $("#id").val();
            var nome = $('#nome').val();
            var turno = $('#turno').val();
            var mod_turma = $('#mod_turma').val();


            var url = 'php/func_editarTurmas.php?&nome=' + nome + '&turno=' + turno + '&mod_turma=' + mod_turma;
            //alert(url);

            $.get(url, function(dataReturn) {
                $('#resultado').html(dataReturn);

            });

        }

    });

    //MODAL EDITAR
    $("#editar").click(function() {
        if ($('#ed-nome').val() == '' || $('#ed-turno').val() == '' || $('#ed-mod_turma').val() == '') {

            var resultado = "Insira todos os dados!";

            if ($('#ed-nome').val() == '') {
                $('#ed-nome').css({
                    'border-color': 'red'
                });
            };
            if ($('#ed-turno').val() == '') {
                $('#ed-turno').css({
                    'border-color': 'red'
                });
            };
            if ($('#ed-mod_turma').val() == '') {
                $('#ed-mod_turma').css({
                    'border-color': 'red'
                });
            };

            $('#ed-resultado').html(resultado);
        } else {
            //alert('teste');
            var id = $("#ed-id").val();
            var nome = $('#ed-nome').val();
            var turno = $('#ed-turno').val();
            var mod_turma = $('#ed-mod_turma').val();


            var url = 'php/func_editarTurmas.php?&id=' + id + '&nome=' + nome + '&turno=' + turno + '&mod_turma=' + mod_turma;
            alert(url);

            $.get(url, function(dataReturn) {
                $('#ed-resultado').html(dataReturn);

            });

        }

    });
    $("#excluir").click(function() {
        var id = $("#ed-id").val();
        var url = 'php/func_editarTurmas.php?&id=' + id;
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
