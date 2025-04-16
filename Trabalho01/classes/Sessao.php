<?php
class Sessao {
    public static function login() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    public static function set($k, $v) {
        $_SESSION[$k] = $v;
    }

    public static function get($k) {
        return $_SESSION[$k] ?? null;
    }

    public static function parar() {
        session_destroy();
    }
}