<?php
include 'functions.php';
require 'config.php';
session_start();

	if(!isLoggedIn()){
    		echo "<script>alert('Faça Login para acessar o sistema.');location.href=\"login.html\";</script>";
	}
	
?>

    <!DOCTYPE html>
    <html>

    <head>

        <meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0, viewport-fit=cover">
        <meta charset="utf-8">
        <title>Administração - VGM Parking</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="/index1.css" rel="stylesheet" />

    </head>

    <body>

        <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav ">
                    <li class="nav-item active">
                        <a class="btn btn btn-primary mg-3" href="/clientes.html">Clientes</a>
                    </li>
                    </li>
                    <li class="nav-item active">
                        <a class="btn btn btn-primary mg-3" href="/planos.html">Planos</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn btn-primary mg-3" href="/movdiario.html" role="button">Movimento diário</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn btn-primary mg-3" href="/cadastrocliente.html">Cadastrar cliente</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn btn-primary mg-3" href="/usuarios.php" aria-disabled="true">Usuários</a>
                    </li>

                    <li class="nav-item">
                        <a class="btn btn btn-primary mg-3" href="/servicos.html" aria-disabled="true">Consulta e Inclusão de serviços</a>
                    </li>

                    <div class="absolute r-0 mg-8">
                        <a class="btn btn btn-primary mg-3 login" href="logout.php" aria-disabled="true">Sair</a>
                    </div>

                    <h5 class="absolute r-0 mg-7">
                        Olá, <br> Administrador!
                    </h5>

                </ul>
            </div>
        </nav>

    </body>

    </html>