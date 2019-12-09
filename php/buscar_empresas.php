<!DOCTYPE html>
<?php
    session_start();
    include_once ("../bd/conexao.php");
    $_busca = $_GET['busca'];
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Title -->
    <title>Voz do Trabalhador | Busque Ajuda</title>
    <!-- Favicon -->
    <link rel="icon" href="../img/core-img/favicon.ico">
    <!-- Core Stylesheet -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="../css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <?php
        include("header.php");
    ?>
    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(../img/bg-img/breadcumb3.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-text text-center">
                        <h2>Busca de Empresas</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row container has-text-centered">
        <div class="col-12">
            <div class="contact-form-area container has-text-centered">
                <div class="row">
                    <?php
                        $_sql = "SELECT * FROM empresa WHERE LOWER(nome_fantasia) LIKE LOWER('%$_busca%');";
                        $_query = mysqli_query( $_conexao , $_sql ) or die ( mysqli_error( $_conexao ) );
                        while( $_line = mysqli_fetch_array( $_query ) ){
                    ?>
                    <div class="col-12 col-lg-6">
                        <div class="hero-body">
                            <div class="container has-text-centered">
                                <div class="column is-4 is-offset-4" style="width: 80%;">
                                    <h3 class="title has-text-grey">
                                        <a class="title has-text-grey" href="perfil.php?perfil=<?php echo $_line['id_empresa']; ?>">
                                            <?php echo $_line['nome_fantasia'];?>
                                        </a>
                                    </h3>
                                    <!--<div class="notification is-danger">
                                    <p>ERRO: Usuário ou senha inválidos.</p>
                                    </div>-->
                                    <div class="box" class="contact-form-area">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="contact-form-area">
                                                    <form action="../bd/login/php" method="post">
                                                        <div class="row">
                                                            <div class="col-12 col-lg-12">
                                                                Nome Fantasia: <?php echo $_line['nome_fantasia'];?>
                                                            </div>
                                                            <div class="col-12 col-lg-12">
                                                                Razão Social: <?php echo $_line['razao_social'];?>
                                                            </div>
                                                            <div class="col-12 col-lg-12">
                                                                CPNJ: <?php echo $_line['cnpj'];?>
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
                    </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    
    <!-- ##### Contact Area End ##### -->
    <!-- ##### Follow Us Instagram Area End ##### -->
    <!-- ##### Footer Area Start ##### -->
    <!-- ##### Footer Area Start ##### -->
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
</body>
</html>