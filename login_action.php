<?php
session_start();
require 'config.php';

$id = filter_input(INPUT_POST, 'id');
$password = filter_input(INPUT_POST, 'password');

if($id && $password) {
    $sql = $pdo->prepare("SELECT * FROM users WHERE id = :id AND password = :password");
    $sql->bindValue(':password', $password);
    $sql->bindValue(':id', $id);
    $sql->execute();

    if ($sql->rowCount() > 0) {
        header("Location: home.php");
    } else {
        $_SESSION['aviso'] = 'Dados incorretos!';
        header("Location: index.php");
    }
} else {
    $_SESSION['aviso'] = 'Dados incorretos!';
        header("Location: index.php");
}