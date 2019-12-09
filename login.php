<?php
 
// inclui o arquivo de inicialização
require 'config.php';
 
// resgata variáveis do formulário
$login = isset($_POST['login']) ? $_POST['login'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';
 
if (empty($login) || empty($senha))
{
    echo "<script>alert('Preencha todos os campos.');location.href=\"login.html\";</script>";
    exit;
}
 
// cria o hash da senha
//$senhaHash = make_hash($senha);
 
$PDO = db_connect();
 
$sql = "SELECT ID FROM usuarios WHERE user = :login AND senha = :senha";
$stmt = $PDO->prepare($sql);

echo $login . $senha;

$stmt->bindParam(':login', $login);
$stmt->bindParam(':senha', $senha);
 
$stmt->execute();
 
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
 
if (count($users) <= 0)
{
    echo "<script>alert('Login ou Senha Incorretos, favor corrigir!');location.href=\"login.html\";</script>";
    exit;
}
 
// pega o primeiro usuário

$user = $users[0];
 
session_start();
$_SESSION['logged_in'] = true;
$_SESSION['ID'] = $user['ID'];

header('Location: index1.php');