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

                <form id="formulario">
                    <div class="form-group">
                        <input type="hidden" name="id" id="id">
                        <select id="nome_aluno" name="nome_aluno" class="form-control form-control-sm mb-2 mr-1 pr-3" required="" aria-required="true">
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
                            <select id="mes" name="mes" class="form-control form-control-sm mb-2 mr-1 pr-3" required="" aria-required="true">
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
                            <select id="mod_turma" name="mod_turma" class="form-control form-control-sm mb-2 mr-1 pr-3" required="" aria-required="true">
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
                            <select id="status" name="status" class="form-control form-control-sm mb-2 mr-1 pr-3" required="" aria-required="true">
                                <option value="">Status:</option>
                                <option value="Pago">Pago</option>
                                <option Value="Não Pago">Não Pago</option>
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
<div class="modal fade" id="editarMensalidades" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
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
                        <select id="ed-nome_aluno" name="nome_aluno" class="form-control form-control-sm mb-2 mr-1 pr-3" required="" aria-required="true">
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
                            <select id="ed-mes" name="mes" class="form-control form-control-sm mb-2 mr-1 pr-3" required="" aria-required="true">
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
                            <select id="ed-mod_turma" name="mod_turma" class="form-control form-control-sm mb-2 mr-1 pr-3" required="" aria-required="true">
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
                            <select id="ed-status" name="status" class="form-control form-control-sm mb-2 mr-1 pr-3" required="" aria-required="true">
                                <option value="">Status:</option>
                                <option value="Pago">Pago</option>
                                <option Value="Não Pago">Não Pago</option>
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
        if ($('#nome_aluno').val() == '' || $('#mes').val() == '' || $('#mod_turma').val() == '' || $('#status').val() == '') {

            var resultado = "Insira todos os dados!";
            //alert($('#nome').val());
            if ($('#nome_aluno').val() == '') {
                $('#nome_aluno').css({
                    'border-color': 'red'
                });
            };
            if ($('#mes').val() == '') {
                $('#mes').css({
                    'border-color': 'red'
                });
            };
            if ($('#mod_turma').val() == '') {
                $('#mod_turma').css({
                    'border-color': 'red'
                });
            };
            if ($('#status').val() == '') {
                $('#status').css({
                    'border-color': 'red'
                });
            };

            $('#resultado').html(resultado);
        } else {
            //alert('teste');
            var id = $("#id").val();
            var nome_aluno = $('#nome_aluno').val();
            var mes = $('#mes').val();
            var mod_turma = $('#mod_turma').val();
            var status = $('#status').val();

            var url = 'php/func_editarMensalidades.php?&nome_aluno=' + nome_aluno + '&mes=' + mes + '&mod_turma=' + mod_turma + '&status=' + status;
            //alert(url);

            $.get(url, function(dataReturn) {
                $('#resultado').html(dataReturn);

            });

        }

    });

    //MODAL EDITAR
    $("#editar").click(function() {
        if ($('#ed-nome_aluno').val() == '' || $('#ed-mes').val() == '' || $('#ed-mod_turma').val() == '' || $('#ed-status').val() == '') {

            var resultado = "Insira todos os dados!";

            if ($('#ed-nome_aluno').val() == '') {
                $('#ed-nome_aluno').css({
                    'border-color': 'red'
                });
            };
            if ($('#ed-mes').val() == '') {
                $('#ed-mes').css({
                    'border-color': 'red'
                });
            };
            if ($('#ed-mod_turma').val() == '') {
                $('#ed-mod_turma').css({
                    'border-color': 'red'
                });
            };

            if ($('#ed-status').val() == '') {
                $('#ed-status').css({
                    'border-color': 'red'
                });
            };

            $('#ed-resultado').html(resultado);
        } else {
            //alert('teste');
            var id = $("#ed-id").val();
            var nome_aluno = $('#ed-nome_aluno').val();
            var mes = $('#ed-mes').val();
            var mod_turma = $('#ed-mod_turma').val();
            var status = $('#ed-status').val();


            var url = 'php/func_editarMensalidades.php?&id=' + id + '&nome_aluno=' + nome_aluno + '&mes=' + mes + '&mod_turma=' + mod_turma + '&status=' + status;
            //alert(url);

            $.get(url, function(dataReturn) {
                $('#ed-resultado').html(dataReturn);

            });

        }

    });
    $("#excluir").click(function() {
        var id = $("#ed-id").val();
        var url = 'php/func_editarMensalidades.php?&id=' + id;
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
