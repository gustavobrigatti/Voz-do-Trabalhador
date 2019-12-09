<!DOCTYPE html>
<?php
    session_start();
?>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tela de Login</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="icon" href="../img/core-img/favicon.ico">
    <link rel="stylesheet" href="../css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <link rel="stylesheet" href="../style.css">
</head>

<body>
     <?php
        include("header.php");
    ?>
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Tela de Cadastro</h3>
                    <h3 class="title has-text-grey"><a href="https://youtube.com/canaltioficial" target="_blank"></a></h3>
                    <!--<div class="notification is-danger">
                      <p>ERRO: Usuário ou senha inválidos.</p>
                    </div>-->
                    <div class="box" class="contact-form-area">
                        <div class="row">
                            <div class="col-12">
                                <div class="contact-form-area">
                                    <form action="../bd/cadastrar.php" method="post">
                                        <div class="row">
                                            <div class="col-12 col-lg-12">
                                                <input type="text" class="form-control" name="nome_fantasia" id="nome_fantasia" placeholder="Nome Fantasia" required>
                                            </div>
                                            <div class="col-12 col-lg-12">
                                                <input type="text" class="form-control" name="razao_social" id="razao_social" placeholder="Razão Social" required>
                                            </div>
                                            <div class="col-12 col-lg-12">
                                                <input type="text" class="form-control mascara-cpfcnpj" name="cnpj" id="cnpj" placeholder="CNPJ" required>
                                            </div>
                                            <div class="col-12 col-lg-12">
                                                <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha" required>
                                            </div>
                                            <div class="col-12 text-center">
                                                <button class="btn delicious-btn mt-30" type="submit">Criar Conta</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="../js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="../js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="../js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="../js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="../js/active.js"></script>
    <script src="../js/jQuery-Mask-Plugin-master/dist/jquery.mask.min.js"></script>
    <script>
        var cpfMascara = function (val) {
           return val.replace(/\D/g, '').length > 11 ? '00.000.000/0000-00' : '000.000.000-009';
        },
        cpfOptions = {
           onKeyPress: function(val, e, field, options) {
              field.mask(cpfMascara.apply({}, arguments), options);
           }
        };
        $('.mascara-cpfcnpj').mask(cpfMascara, cpfOptions);
    </script>
</body>

</html>