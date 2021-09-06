<!DOCTYPE html>
<html lang="pt">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Projeto de Conclcusão de Curso SESI SENAI BETIM MG ">
    <meta name="author" content="Davi Silva Dias/ Diego H Paixao Sousa/ Fabio R Alves de Oliveira/ Jhonata Amaral/ Nikolas Ribeiro ">

    <title>Sistema de Gerenciamento para Micro Empresas | OS Gerenciamento</title>


    <!-- Style da Sidebar -->
    <link href="php/css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" href="php/css/style.css">
    <link rel="stylesheet" href="php/css/style3.css">
    <link rel="stylesheet" href="php/css/hover.css">
    <link href="php/css/bootstrap/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="php/css/icono.min.css">
    <script type="text/javascript" src="php/js/jquery/jquery.js"></script>
    <script src="php/js/pooper.min.js"></script>
    <script src="php/js/bootstrap/bootstrap.bundle.js"></script>
    <script src="php/js/jquery/jquery.mask.min.js"></script>
    <!--    <script src="php/js/validator.js"></script>-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="php/css/bootstrap/cssfadicao.css">
    <link rel="stylesheet" href="php/css/bootstrap/style4.css">
    <link rel="stylesheet" href="php/fa/css/all.min.css">
    <link rel="shortcut icon" type="text/css" href="php/img/logo.png">





</head>

