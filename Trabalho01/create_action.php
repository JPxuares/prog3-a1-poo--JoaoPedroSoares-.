<?php
require_once 'classes/User.php';
require_once 'classes/Verifica.php';

$Nome = htmlspecialchars(trim($_POST['Nome']));
$Email = filter_var(trim($_POST['Email']), FILTER_VALIDATE_EMAIL);
$Senha = $_POST['Senha'];

if ($Nome && $Email && $Senha) {
    $user = new User($Nome, $Email, $Senha);
    Verifica::adicionar($user);
    header("Location: access.php");
    exit;
}

echo "erro";