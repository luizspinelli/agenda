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
    <div class="container-fluid mt-3">
        <div class="card">
            <div class="card-body">
                <div class="card-header text-center">Contato</div>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead">
                            <tr>
                                <th scope="col">Contato</th>
                                <th scope="col">Telefone</th>
                                <th scope="col">Email</th>
                                <th scope="col">Alterar</th>
                                <th scope="col">Excluir</th>
                            </tr>
                        </thead>
                        <tbody class="tbody">
                            <?php
                                while ($resultado = mysqli_fetch_assoc($select)) {
                                    echo '<tr>';
                                    echo "<td scope='row'>{$resultado['contato']}</td>";
                                    echo "<td scope='row'>{$resultado['telefone']}</td>";
                                    echo "<td scope='row'>{$resultado['email']}</td>";
                                    echo "<td scope='row'><a href='cadastro.php?id={$resultado['id_contato']}'>Alterar</a></td>";
                                    echo "<td scope='row'><a href='deleta.php?id={$resultado['id_contato']}'>Excluir</a></td>";
                                    echo '</tr>';
                                }
                                ?>
                        </tbody>
                    </table>
                </div>
                <form action="cadastro.php" method="post" class="form-group">
                    <button class="btn btn-primary mt-2 col-sm-12">Cadastrar novo contato</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>