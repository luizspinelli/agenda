<?php
  require 'nav.php';
?>

<body class="">
<div class="container-fluid mt-3">
        <div class="card">
            <div class="card-body">
                <div class="card-header text-center">Novo Usuario</div>
                <form action="novousuariocadastro.php" method="post" class="form-inline col-sm-12">
                    <div class="form-group row col-sm-12 mt-2">
                        <label for="usuario" class="col-sm-2 col-form-label">Usuario</label><br>
                        <input type="text" name="usuario" id="usuario" class="form-control col-sm-10" required><br>
                    </div>
                    <div class="form-group row col-sm-12 mt-2">
                        <label for="senha" class="col-sm-2 col-form-label">Senha</label><br>
                        <input type="text" name="senha" id="senha" class="form-control col-sm-10 " required><br>
                    </div>
                    <div class="form-group row col-sm-12 mt-2">
                        <label for="email" class="col-sm-2 col-form-label">Email</label><br>
                        <input type="email" name="email" id="email" class="form-control col-sm-10"><br>
                    </div>
                    <button class="btn btn-secondary mt-4">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>