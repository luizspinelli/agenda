<?php

require __DIR__ . '/nav.php';
require __DIR__ . '/session.php';
require __DIR__ . '/dbc.php';

extract($_GET);

$banco = 'agenda';
$tabela = 'contatos';

$conn = conecta($banco);

$qry = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM $banco.$tabela WHERE id_contato='$id'"));

desconecta($conn);

$action = isset($id)?"/alterar.php?id=$id":"/insert.php";
$nomeForm = isset($id)?"Alterar Contato":"Novo Contato";
$btnForm = isset($id)?"Alterar":"Cadastrar";
$contato = isset($id)?$qry['contato']:"";
$telefone = isset($id)?$qry['telefone']:"";
$email = isset($id)?$qry['email']:"";

?>

<body class="text-center">
    <div class="container mt-3">
        <div class="card col-10">
            <div class="card-body">
                <div class="card-header text-center"><?php echo $nomeForm?></div>
                <form action="<?php echo $action?>" method="post" class="form-inline col-12">
                    <div class="form-group col-12 mt-2">
                        <label for="contato" class="col-4">Contato</label><br>
                        <input type="text" name="contato" id="contato" class="form-control col-8" required value="<?php echo $contato?>"><br>
                    </div>
                    <div class="form-group col-12">
                        <label for="telefone" class="col-4">Telefone</label><br>
                        <input type="text" name="telefone" id="telefone" class="form-control col-8 mt-2" value="<?php echo $telefone?>"><br>
                    </div>
                    <div class="form-group col-12">
                        <label for="email" class="col-4">Email</label><br>
                        <input type="email" name="email" id="email" class="form-control col-8 mt-2" value="<?php echo $email?>"><br>
                    </div>
                    <button class="btn btn-secondary col-12 mt-4"><?php echo $btnForm?></button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>