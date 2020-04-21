<?php

require __DIR__ . '/nav.php';
require __DIR__ . '/session.php';
require __DIR__ . '/dbc.php';

extract($_GET);

extract($_POST);

$banco='agenda';
$tabela='contatos';

$conn = conecta($banco);

mysqli_query($conn,"UPDATE $banco.$tabela SET contato='$contato', telefone='$telefone', email='$email' WHERE (id_contato='$id')");

header("location: /lista.php?altera='ok'");

desconecta($conn);

?>