<?php
include 'functions.php';
require 'config.php';
session_start();

if (!isLoggedIn()) {
    echo "<script>alert('Faça Login para acessar o sistema.');location.href=\"login.html\";</script>";
}

?>

<!DOCTYPE html>
<html>

<head>

    <meta name="viewport"
        content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0, viewport-fit=cover">
    <meta charset="utf-8">
    <title>Usuários - VGM Parking</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="/usuarios.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a id="back" class="btn btn btn-primary" href="/index1.php" aria-disabled="true">Voltar ao Painel</a>
                </li>
                <li class="nav-item active">
                    <a id="criar" class="btn btn btn-primary" href="/criarusuario.php" aria disabled="true">Criar novo Usuário</a>
            </ul>
        </div>
    </nav>

    <?php
    $PDO = db_connect();
    $sql = "SELECT * FROM usuarios";
    $stmt = $PDO->prepare($sql);
    $stmt->execute();

    $result = $stmt->fetchAll();
    ?>

<br>
    <form method="post" action="layout1.php">

            <div id="table">
                <table class="table table-striped table-dark table-responsive">
                    <thead>
                        <tr>
                            <th scope="col">Checkbox</th>
                            <th scope="col">Tipo do usuário</th>
                            <th scope="col">Status do usuário</th>
                            <th scope="col">Usuário</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        foreach ($result as $value) {
                            ?>
                            <tr>
                                <td><?= "<input type=checkbox name='user[]' value=" . $value['user'] . ">" ?></td>
                                <td><?= $value['tipo_usuario_id'] ?></td>
                                <td><?= $value['status_id'] ?></td>
                                <td><?= $value['user'] ?></td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>
            <br>
    </form>

    <script>
        function selecionar() {
            document.getElementsByName('user[]').forEach((e) => e.checked = true);
        }
    </script>

</body>

</html>