<?php
    require __DIR__ . '/dbc.php';

    $banco = 'agenda';
    $tabela = 'usuarios';

    $conn = conecta($banco);

    extract($_POST);

    $senha = md5($senha);

    $qry = "INSERT INTO $tabela (usuario,senha,email) VALUES ('$usuario','$senha','$email');";

    mysqli_query($conn,$qry);

    header('location: ./login.php');

?>