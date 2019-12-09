<!DOCTYPE html>
<?php
    session_start();
    include_once ("../bd/conexao.php");
    $_perfil = $_GET['perfil'];
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
                        <?php
                            $_sql = "SELECT nome_fantasia FROM empresa WHERE id_empresa = $_perfil;";
                            $_query = mysqli_query( $_conexao , $_sql ) or die ( mysqli_error( $_conexao ) );
                            while( $_line = mysqli_fetch_array( $_query ) ){
                        ?>
                            <h2><?php echo $_line['nome_fantasia']; ?></h2>
                        <?php
                            }
                        ?>
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
                        $_sql = "SELECT * FROM reclamacao WHERE id_empresa = $_perfil";
                        $_query = mysqli_query( $_conexao , $_sql ) or die ( mysqli_error( $_conexao ) );
                        while( $_line = mysqli_fetch_array( $_query ) ){
                    ?>
                    <div class="col-12 col-lg-6">
                        <div class="hero-body">
                            <div class="container has-text-centered">
                                <div class="column is-4 is-offset-4" style="width: 80%;">
                                    <h3 class="title has-text-grey"><?php echo $_line['assunto'];?></h3>
                                    <!--<div class="notification is-danger">
                                    <p>ERRO: Usuário ou senha inválidos.</p>
                                    </div>-->
                                    <div class="box" class="contact-form-area">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="contact-form-area">
                                                    <form action="../bd/responder.php" method="post">
                                                        <div class="row">
                                                            <div class="col-12 col-lg-6">
                                                                <?php echo $_line['nome'];?>
                                                            </div>
                                                            <div class="col-12 col-lg-6">
                                                                <?php echo $_line['dia_hora'];?>
                                                            </div>
                                                            <br><br>
                                                            <div class="col-12 text-center">
                                                                <?php echo $_line['reclamacao'];?>
                                                            </div>
                                                            <?php
                                                                if($_perfil == $_SESSION['id']){
                                                                    $_id_reclamacao = $_line['id_reclamacao'];
                                                                    $_contador_resposta=0;
                                                                    $_sql2 = "SELECT * FROM resposta WHERE id_reclamacao = $_id_reclamacao";
                                                                    $_query2 = mysqli_query( $_conexao , $_sql2 ) or die ( mysqli_error( $_conexao ) );
                                                                    while( $_line2 = mysqli_fetch_array( $_query2 ) ){
                                                                        $_contador_resposta = 1;
                                                                    }
                                                                    if($_contador_resposta == 0){
                                                            ?>
                                                            <br><br><br>
                                                            <div class="col-12 col-lg-12">
                                                                <textarea name="resposta" class="form-control" id="resposta" cols="30" rows="10" placeholder="Resposta" required></textarea>
                                                            </div>
                                                            <input type="text" id="id_reclamacao" name="id_reclamacao" value="<?php echo $_line['id_reclamacao'];?>" style="display: none;"/>
                                                            <div class="col-12 text-center">
                                                                <button class="btn delicious-btn mt-30" type="submit">Responder</button>
                                                            </div>
                                                            <?php
                                                                    }
                                                                }
                                                                $_id_reclamacao = $_line['id_reclamacao'];
                                                                $_sql2 = "SELECT * FROM resposta WHERE id_reclamacao = $_id_reclamacao";
                                                                $_query2 = mysqli_query( $_conexao , $_sql2 ) or die ( mysqli_error( $_conexao ) );
                                                                while( $_line2 = mysqli_fetch_array( $_query2 ) ){
                                                            ?>
                                                            <br><br><br><br><br><br>
                                                            <div class="col-12 col-lg-6">
                                                                Resposta
                                                            </div>
                                                            <br><br>
                                                            <div class="col-12 col-lg-6">
                                                                <?php echo $_line2['dia_hora'];?>
                                                            </div>
                                                            <div class="col-12 text-center">
                                                                <?php echo $_line2['resposta'];?>
                                                            </div>
                                                            <?php
                                                                }
                                                            ?>
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