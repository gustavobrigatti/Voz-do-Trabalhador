    <?php
    session_start();
    include_once ("conexao.php");
    mysqli_set_charset($_conexao,"utf8");
    mysqli_query("SET NAMES 'utf8'");
    mysqli_query('SET character_set_connection=utf8');
    mysqli_query('SET character_set_client=utf8');
    mysqli_query('SET character_set_results=utf8');

    $_resposta = $_POST['resposta'];
    $_id_reclamacao = $_POST['id_reclamacao'];

    //PEGA DATA E HORA
    date_default_timezone_set('America/Sao_Paulo');
    $date = date('d/m/Y');
    $hour = date('H:i');
    $_dia_hora = $date." ás ".$hour;

    $_sql = "INSERT INTO resposta (id_reclamacao, resposta, dia_hora)
             VALUES ('$_id_reclamacao', '$_resposta', '$_dia_hora');";
    $_query = mysqli_query($_conexao, $_sql) or die (mysqli_error($_conexao));

    header('Location: ../index.php');
?>