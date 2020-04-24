<?php

function conecta($banco,$dns="database-1.cnq400r5oy6v.us-east-1.rds.amazonaws.com",$user="admin",$senha="12345678")
{
    $conn = mysqli_connect($dns,$user,$senha,$banco);

    if($conn){
        return $conn;
    }
}

function desconecta($conn){
    mysqli_close($conn);
    unset($conn);
}

