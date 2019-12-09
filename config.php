<?php
 
// constantes com as credenciais de acesso ao banco MySQL
define('DB_HOST', '3.136.108.11');
define('DB_USER', 'vinimoraes321');
define('DB_PASS', 'vini2308');
define('DB_NAME', 'estacionamento');
 
// habilita todas as exibições de erros
ini_set('display_errors', true);
error_reporting(E_ALL);
 
// inclui o arquivo de funçõees
require_once 'functions.php';