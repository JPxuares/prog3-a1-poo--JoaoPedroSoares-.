<?php
require_once 'classes/Verifica.php';

$email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
$senha = $_POST['senha'];
$lembrar = isset($_POST['lembrar']);

if (Verifica::check($email, $senha)) {
    if ($lembrar) {
        setcookie("email", $email, time() + 3600 * 24 * 30);
    } else {
        setcookie("email", "", time() - 3600);
    }
    header("Location: panel.php");
    exit;
}

echo "erro";