<?php

session_start();

$usuarioCorreto = "admin";
$senhaCorreta = "admin123";

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if ($usuario === $usuarioCorreto && $senha === $senhaCorreta) {
    $_SESSION['usuario'] = $usuario;
    header("Location: welcome.php");
    exit();
} else {
    echo "Usuário ou senha incorretos. <a href='index.php'>Tente novamente</a> ";
}
