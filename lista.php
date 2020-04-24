<?php

require __DIR__ . '/nav.php';
require __DIR__ . '/dbc.php';
require __DIR__ . '/session.php';

$banco = "agenda";

$conn = conecta($banco);

extract($_POST);

$tabela = 'contatos';

$usuario = $_SESSION['logado'];

$select = mysqli_query($conn, "SELECT * FROM $banco.$tabela WHERE id_usuario='$usuario';");

if (mysqli_close($conn)) {
    unset($conn);
}

extract($_GET);

if (isset($insert)) {
    echo "<div class='alert alert-success'>
    Contato cadastrado com sucesso;
    </div>";
} elseif (isset($altera)) {
    echo "<div class='alert alert-warning'>
    Contato alterado com sucesso;
    </div>";
} elseif (isset($delete)) {
    echo "<div class='alert alert-danger'>
    Contato excluído com sucesso;
    </div>";
};


?>

<body class="text-center">
    <div class="container center mt-3">
        <div class="card col-10">
            <div class="card-header text-center">Contato</div>
            <div class="card-body">
                <table class="table">
                    <thead class="thead">
                        <tr>
                            <th>Contato</th>
                            <th>Telefone</th>
                            <th>Email</th>
                            <th>Alterar</th>
                            <th>Excluir</th>
                        </tr>
                    </thead>
                    <?php
                    while ($resultado = mysqli_fetch_assoc($select)) {
                        echo "<tr>";
                        echo "<td>{$resultado['contato']}</td>";
                        echo "<td>{$resultado['telefone']}</td>";
                        echo "<td>{$resultado['email']}</td>";
                        echo "<td><a href='cadastro.php?id={$resultado['id_contato']}'>Alterar</a>";
                        echo "<td><a href='deleta.php?id={$resultado['id_contato']}'>Excluir</a>";
                        echo "<td></td>";
                        echo "</tr>";
                    }
                    ?>
                </table>
                <form action="cadastro.php" method="post" class="form-group">
                    <button class="btn btn-primary col-12">Cadastrar novo contato</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>