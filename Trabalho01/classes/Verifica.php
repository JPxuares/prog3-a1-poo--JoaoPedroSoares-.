<?php
require_once 'User.php';
require_once 'Sessao.php';

class Verifica {
    private static $user = [];

    public static function adicionar(User $user) {
        self::$user[$user->PegaEmail()] = $user;
    }

    public static function check($email, $senha) {
        if (isset(self::$user[$email])) {
            $user = self::$user[$email];
            if ($user->checkC($senha)) {
                Sessao::login();
                Sessao::set('user', $user);
                return true;
            }
        }
        return false;
    }

    public static function get($Email) {
        return self::$user[$Email] ?? null;
    }
}