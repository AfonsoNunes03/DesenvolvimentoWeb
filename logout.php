<?php
session_start(); // Inicia a sessão para ter acesso aos dados atuais
session_destroy(); // Destrói todas as informações da sessão (faz o logout efetivo)

// Redireciona o utilizador de volta para a Página Inicial
header("Location: index.php"); 
exit();
?>