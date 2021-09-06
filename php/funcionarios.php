<?php



           

            require_once 'dbconexao.php';
            

              $sql  = "Select * ";
              $sql .= "from funcionario ";
              $sql .= "order by id;";

              $seleciona = mysqli_query($conn, $sql);
              $rows = mysqli_num_rows($seleciona);



?>
<div class="contaniner animado">
    <h4 class="tituloPagina">Funcionários</h4>
    <div class="input-group input-group-md mb-3 pt-3">
        <div class="input-group-prepend">
            <span class="input-group-text mb-2" id="inputGroup-sizing-md">Pesquisar</span>
        </div>
        <input id="pesquisar" type="text" class="form-control mb-2" aria-label="Pesquisar" aria-describedby="Campo de pesquisa" placeholder="Digite o nome do funcionário..." onchange="buscarCliente()">
        <button id="cadastrar" class="btn btn-outline-info mr-5 ml-5 mb-2" data-toggle="modal" data-target="#cadastroFunc">Cadastrar</button>
        <?php require_once 'modCadastroFunc.php'; ?>


    </div>
    <div id="tabelaFuncionarios">
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Usuário</th>
                    <th scope="col">Telefone</th>

            </thead>
            <tbody id="conteudoTabela">
                <?php     
 
                  
                    //A função mysqli_fetch_array() retorna os registros do SELECT que estão na variável $seleciona em uma estrutura de ARRAY
                    while ($campo = mysqli_fetch_array($seleciona)){ 
                        echo '<tr id="'.$campo['id'].'" class="linha pointer" data-toggle="modal" data-target="#editarFunc" 
                            data-id="'.$campo['id'].'" 
                            data-nome="'.$campo['nome'].'" 
                            data-cpf="'.$campo['cpf'].'" 
                            data-cep="'.$campo['cep'].'"
                            data-endereco="'.$campo['endereco'].'" 
                            data-telefone="'.$campo['telefone'].'"
                            data-email="'.$campo['email'].'" 
                            data-username="'.$campo['username'].'" 
                            data-senha="'.$campo['senha'].'"
                            data-conf-senha="'.$campo['senha'].'">';
                        echo '  <td id="id1 value="1">' . $campo['id'] . '</td>';
                        echo '  <td>' . $campo['nome'] . '</td>';
                        echo '  <td>' . $campo['username'] . '</td>';
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
        var tabela = "funcionario";
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

    $('#editarFunc').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget); // Botão que acionou o modal
        var id = button.data('id'); // Extrai informação dos atributos data-*
        var nome = button.data('nome');
        var cpf = button.data('cpf');
        var cep = button.data('cep');
        var endereco = button.data('endereco');
        var telefone = button.data('telefone');
        var email = button.data('email');
        var username = button.data('username');
        var senha = button.data('senha');
        var confsenha = button.data('conf-senha');

        var modal = $(this);
        modal.find('#ed-idFunc').val(id);
        modal.find('#ed-nomeFunc').val(nome);
        modal.find('#ed-cpfFunc').val(cpf);
        modal.find('#ed-cepFunc').val(cep);
        modal.find('#ed-enderecoFunc').val(endereco);
        modal.find('#ed-telefoneFunc').val(telefone);
        modal.find('#ed-emailFunc').val(email);
        modal.find("#ed-usernameFunc").val(username);
        modal.find('#ed-senhaFunc').val(senha);
        modal.find('#ed-conf-senhaFunc').val(confsenha);

    });
    $("#cadastroFunc").on('hidden.bs.modal', function(event) {
        var url = 'php/funcionarios.php';
        $.get(url, function(dataReturn) {
            $("#conteudo").html(dataReturn);
        });
    });
    $("#editarFunc").on('hidden.bs.modal', function(event) {
        var url = 'php/funcionarios.php';
        $.get(url, function(dataReturn) {
            $("#conteudo").html(dataReturn);
        });
    });

</script>
