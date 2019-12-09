<!-- Preloader -->
<div id="preloader">
    <i class="circle-preloader"></i>
    <img src="../img/core-img/salad.png" alt="">
</div>
<!-- Search Wrapper -->
<div class="search-wrapper">
    <!-- Close Btn -->
    <div class="close-btn"><i class="fa fa-times" aria-hidden="true"></i></div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="buscar_empresas.php" method="get">
                    <input type="busca" name="busca" placeholder="Buscar empresas...">
                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- ##### Header Area Start ##### -->
<header class="header-area">
    <!-- Top Header Area -->
    <div class="top-header-area">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-between">
                <!-- Top Social Info -->
                <div class="col-12 col-sm-6">
                    <div class="top-social-info text-right">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar Area -->
    <div class="delicious-main-menu">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="deliciousNav">
                    <!-- Logo -->
                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>
                    <!-- Menu -->
                    <div class="classy-menu">
                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>
                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li class="active"><a href="../index.php">Início</a></li>   
                                <li><a href="denunciar.php">Denunciar</a></li>
                                <li><a href="help.php">Busque Ajuda</a></li>
                                <?php
                                    if(!isset($_SESSION['logado'])){
                                ?>
                                <li><a href="login.php">Login</a></li>
                                <?php
                                    }else if($_SESSION['logado'] == 1){
                                ?>
                                    <li><a href="perfil.php?perfil=<?php echo $_SESSION['id']; ?>">Meu Perfil</a></li>
                                    <li><a href="../bd/deslogar.php">Deslogar</a></li>
                                <?php
                                    }
                                ?>
                            </ul>
                            <!-- Newsletter Form -->
                            <div class="search-btn">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </div>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ##### Header Area End ##### -->