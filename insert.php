<?php

require __DIR__ . '/nav.php';
require __DIR__ . '/dbc.php';
require __DIR__ . '/session.php';

$banco = "agenda";

$conn = conecta($banco);

extract($_POST);

$tabela = 'contatos';

$usuario = $_SESSION['logado'];

$sql = "INSERT $tabela (contato,telefone,email,id_usuario) VALUES ('$contato','$telefone','$email','$usuario')";

if(mysqli_query($conn, $sql)){
    header("location: ./lista.php?insert='ok'");
};

desconecta($conn);
