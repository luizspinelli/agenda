<?php

require './dbc.php';

$banco = 'agenda';

$conn = conecta($banco);

if ($conn) {
    echo "conectado<br>";
}else{
    echo "erro ao conectar no banco<br>";
}

extract($_POST);

echo "$usuario<br>";
echo "$senha<br>";

$senha = md5($senha);

$tabela = 'usuarios';

$sql = "SELECT * FROM $banco.$tabela WHERE usuario='$usuario' and senha='$senha';";

echo $sql;

if ($qry=mysqli_query($conn,$sql)){
    echo "<br>tudo certo";
}else{
    echo "Nope";
};

echo "<br>";

$resultado =  mysqli_fetch_assoc($qry);


$usuariobanco = $resultado['usuario'];

if ($usuario=$usuariobanco) {
    session_start();
    $_SESSION['logado'] = $resultado['id'];
    $_SESSION['usuario'] = $resultado['usuario'];
    header('location: ./lista.php');
}else{
    header('location: /login.php');
};

if(desconecta($conn)){
    echo "desconectado<br>";
};

?>