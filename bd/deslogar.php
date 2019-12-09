<?php
	session_start();
	unset( $_SESSION['logado'] );
    unset( $_SESSION['id'] );
    unset( $_SESSION['nome_fantasia'] );
    unset( $_SESSION['razao_social'] );
    unset( $_SESSION['cnpj'] );
	session_destroy();
	sleep(2);
	header( "location:../index.php" );
?>