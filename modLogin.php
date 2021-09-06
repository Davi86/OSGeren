<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="php/css/bootstrap/bootstrap.css" rel="stylesheet">
    <script type="text/javascript" src="php/js/jquery/jquery.js"></script>
    <script src="php/js/pooper.min.js"></script>
    <script src="php/js/bootstrap/bootstrap.bundle.js"></script>
</head>

<body>
 
    <div id="modal-login" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered " role="document" style="width: 335px;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="TituloModalCentralizado">LOGIN</h5>

                </div>
                <div class="modal-body">
                    <form id="ed-formulario" method="post" action="fun_login.php">
                        <div class="form-group">

                            <input name="username" type="text" class="form-control-sm form-control mb-2 mr-2 pr-5" id="username" placeholder="Usuario" required="" aria-required="true">
                            <input name="senha" type="password" class="form-control-sm form-control mb-2 pr-5" id="senha" placeholder="Senha" required="" aria-required="true">

                            <div id="resultado"></div>
                            <div class="modal-footer">
                                <a href="index.php" class="btn btn-outline-secondary">Voltar</a>
                                <input type="submit" class="btn btn-outline-success" name="entrar" value="Logar">
                            </div>
                    </form>

                </div>
            </div>
        </div>
    </div>



    <script src='https://www.google.com/recaptcha/api.js'></script>

</body>

</html>
