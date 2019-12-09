<?php
    session_start();
    include_once("conexao.php");
    
    $_cnpj = $_POST['cnpj'];
    $_senha = $_POST['senha'];

    $_senha = md5($_senha);
    
    $_sql = "SELECT * FROM empresa WHERE cnpj = '$_cnpj' AND senha = '$_senha'";
    $_query = mysqli_query($_conexao,$_sql);
    $_line = mysqli_fetch_array($_query);
    if($_cnpj == $_line['cnpj'] and $_senha == $_line['senha']){
        $_id = $_line['id_empresa'];
        $_nome_fantasia = $_line['nome_fantasia'];
        $_razao_social = $_line['razao_social'];
        $_cnpj = $_line['cnpj'];
        
        $_SESSION['logado'] = 1;
        $_SESSION['id'] = $_id;
        $_SESSION['nome_fantasia'] = $_nome_fantasia;
        $_SESSION['razao_social'] = $_razao_social;
        $_SESSION['cnpj'] = $_cnpj;
        
        header("location: ../../index.php");
    }else{
        echo  "<script>alert('Erro de Login');</script>";
        header("location: ../../php/login.php?error=nologin");
    }