<?php
session_start();

//remover índices do array de sessão
//unset();

//destruir a varipavel de sessão
//session_destroy()
session_destroy();
header('Location: index.php');
?>