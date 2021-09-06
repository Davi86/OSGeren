<?php



           

            require_once 'dbconexao.php';
            

              $sql  = "Select * ";
              $sql .= "from interessados ";
              $sql .= "order by id;";

              $seleciona = mysqli_query($conn, $sql);
              $rows = mysqli_num_rows($seleciona);



?>
<div class="container animado">
    <h4 class="tituloPagina">Interessados</h4>
    <div class="input-group input-group-md mb-3 pt-3">
        <div class="input-group-prepend">
            <span class="input-group-text mb-2" id="inputGroup-sizing-md">Pesquisar</span>
        </div>
        <input id="pesquisar" type="text" class="form-control mb-2" aria-label="Pesquisar" aria-describedby="Campo de pesquisa" onchange="buscarAlunos()">
        <?php require_once 'modalInteressados.php'; ?>


    </div>

    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Telefone</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody id="conteudoTabela">
            <?php     
 
                  
                    //A função mysqli_fetch_array() retorna os registros do SELECT que estão na variável $seleciona em uma estrutura de ARRAY
                    while ($campo = mysqli_fetch_array($seleciona)){ 
                        echo '<tr id=" '.$campo['id'].' " class="linha pointer" data-toggle="modal" data-target="#editarInteressados" 
                        data-id=" '.$campo['id'].'" 
                        data-nome=" '.$campo['nome'].'" 
                        data-email=" '.$campo['email'].'" 
                        data-telefone=" '.$campo['tel'].'" 
                        data-descricao=" '.$campo['descricao'].' "
                        ">';
                            echo '  <td id="id1 value="1">' . $campo['id'] . '</td>';
                            echo '  <td>' . $campo['nome'] . '</td>';
                            echo '  <td>' . $campo['email'] . '</td>';
                            echo '  <td>' . $campo['tel'] . '</td>';
                        echo '</tr>';	
                    };
        
          
?>
        </tbody>
    </table>
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
        var tabela = "interessados";
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
