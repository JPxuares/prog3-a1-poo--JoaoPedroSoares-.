<?php
require_once 'classes/Sessao.php';
Sessao::login();
Sessao::parar();
header("Location: access.php");
exit;