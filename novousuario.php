<?php
  require 'nav.php';
?>

<body class="text-center">
<div class="container">
        <div class="card col-8">
            <div class="card-body">
                <div class="card-header text-center">Novo Usuario</div>
                <form action="novousuariocadastro.php" method="post" class="form-inline col-12">
                    <div class="form-group col-12 mt-2">
                        <label for="usuario" class="col-4">Usuario</label><br>
                        <input type="text" name="usuario" id="usuario" class="form-control col-8" required><br>
                    </div>
                    <div class="form-group col-12 mt-2">
                        <label for="senha" class="col-4">Senha</label><br>
                        <input type="text" name="senha" id="senha" class="form-control col-8" required><br>
                    </div>
                    <div class="form-group col-12 mt-2">
                        <label for="email" class="col-4">Email</label><br>
                        <input type="email" name="email" id="email" class="form-control col-8"><br>
                    </div>
                    <button class="btn btn-secondary mt-4">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>