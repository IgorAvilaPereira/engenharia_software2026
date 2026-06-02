<?php

abstract class Usuario {
    protected string $email;
    protected string $senha;
    protected string $nome;

    public function __construct($email, $nome, $senha) {
        $this->email = $email;
        $this->nome = $nome;
        $this->senha = $senha;
    }

    public function getSenha(): string {
        return $this->senha;
    }


    public function getNome(): string {
        return $this->nome;
    }

    public function getEmail(): string {
        return $this->email;
    }
} 

class PessoaFisica extends Usuario {
    private string $cpf;

    public function __construct($email, $nome, $senha, $cpf) {
        parent::__construct($email, $nome, $senha);
        // $this->nome = "oi";
        $this->cpf = $cpf;
    }

    public function getCpf(): string {
        return $this->cpf;
    }
}

$igor = new PessoaFisica("igor.pereira@riogrande.ifrs.edu.br", "igor pereira", "123", "2222222222");
echo $igor->getNome()."\n";

?>