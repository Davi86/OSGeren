<?php



           

            require_once 'dbconexao.php';
            

              $sql  = "Select * ";
              $sql .= "from cliente ";
              $sql .= "order by id;";

              $seleciona = mysqli_query($conn, $sql);
              $rows = mysqli_num_rows($seleciona);



?>
<div class="contaniner animado">
    <h4 class="tituloPagina">Clientes</h4>
    <div class="input-group input-group-md mb-3 pt-3">
        <div class="input-group-prepend">
            <span class="input-group-text mb-2" id="inputGroup-sizing-md">Pesquisar</span>
        </div>
        <input id="pesquisar" type="text" class="form-control mb-2" aria-label="Pesquisar" aria-describedby="Campo de pesquisa" placeholder="Digite o nome do funcionário..." onchange="buscarCliente()">
        <button id="cadastrar" class="btn btn-outline-info mr-5 ml-5 mb-2" data-toggle="modal" data-target="#cadastroCliente">Cadastrar</button>
        <?php require_once 'modCadastroCliente.php'; ?>


    </div>
    <div id="tabelaCliente">
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Telefone</th>

            </thead>
            <tbody id="conteudoTabela">
                <?php     
                    //A função mysqli_fetch_array() retorna os registros do SELECT que estão na variável $seleciona em uma estrutura de ARRAY
                    while ($campo = mysqli_fetch_array($seleciona)){ 
                        echo '<tr id=" '.$campo['id'].' " class="linha" data-toggle="modal" data-target="#editarCliente" 
                                data-id="'.$campo['id'].'" 
                                data-nome="'.$campo['nome'].'" 
                                data-cpf="'.$campo['cpf'].'" 
                                data-cep="'.$campo['cep'].'" 
                                data-endereco="'.$campo['endereco'].'"
                                data-telefone="'.$campo['telefone'].'" 
                                data-email="'.$campo['email'].'"
                                data-data_nasc="'.$campo['data_nasc'].'">';
                        echo '  <td id="id1 value="1">' . $campo['id'] . '</td>';
                        echo '  <td>' . $campo['nome'] . '</td>';
                        echo '  <td>' . $campo['cpf'] . '</td>';
                        echo '  <td>' . $campo['telefone'] . '</td>';
                        echo '</tr>';	
                    };
            ?>

            </tbody>
        </table>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $("#pesquisar").focus();
        $(".animado").css({
            "opacity": '1'
        });
    });


    $("#pesquisar").keyup(function() {
        //window.alert("funciona");
        var pesquisa = $(this).val();
        var tabela = "cliente";
        var url = "php/pesquisa.php?palavra=" + pesquisa + "&tabela=" + tabela;
        //alert(url);
        //Verificar se há algo digitado
        if (pesquisa != '') {
            //alert("passou aqui"+ pesquisa + tabela);
            $.get(url, function(dataReturn) {
                $("#conteudoTabela").html(dataReturn);
            });
        } else {
            $(function() {
                $.get(url, function(dataReturn) {
                    $("#conteudoTabela").html(dataReturn);
                });
            });
        }
    });

    $('#editarCliente').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget); // Botão que acionou o modal
        var id = button.data('id'); // Extrai informação dos atributos data-*
        var nome = button.data('nome');
        var cpf = button.data('cpf');
        var cep = button.data('cep');
        var endereco = button.data('endereco');
        var telefone = button.data('telefone');
        var email = button.data('email');
        var data_nasc = button.data('data_nasc');
        var modal = $(this);

        modal.find('#ed-idCliente').val(id);
        modal.find('#ed-nomeCliente').val(nome);
        modal.find('#ed-cpfCliente').val(cpf);
        modal.find('#ed-cepCliente').val(cep);
        modal.find('#ed-enderecoCliente').val(endereco);
        modal.find('#ed-telefoneCliente').val(telefone);
        modal.find('#ed-emailCliente').val(email);
        modal.find('#ed-data_nascCliente').val(data_nasc);

    });
    $("#editarCliente").on('hidden.bs.modal', function(event) {
        var url = 'php/clientes.php';
        $.get(url, function(dataReturn) {
            $("#conteudo").html(dataReturn);
        });
    });
    $("#cadastroCliente").on('hidden.bs.modal', function(event) {
        var url = 'php/clientes.php';
        $.get(url, function(dataReturn) {
            $("#conteudo").html(dataReturn);
        });
    });

</script>
