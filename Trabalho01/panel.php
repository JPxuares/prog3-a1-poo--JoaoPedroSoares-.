<?php
require_once 'classes/Sessao.php';
Sessao::login();
$u = Sessao::get('User');

if (!$user) {
    header("Location: access.php");
    exit;
}

$b = $_COOKIE['Email'] ?? '';
?>
<h1>Ola tudo certinho, <?= $user->PegaNome() ?>?</h1>
<?php if ($cookieemail): ?>
<p>O seu Email: <?= htmlspecialchars($cookieemail) ?></p>
<?php endif; ?>
<a href="exit.php">Sair do seu User</a>