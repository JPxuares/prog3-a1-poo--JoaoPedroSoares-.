<?php
class User {
    private $Nome;
    private $Email;
    private $Senha;

    public function __construct($a, $b, $c) {
        $this->Nome = $a;
        $this->Email = $b;
        $this->Senha = password_hash($c, PASSWORD_DEFAULT);
    }

    public function PegaNome() {
        return $this->Nome;
    }

    public function PegaEmail() {
        return $this->Email;
    }

    public function chekSenha($c) {
        return password_verify($c, $this->Senha);
    }
}