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

<body class="">
    <div class="container-fluid mt-3">
        <div class="card">
            <div class="card-body">
                <div class="card-header text-center"><?php echo $nomeForm?></div>
                <form action="<?php echo $action?>" method="post" class="form-inline col-sm-12">
                    <div class="form-group row col-sm-12 mt-2">
                        <label for="contato" class="col-sm-2 col-form-label">Contato</label><br>
                        <input type="text" name="contato" id="contato" class="form-control col-sm-10" required value="<?php echo $contato?>"><br>
                    </div>
                    <div class="form-group row col-sm-12 mt-2">
                        <label for="telefone" class="col-sm-2 col-form-label">Telefone</label><br>
                        <input type="text" name="telefone" id="telefone" class="form-control col-sm-10 mt-2" value="<?php echo $telefone?>"><br>
                    </div>
                    <div class="form-group row col-sm-12 mt-2">
                        <label for="email" class="col-sm-2 col-form-label">Email</label><br>
                        <input type="email" name="email" id="email" class="form-control col-sm-10 mt-2" value="<?php echo $email?>"><br>
                    </div>
                    <button class="btn btn-secondary col-sm-12 mt-2"><?php echo $btnForm?></button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>