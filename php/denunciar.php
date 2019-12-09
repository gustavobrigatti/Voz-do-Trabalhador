<!DOCTYPE html>
<?php
    session_start();
    include_once ("../bd/conexao.php");
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Title -->
    <title>Voz do Trabalhador | Denunciar</title>
    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">
    <!-- Core Stylesheet -->
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
                        <h2>Denunciar</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->
    <div class="receipe-post-area section-padding-80">
        <!-- Receipe Post Search -->
        <!-- Receipe Slider -->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="receipe-slider owl-carousel">
                        <img src="../img/bg-img/bg5.jpg" alt="">
                        <img src="../img/bg-img/bg6.jpg" alt="">
                        <img src="../img/bg-img/bg7.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Receipe Content Area -->
        <div class="receipe-content-area">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8">
                        <div class="receipe-headline my-5">
                            <span></span>
                            <h2>Como saber se você está sendo explorado no trabalho?</h2>
                            <div class="receipe-duration">
                                <h6></h6>
                                <h6></h6>
                                <h6></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <!-- Single Preparation Step -->
                        <div class="single-preparation-step d-flex">
                            <h4>01.</h4>
                            <p></p>
                        </div>
                        <!-- Single Preparation Step -->
                        <div class="single-preparation-step d-flex">
                            <h4>02.</h4>
                            <p></p>
                        </div>
                        <!-- Single Preparation Step -->
                        <div class="single-preparation-step d-flex">
                            <h4>03.</h4>
                            <p> </p>
                        </div>
                        <!-- Single Preparation Step -->
                        <div class="single-preparation-step d-flex">
                            <h4>04.</h4>
                            <p> </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading text-left">
                            <h3>Faça uma Denúncia</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="contact-form-area">
                            <form action="../bd/denunciar.php" method="post">
                                <div class="row"> 
                                    <div class="col-12 col-lg-6">
                                        <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <input type="text" class="form-control" id="assunto" name="assunto" placeholder="Assunto" required>
                                    </div>
                                    <div class="col-12 col-lg-12">
                                        <select name="empresa" class="form-control show-tick" data-actions-box="true" id="empresa" required>
                                            <option disabled selected>Empresas</option>
                                            <?php
                                                $_sql = "SELECT id_empresa, nome_fantasia FROM empresa";
                                                $_query = mysqli_query( $_conexao , $_sql ) or die ( mysqli_error( $_conexao ) );
                                                while( $_line = mysqli_fetch_array( $_query ) ){
                                                    $_id_empresa = $_line['id_empresa'];
                                                    $_nome_fantasia = $_line['nome_fantasia'];
                                            ?>
                                            <option value="<?php echo $_id_empresa; ?>"><?php echo $_nome_fantasia; ?></option>
                                            <?php
                                                }
                                            ?>
                                        </select>
                                        <!--<input type="text" class="form-control" name="empresa" id="empresa" placeholder="Empresa" required>-->
                                    </div>
                                    <div class="col-12">
                                        <textarea name="mensagem" class="form-control" id="mensagem" cols="30" rows="10" placeholder="Denúncia" required></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn delicious-btn mt-30" type="submit">Fazer Denúncia </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Follow Us Instagram Area Start ##### -->
    <!-- ##### Follow Us Instagram Area End ##### -->
    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 h-100 d-flex flex-wrap align-items-center justify-content-between">
                    <!-- Footer Social Info -->
                    <!-- Footer Logo -->
                    <div class="footer-logo">
                        <a href="../index.php"><img src="../img/core-img/.png" alt=""></a>
                    </div>
                    <!-- Copywrite -->
                </div>
            </div>
        </div>
    </footer>
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