<?php
$b = $_COOKIE['Email'] ?? '';
?>
<form action="access_action.php" method="POST">
    E-mail: <input type="email" name="email" value="<?= $b ?>" required><br>
    Senha: <input type="password" name="senha" required><br>
    <label><input type="checkbox" name="lembrar" <?= $b ? 'checked' : '' ?>> Lembrar?</label><br>
    <button type="submit">Login</button>
</form>