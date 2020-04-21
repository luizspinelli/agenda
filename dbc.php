<?php

function conecta($banco,$dns="localhost",$user="root",$senha="")
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

