<?php
   session_start();
   
   if(session_destroy()) {
      header("Location: login1.php");
   }
?><?php
 
// inicia a sessão
session_start();
 
// muda o valor de logged_in para false
$_SESSION['logged_in'] = false;
 
// finaliza a sessão
session_destroy();
 
// retorna para a index1.php
header('Location: login.html');
?>