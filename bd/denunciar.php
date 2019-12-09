<?php
    session_start();
    include_once ("conexao.php");
    mysqli_set_charset($_conexao,"utf8");
    mysqli_query("SET NAMES 'utf8'");
    mysqli_query('SET character_set_connection=utf8');
    mysqli_query('SET character_set_client=utf8');
    mysqli_query('SET character_set_results=utf8');

    $_nome = $_POST['nome'];
    $_assunto = $_POST['assunto'];
    $_id_empresa = $_POST['empresa'];
    $_mensagem = $_POST['mensagem'];

    //PEGA DATA E HORA
    date_default_timezone_set('America/Sao_Paulo');
    $date = date('d/m/Y');
    $hour = date('H:i');
    $_dia_hora = $date." ás ".$hour;

    $_sql = "INSERT INTO reclamacao (id_empresa, nome, assunto, reclamacao, dia_hora)
             VALUES ('$_id_empresa', '$_nome', '$_assunto', '$_mensagem', '$_dia_hora');";
    $_query = mysqli_query($_conexao, $_sql) or die (mysqli_error($_conexao));

    header('Location: ../index.php');
?>