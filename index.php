<?php
    session_start();
    if(!isset($_SESSION['logado'])){
        header("Location: php/home.php");
    }else{
         header("Location: php/home.php");
    }
?>