<body style="background-color:#DCDCDC">

    <div class="d-flex" id="wrapper">

        <nav id="sidebar">
            <div class="sidebar-header">
                <a href="inicial.php" data-toggle="">
                    <h3>OS Gerenciamento</h3>
                </a>
                <a href="inicial.php" data-toggle="">
                    <strong>OS</strong>
                </a>
                <hr />
                <a href="#perfil" data-toggle="collapse">
                    <i class="fas fa-user" style="margin-right:1vh; margin-left:1vh;"></i> Olá, Fabio Alves
                </a>
            </div>

            <ul class="list-unstyled components">
                <li class="">
                    <a href="#" id="btnclientes" aria-expanded="false" class="  ">
                        <i class="fas fa-users"></i>
                        Cliente
                    </a>


                </li>
                <li>
                    <a href="#" data-toggle="collapse" id="btnfuncionarios" aria-expanded="false">
                        <i class="fas fa-users"></i>
                        Fucionário
                    </a>
                    <a href="#" data-toggle="collapse" id="btnOs" aria-expanded="false">
                        <i class="fas fa-laptop"></i>
                        Ordem de Serviço
                    </a>

                </li>
                <li>
                    <a href="#" data-toggle="collapse" id="btnfinanceiro" aria-expanded="false">
                        <i class="fas fa-money"></i>
                        Financeiro
                    </a>
                </li>

            </ul>


        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-light">
                        <i class="fas fa-angle-double-left"></i>
                        <span></span>
                    </button>


                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <div class="dropdown dropleft">
                                <button class="btn btn-light" type="button" data-toggle="dropdown">
                                    <i class="fa fa-power-off" style="margin-right: 1vh;"></i>Sair
                                </button>
                            </div>
                        </ul>
                    </div>
                </div>
            </nav>


            <div id="page-content-wrapper">


                <!--Conteudo-->
                <div id="conteudo">
                    <div class="contaniner animado">
                        <div class="row">


                            <a href="#" style="color: black;">
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <!--BOTAO CLIENTES-->
                                    <?php require_once 'php/modCadastroCliente.php'; ?>
                                    <div id="ARbtnCliente" class="info-box" data-toggle="modal" data-target="#cadastroCliente">
                                        <span class="info-box-icon " style="background-color:#00BFFF;"><i class="fa fa-users" style="color:#FFFFFF"></i></span>
                                        <div class="info-box-content">
                                            <span class=" info-box-number">Clientes</span>
                                            <span class="info-box-text">Novo Cliente</span>
                                        </div>

                                        <!-- /.info-box-content -->

                                    </div>
                                    <!-- /.info-box -->
                                </div>
                            </a>
                            <!-- /.col -->
                            <a href="#" style="color: black;">
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <!--BOTAO FUNCIONARIOS-->
                                    <?php require_once 'php/modCadastroFunc.php'; ?>
                                    <div id="ARbtnFuncionarios" class="info-box" data-toggle="modal" data-target="#cadastroFunc">
                                        <span class="info-box-icon" style="background-color:#DC143C;"><i class="fa fa-users" style="color:#FFFFFF"></i></span>
                                        <div class="info-box-content">
                                            <span class="info-box-number">Funcionários</span>
                                            <span class="info-box-text">Novo Funcionário</span>
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                    <!-- /.info-box -->
                                </div>
                            </a>
                            <!-- /.col -->

                            <!-- fix for small devices only -->
                            <div class="clearfix visible-sm-block"></div>
                            <a href="#" style="color: black;">
                                <div class="col-md-3 col-sm-3 col-xs-3">

                                    <!--BOTAO ORDEM DE SERVICO-->
                                    <?php require_once 'php/modCadastroOS.php'; ?>
                                    <div id="ARbtnOrdem" class="info-box" data-toggle="modal" data-target="#cadastroOS">
                                        <span class="info-box-icon" style="background-color:#28a745;"><i class="fa fa-laptop" style="color:#FFFFFF"></i></span>

                                        <div class="info-box-content">
                                            <span class="info-box-number">Ordem de Serviço</span>
                                            <span class="info-box-text">Nova OS</span>
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                    <!-- /.info-box -->
                                </div>
                            </a>
                            <!-- /.col -->
                            <a href="#l" style="color: black;">
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <!--BOTAO FINANCEIRO-->
                                    <?php require_once 'php/modMovCaixa.php'; ?>
                                    <div id="ARbtnFinanceiro" class="info-box" data-toggle="modal" data-target="#movCaixa">
                                        <span class="info-box-icon" style="background-color:#FFD700;"><i class="fa fa-money" style="color:#FFFFFF"></i></span>

                                        <div class="info-box-content">
                                            <span class="info-box-number">Financeiro</span>
                                            <span class="info-box-text">Nova movimentação</span>
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                    <!-- /.info-box -->
                                </div>
                            </a>
                            <!-- /.col -->

                        </div>
                        <!-- /.row -->


                        <div class="row">
                            <div class="box box-info">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Ordens de Serviços Abertas</h3>

                                    <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-toggle="collapse" href="#collapseosaberta" role="button" aria-expanded="false" aria-controls="collapseosaberta"><i class="fa fa-minus"></i>
                                        </button>

                                    </div>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div id="tabelaOSAbertoInicial" class="table-responsive">
                                        <table class="table no-margin collapse show" id="collapseosaberta">
                                            <thead>
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Cliente</th>
                                                    <th scope="col">Situação</th>
                                                    <th id="Coluna_aparelho" scope="col">Aparelho</th>
                                                    <th scope="col">Data de Emissão</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php  
                                                       require_once 'php/dbconexao.php';

                                                        $sql  = "Select * ";
                                                        $sql .= "from ordem where situacao = 'Em Aberto' ";
                                                        $sql .= "order by id desc;";
                                                        $seleciona = mysqli_query($conn, $sql);
                                                        $rows = mysqli_num_rows($seleciona);
                                                        
                                                        if($rows <= 0 ){
                                                            echo "Nenhuma Ordem em aberto!";
                                                        }else{
                                                            //A função mysqli_fetch_array() retorna os registros do SELECT que estão na variável $seleciona em uma estrutura de ARRAY
                                                            while ($campo = mysqli_fetch_array($seleciona)){ 

                                                                echo '<tr id="'.$campo['id'].'" class="linha pointer" data-toggle="modal" data-target="#ed-cadastroOS" 
                                                                    data-id="'.$campo['id'].'"
                                                                    data-id-cliente="'.$campo['id_cliente'].'"
                                                                    data-cliente="'.$campo['cliente'].'" 
                                                                    data-aparelho="'.$campo['aparelho'].'" 
                                                                    data-defeito="'.$campo['defeito'].'"
                                                                    data-situacao="'.$campo['situacao'].'" 
                                                                    data-relatorio="'.$campo['relatorio'].'"
                                                                    data-valor="'.$campo['valor'].'" 
                                                                    data-data_aber="'.$campo['data_aber'].'" 
                                                                    data-data_concl="'.$campo['data_concl'].'"">';
                                                                echo '  <td id="id1" value="1">' . $campo['id'] . '</td>';
                                                                echo '  <td>' . $campo['cliente'] . '</td>';
                                                                echo '  <td>' . $campo['situacao'] . '</td>';
                                                                echo '  <td><div id="div2">' . $campo['aparelho'] . '</div></td>';
                                                                echo '  <td>' . $campo['data_aber'] . '</td>';
                                                                echo '</tr>';	
                                                            };
                                                        };
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                            </div>
                            <!--/.box info -->
                        </div>
                        <!--/.row -->
                        <div class="row">
                            <div class="box box-info">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Ordens de Serviços Aprovadas </h3>

                                    <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-toggle="collapse" href="#collapseosaguardaprov" role="button" aria-expanded="false" aria-controls="collapseosaguardaprov"><i class="fa fa-minus"></i>
                                        </button>

                                    </div>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div id="tabelaOSAprovadoInicial" class="table-responsive">
                                        <table class="table no-margin collapse show" id="collapseosaguardaprov">
                                            <thead>
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Cliente</th>
                                                    <th scope="col">Situação</th>
                                                    <th id="Coluna_aparelho" scope="col">Aparelho</th>
                                                    <th scope="col">Data de Emissão</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php  

                                                        $sql2  = "Select * ";
                                                        $sql2 .= "from ordem where situacao = 'Aprovado' ";
                                                        $sql2 .= "order by id desc;";
                                                        $seleciona2 = mysqli_query($conn, $sql2);
                                                        $rows2 = mysqli_num_rows($seleciona);
                                                        
                                                        if($rows2 <= 0 ){
                                                            echo "Nenhuma Ordem em aberto!";
                                                        }else{
                                                            //A função mysqli_fetch_array() retorna os registros do SELECT que estão na variável $seleciona em uma estrutura de ARRAY
                                                            while ($campo2 = mysqli_fetch_array($seleciona2)){ 

                                                                echo '<tr id="'.$campo2['id'].'" class="linha pointer" data-toggle="modal" data-target="#ed-cadastroOS" 
                                                                    data-id="'.$campo2['id'].'"
                                                                    data-id-cliente="'.$campo2['id_cliente'].'"
                                                                    data-cliente="'.$campo2['cliente'].'" 
                                                                    data-aparelho="'.$campo2['aparelho'].'" 
                                                                    data-defeito="'.$campo2['defeito'].'"
                                                                    data-situacao="'.$campo2['situacao'].'" 
                                                                    data-relatorio="'.$campo2['relatorio'].'"
                                                                    data-valor="'.$campo2['valor'].'" 
                                                                    data-data_aber="'.$campo2['data_aber'].'" 
                                                                    data-data_concl="'.$campo2['data_concl'].'"">';
                                                                echo '  <td id="id1" value="1">' . $campo2['id'] . '</td>';
                                                                echo '  <td>' . $campo2['cliente'] . '</td>';
                                                                echo '  <td>' . $campo2['situacao'] . '</td>';
                                                                echo '  <td><div id="div2">' . $campo2['aparelho'] . '</div></td>';
                                                                echo '  <td>' . $campo2['data_aber'] . '</td>';
                                                                echo '</tr>';	
                                                            };
                                                        };
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                            </div>
                            <!--/.box info -->
                        </div>
                        <!--/.row -->




                        <div class="">
                            <table class="table">



                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>




    <script>
        $(document).ready(function() {
            $(".animado").css({
                "opacity": '1'
            });
        });
        //Função retrair menu
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
        //Clientes
        $("#btnclientes").click(function() {
            var url = 'php/clientes.php';
            $.get(url, function(dataReturn) {
                $("#conteudo").html(dataReturn);
            });

        });
        //Funcionarios
        $("#btnfuncionarios").click(function() {
            var url = 'php/funcionarios.php';
            $.get(url, function(dataReturn) {
                $("#conteudo").html(dataReturn);
            });
        });
        //Ordem de Serviço
        $("#btnOs").click(function() {
            var url = 'php/os.php';
            $.get(url, function(dataReturn) {
                $("#conteudo").html(dataReturn);
            });
        });
        //Financeiro
        $("#btnfinanceiro").click(function() {
            var url = 'php/financeiro.php';
            $.get(url, function(dataReturn) {
                $("#conteudo").html(dataReturn);
            });
        });
        
            $('#ed-cadastroOS').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget); // Botão que acionou o modal
        var id = button.data('id'); // Extrai informação dos atributos data-*
        var cliente = button.data('cliente');
        var id_cliente = button.data('id-cliente');
        var aparelho = button.data('aparelho');
        var defeito = button.data('defeito');
        var situacao = button.data('situacao');
        var relatorio = button.data('relatorio');
        var valor = button.data('valor');
        var data_aber = button.data('data_aber');
        var data_concl = button.data('data_concl');

        var modal = $(this);
        modal.find('#ed-os-id').val(id);
        modal.find('#ed-os-nome').val(cliente);
        modal.find('#ed-os-id-cliente').val(id_cliente);
        modal.find('#ed-os-aparelho').val(aparelho);
        modal.find('#ed-os-defeito').val(defeito);
        modal.find('#ed-situacao').val(situacao);
        modal.find('#ed-os-relatorio').val(relatorio);
        modal.find('#ed-os-valor').val(valor);
        modal.find("#ed-data_aber").val(data_aber);
        modal.find('#ed-data_concl').val(data_concl);
        var url = "php/pesquisaEnderecoOS.php?id=" + id_cliente + "&tabela=cliente";
        $.get(url, function(dataReturn) {
            modal.find('#ed-os-dadosCliente').html(dataReturn);
        });


        if (situacao == "Concluido") {
            $("#ed-os-nome").prop("readonly", true);
            $("#ed-os-aparelho").prop("readonly", true);
            $("#ed-os-defeito").prop("readonly", true);
            $("#ed-os-situacao").prop("disabled", true);
            $("#ed-os-relatorio").prop("readonly", true);
            $("#ed-os-valor").prop("readonly", true);
            $("#salvar").prop("disabled", true);
        };

    });
//    $("#ed-cadastroOS").on('hidden.bs.modal', function(event) {
//        var url = 'php/os.php';
//        $.get(url, function(dataReturn) {
//            $("#conteudo").html(dataReturn);
//        });
//    });
//    $("#cadastroOS").on('hidden.bs.modal', function(event) {
//        var url = 'php/os.php';
//        $.get(url, function(dataReturn) {
//            $("#conteudo").html(dataReturn);
//        });
//    });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
            });
        });

    </script>

</body>

</html>
