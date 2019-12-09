<?php
    session_start();
    include_once ("conexao.php");
    mysqli_set_charset($_conexao,"utf8");
    mysqli_query("SET NAMES 'utf8'");
    mysqli_query('SET character_set_connection=utf8');
    mysqli_query('SET character_set_client=utf8');
    mysqli_query('SET character_set_results=utf8');

    $_nome_fantasia = $_POST['nome_fantasia'];
    $_razao_social = $_POST['razao_social'];
    $_cnpj = $_POST['cnpj'];
    $_senha = $_POST['senha'];

    $_senha = md5($_senha);

    $_sql = "INSERT INTO empresa (nome_fantasia, razao_social, cnpj, senha)
             VALUES ('$_nome_fantasia', '$_razao_social', '$_cnpj', '$_senha');";
    $_query = mysqli_query($_conexao, $_sql) or die (mysqli_error($_conexao));

    $_sql = "SELECT id_empresa FROM empresa WHERE cnpj = '$_cnpj';";
    $_query = mysqli_query($_conexao,$_sql);
    $_line = mysqli_fetch_array($_query);
    $_id = $_line['id_empresa'];
    $_SESSION['logado'] = 1;
    $_SESSION['id'] = $_id;
    $_SESSION['nome_fantasia'] = $_nome_fantasia;
    $_SESSION['razao_social'] = $_razao_social;
    $_SESSION['cnpj'] = $_cnpj;

    echo $_line['id_empresa'];

    header('Location: ../index.php');
?>