<?php

require __DIR__ . '/nav.php';
require __DIR__ . '/session.php';
require __DIR__ . '/dbc.php';

extract($_GET);

$banco='agenda';
$tabela='contatos';

$conn = conecta($banco);

mysqli_query($conn,"DELETE FROM $banco.$tabela WHERE (id_contato='$id')");

header("location: /lista.php?delete='ok'");

desconecta($conn);

?>