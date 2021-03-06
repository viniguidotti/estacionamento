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

    <meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0, viewport-fit=cover">
    <meta charset="utf-8">
    <title>Usuários - VGM Parking</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="/usuarios.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="btn btn btn-primary" href="/index1.php" aria-disabled="true">Voltar ao Painel</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="login-box">
        <img src="avatar.png" class="avatar">
        <h1>Cadastrar novo usuário.</h1>
        <form action="cadastro.php" method="post">
            <p for="user">Usuário</p>
            <input type="text" name="user" placeholder="Entre o usuário">
            <p for="senha">Senha</p>
            <input class="rounded" type="password" name="senha" placeholder="Entre a senha">
            <input type="submit" name="submit" value="Cadastrar">
        </form>

    </div>

</body>

</html>