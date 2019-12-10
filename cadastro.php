<?php
 
require_once 'config.php';

$user = isset($_POST['user']) ? $_POST['user'] : null;
$senha = isset($_POST['senha']) ? $_POST['senha'] : null;

if (empty($user) || empty($senha))
{
    echo "<script>alert('Preencha todos os campos.');location.href=\"usuarios.html\";</script>";
    exit;
}
 
// insere no banco
$PDO = db_connect();
$sql = "INSERT INTO usuarios (user, senha, tipo_usuario_id, status_id) VALUES (:user, :senha, 3, 1)";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':user', $user);
$stmt->bindParam(':senha', sha1($senha));
 
 
if ($stmt->execute())
{
    echo "<script>alert('Cadastro realizado com sucesso.');location.href=\"index1.php\";</script>";
}
else
{
    echo "<script>alert('Erro ao cadastrar.');location.href=\"usuarios.html\";</script>";
}