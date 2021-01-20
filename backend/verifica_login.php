<?php
session_start();

if(!$_SESSION['usuario']) {
    header('Location: ../cliente.php');
    exit();
}

?>
