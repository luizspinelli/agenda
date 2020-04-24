<?php

session_start();

$n = $_SESSION['usuario'];

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../vendor\twbs\bootstrap\dist\css\bootstrap.min.css">
    <title>Agenda</title>
</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="./lista.php"><?php echo "Agenda $n" ?></a>
    <div class="collapse navbar-collapse">
        <?php

        if (isset($_SESSION['logado'])) {
            echo '                
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="./lista.php" class="nav-link">Lista</a>
                </li>
                    <li class="nav-item">
                        <a href="./cadastro.php" class="nav-link">Cadastro</a>
                    </li>
                    <li class="nav-item">
                        <a href="./sair.php" class="nav-link">Sair</a>
                    </li>
                </ul>
                
                ';
        }

        ?>
    </div>
</nav>