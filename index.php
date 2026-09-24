<?php
//L'index ha de carregar el model i redirigir al home
session_start();
include('./model/users.php');
header('Location: ./views/home.php');
exit;

?>
